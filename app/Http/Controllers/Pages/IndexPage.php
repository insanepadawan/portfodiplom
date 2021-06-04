<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Models\Winner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class IndexPage extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function profile()
    {
        return view('pages.profile');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function education()
    {
        return view('pages.education');
    }

    public function experience()
    {
        return view('pages.experience');
    }

    public function insert()
    {
        return view('pages.insert');
    }

    public function portfolio()
    {
        return view('pages.portfolio');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function skills()
    {
        return view('pages.skills');
    }

    public function testimonials()
    {
        return view('pages.testimonials');
    }

    public function authenticateUser ()
    {
        if (Auth::check())
            return redirect()->route('profile');
        else
            return view('pages.login');
    }

    public function registerUser ()
    {
        return view('pages.register');
    }

    public function sendmail (Request $request)
    {
        $data = $request->except('_token');
        $prev = url()->previous();
        try {
            Mail::to('nurik.shurik.ms@gmail.com')->send(new SendMail($data));
            return redirect($prev);
        }catch (\Exception $exception) {
            Log::error('Error contact send - '. $exception->getMessage());
            return redirect($prev)->with($exception);
        }
    }

}
