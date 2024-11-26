<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobCategory;

class JobCategoryController extends Controller
{
    public function index(Request $request)
    {
        $key = $request->get('name', '0');
        $data = JobCategory::whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($key) . '%'])->get();
        if ($data->isEmpty()) {
            $data = JobCategory::all();
        }     
        $data->toArray();
        return view('services')->with('datajob', $data);
    }
}
