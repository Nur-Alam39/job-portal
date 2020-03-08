<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Application;
use App\Employeer;
use App\User;
use Auth;

class ApplicationController extends Controller
{
    //
     public function create($job_id)
    {
        //
        $application = new Application();
        $employeer = Job::Find($job_id);
        $application->job_id = $job_id;
        $application->employeer_id = $employeer->employeer_id;
        $application->user_id = Auth::user()->id;
        $application->save();

        $job = Job::Find($job_id);
        return view('jobs/show', compact('job'));

        //return redirect('/jobs/show/{employeer->job_id}');
    }
    public  function show_applicants($job_id)
    {
    	$applicants = Application::where('job_id', '=', $job_id)->get();
    	return view('employeers.applicants', compact('applicants'));
    }
}
