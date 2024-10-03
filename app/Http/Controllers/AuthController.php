<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Відображення форми реєстрації
    public function showRegisterForm()
    {
        return view('register');
    }

    // Логіка реєстрації користувача
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }

    // Відображення форми авторизації
    public function showLoginForm()
    {
        return view('login');
    }

    // Логіка авторизації
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('home');
        }

        throw ValidationException::withMessages([
            'email' => 'Невірний email або пароль',
        ]);
    }

    // Логіка виходу
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

