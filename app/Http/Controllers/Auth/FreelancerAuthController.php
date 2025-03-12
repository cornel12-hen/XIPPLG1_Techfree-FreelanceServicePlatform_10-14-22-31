<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Freelancer;
use Illuminate\Support\Facades\Hash;

class FreelancerAuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.freelancer-register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:freelancers',
            'password' => 'required|string|min:8|confirmed',
            'age' => 'required|integer|min:1',
            'address' => 'required|string|max:255'
        ]);

        $freelancer = Freelancer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'age' => $request->age,
            'address' => $request->address,
            'join_date' => now(),
        ]);

        Auth::guard('freelancer')->login($freelancer);

        return redirect()->route('freelancer.dashboard');
    }

    public function showLoginForm()
    {
        return view('auth.freelancer-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);
        
        if (Auth::guard('freelancer')->attempt($credentials)) {
            return redirect()->route('freelancer.dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function logout()
    {
        Auth::guard('freelancer')->logout();
        return redirect()->route('freelancer.login');
    }

    public function dashboard()
    {
        if(!auth('freelancer')->check()){
            return redirect()->route('freelancer.login');
        }
        
        return view('freelancer-dashboard');
    }
}
