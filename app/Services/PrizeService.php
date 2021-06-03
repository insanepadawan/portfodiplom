<?php

namespace App\Services;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PrizeService {

    protected $apiUrl;

    protected $user;

    protected $apiGameId;

    protected $prize;

    public function __construct(User $user)
    {
        $this->user = $user;

        $this->apiUrl = config('algorithm.url');
    }

    public function getIpAddress()
    {
        if(!empty($_SERVER['HTTP_CLIENT_IP']))
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else
            $ip = $_SERVER['REMOTE_ADDR'];

        return $ip;
    }

    public function registerUser()
    {
        $request = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Auth' => 'AFkm10kIlm5xC'
        ])->post($this->apiUrl. 'ps', [
            'id' => $this->user->phone,
            'first_name' => $this->user->name
        ]);

        Envoy::create(['type' => 'auth.register', 'response' => $request->body(), 'user_id' => $this->user->id]);
    }

    public function checkPrizeToGive()
    {
        $prizeToGive = null;

        $request = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Auth' => 'AFkm10kIlm5xC'
        ])->post($this->apiUrl. 'ps/' . $this->user->phone.'/games', [
            'ip_address' => $this->getIpAddress(),
            'game_type' => 'bill'
        ]);

        $data = $request->json();

        $this->apiGameId = $data['game_id'];

        if($data && $data['prize'])
        {
            $this->prize = $data['prize']['prize_id'];

            if($data['prize']['prize_id'] == 'balance5') $prizeToGive = Prize::where('slug', 'balance5')->first();
            if($data['prize']['prize_id'] == 'showbox') $prizeToGive = Prize::where('slug', 'showbox')->first();
        }

        Envoy::create(['type' => 'prize.check', 'response' => $request->body(), 'user_id' => $this->user->id]);

        return $prizeToGive;
    }

    public function confirmPrizeToGive ()
    {
        $request = Http::withHeaders([
            'Content-Type' => 'application/json',
            'X-Auth' => 'AFkm10kIlm5xC'
        ])->post($this->apiUrl. 'ps/' . $this->user->phone.'/catch', [
            'prize_id' => $this->prize,
            'ip_address' => $this->getIpAddress()
        ]);

        Envoy::create(['type' => 'prize.confirm', 'response' => $request->body(), 'user_id' => $this->user->id]);
    }

    protected function checkWinner(Prize $prize) : bool
    {
        return Winner::where('user_id', $this->user->id)
            ->where('prize_id', $prize->id)
            ->exists();
    }

    protected function hasPrizesToday (Prize $prize) : bool
    {
        $winnersToday = Winner::where('prize_id', $prize->id)
            ->whereBetween('created_at', [now()->startOfDay(), now()->endOfDay()])
            ->count();

        if($prize->per_day - $winnersToday <= 0) return false;

        return true;
    }

    public function givePrize(string $type, $date = null)
    {
        $prizeToGive = $this->checkPrizeToGive();

        $winner = null;

        if($prizeToGive && !$this->checkWinner($prizeToGive) && $this->hasPrizesToday($prizeToGive))
        {
            // give user prize
            $winner = Winner::create([
                'user_id' => $this->user->id,
                'prize_id' => $prizeToGive->id,
                'date' => ($date) ? $date : now(),
                'type' => $type
            ]);

            if($winner->prize->slug == 'showbox')
            {
                $this->confirmPrizeToGive();
            }

            if($winner->prize->slug == 'balance5')
            {
                $this->confirmPrizeToGive();
            }
        }

        return $winner;
    }

}
