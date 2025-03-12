<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Freelancer;
use Illuminate\Support\Facades\Hash;
use App\Models\Application;
use App\Models\WorkJob;

class ClientController extends Controller
{
    public function dashboard()
    {
        if(!auth('client')->check()){
            return redirect()->route('client.login');
        }

        $client = auth('client')->user();

        $jobs = WorkJob::where('client_id', $client->id)->with('category')->get(); 

        $applications = Application::whereIn('job_id', $jobs->pluck('id'))->get();

        $freelancers = Freelancer::whereIn('id', $applications->pluck('freelancer_id')->unique())->get();
    
       
        // dd($freelancers);
        return view('client-dashboard', compact('client', 'jobs', 'freelancers'));
    }

    public function myJobs()
    {
        if(!auth('client')->check()){
            return redirect()->route('client.login');
        }

        $client = auth('client')->user();

        $jobs = WorkJob::where('client_id', $client->id)->with('category')->get();

        // dd($jobs);
        return view('client-my-jobs', compact('jobs'));
    }

    public function postJobs()
    {
        if(!auth('client')->check()){
            return redirect()->route('client.login');
        }
        
        $client = auth('client')->user();

        $jobs = WorkJob::where('client_id', $client->id)->with('category')->get();

        $applications = Application::whereIn('job_id', $jobs->flatMap(fn($job) => [$job->id]))->get();

        // dd($jobs);
        return view('client-post-job', compact('client', 'jobs', 'applications'));
    }

    public function addJob()
    {

    }
}
