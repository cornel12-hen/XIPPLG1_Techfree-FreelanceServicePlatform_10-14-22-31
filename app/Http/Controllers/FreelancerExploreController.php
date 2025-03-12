<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\WorkJob;
use App\Models\Application;

class FreelancerExploreController extends Controller
{
    public function index(Request $request)
    {
        if(!auth('freelancer')->check()){
            return redirect()->route('freelancer.login');
        }

        $freelancer = auth('freelancer')->user();
        
        $key = $request->get('name', '0');
        $dataJob = WorkJob::whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($key) . '%'])->get();
        if ($dataJob->isEmpty()) {
            $dataJob = WorkJob::all();
        }     
        $dataJob->toArray();

        // dd($clients);
        return view('freelancer-explore', compact('freelancer', 'dataJob'));
    }

    public function myJobs()
    {
        if(!auth('freelancer')->check()){
            return redirect()->route('freelancer.login');
        }

        $freelancer = auth('freelancer')->user();

        $jobs = Application::where('freelancer_id', $freelancer->id)
            ->with('workJob.client')
            ->get();

        // dd($jobs);
        return view('freelancer-my-jobs', compact('jobs'));
    }
}
