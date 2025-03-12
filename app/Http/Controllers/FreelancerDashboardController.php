<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Freelancer;
use Illuminate\Support\Facades\Hash;
use App\Models\Application;

class FreelancerDashboardController extends Controller
{
    public function index()
    {
        if(!auth('freelancer')->check()){
            return redirect()->route('freelancer.login');
        }

        $freelancer = auth('freelancer')->user();

        $jobs = Application::where('freelancer_id', $freelancer->id)->with('workJob.category')->get(); 
        $clients = $jobs->pluck('workJob.client')->unique();

        // dd($clients);
        return view('freelancer-dashboard', compact('freelancer', 'jobs', 'clients'));
    }
}
