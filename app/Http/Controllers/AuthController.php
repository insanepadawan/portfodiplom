<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckRegistrationRequest;
use App\Http\Requests\User\AuthorizationRequest;
use App\Http\Requests\User\PasswordForgotRequest;
use App\Http\Requests\User\PasswordResetRequest;
use App\Http\Requests\User\RegistrationRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function login (AuthorizationRequest $request)
    {
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];

        if (auth()->attempt($credentials)) {
            return redirect()->route('profile');
        } else {
            return redirect()->back()->withErrors(['failed' => __('auth.failed')])->withInput($request->all());
        }
    }

    public function registration (RegistrationRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('profile');
    }

    public function password_forgot(PasswordForgotRequest $request)
    {
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status == Password::RESET_LINK_SENT
            ? redirect('/#password_success')
            : redirect('/#password_forgot')->withInput($request->only('email'))->with('status', __($status));
    }

    public function reset_password_redirect(Request $request, $token)
    {
        return redirect('/?token=' . $token . '&email=' . $request->get('email') . '#password_reset');
    }

    public function password_reset(PasswordResetRequest $request)
    {
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => bcrypt($request->password),
                    'remember_token' => Str::random(60),
                ])->save();
            }
        );

        return $status == Password::PASSWORD_RESET
            ? redirect('/#password_reset_success')
            : redirect('/?token=' . $request->get('token') . '&email=' . $request->get('email') . '#password_reset')
                ->withInput($request->only('email'))
                ->with('status', __($status));
    }


    public function exit()
    {
        Auth::logout();
        return redirect('/');
    }


}
