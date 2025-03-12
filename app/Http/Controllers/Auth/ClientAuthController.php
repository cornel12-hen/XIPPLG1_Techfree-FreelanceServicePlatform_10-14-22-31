<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;

class ClientAuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.client-register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients',
            'password' => 'required|string|min:8|confirmed',
            'age' => 'required|integer|min:1',
            'address' => 'required|string|max:255'
        ]);

        $client = Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'age' => $request->age,
            'address' => $request->address,
            'join_date' => now(),
        ]);

        Auth::guard('client')->login($client);

        return redirect()->route('index');
    }

    public function showLoginForm()
    {
        return view('auth.client-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if (Auth::guard('client')->attempt($credentials)) {
            return redirect()->route('client.dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function logout()
    {
        Auth::guard('client')->logout();
        return redirect()->route('client.login');
    }
}
