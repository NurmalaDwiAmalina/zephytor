<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function loginPage()
    {
        if (Auth::check()) {
            return redirect(Auth::user()->isAdmin() ? '/admin' : '/dashboard');
        }
        return view('auth.login');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Login Google gagal. Silakan coba lagi.');
        }

        $adminEmails = array_map('trim', explode(',', env('ADMIN_EMAIL', '')));
        $isAdmin = in_array($googleUser->getEmail(), array_filter($adminEmails));

        $user = User::updateOrCreate(
            ['google_id' => $googleUser->getId()],
            [
                'name'   => $googleUser->getName(),
                'email'  => $googleUser->getEmail(),
                'avatar' => $googleUser->getAvatar(),
                'role'   => $isAdmin ? 'admin' : 'user',
            ]
        );

        Auth::login($user);

        return redirect($user->isAdmin() ? '/admin' : '/dashboard');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
