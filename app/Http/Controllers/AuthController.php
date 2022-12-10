<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function registerPage() {
        if (!Auth::check()) {
            return view('auth.registration');
        }
        return back();
    }

    public function registration(Request $request) {
        $form = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => ['required', Password::min(8)->letters()->mixedCase()->numbers()->symbols()]
        ]);
        $user = User::create($form);
        if ($user) {
            Auth::login($user);
            return redirect(route('home'));
        }
        return redirect(route('register'))->withErrors([
            'formError' => 'Произошла ошибка'
        ]);
    }

    public function loginPage() {
        if (!Auth::check()) {
            return view('auth.login');
        }
        return back();
    }
    public function login(Request $request) {
        $form = $request->only(['email', 'password']);
        if (Auth::attempt($form, $request->remember)) {
            return redirect(route('home'));
        }
        return redirect(route('login'))->withErrors([
            'formError' => 'Произошла ошибка'
        ]);
    }


    public function logout() {
        Auth::logout();
        return redirect(route('home'));
    }
}
