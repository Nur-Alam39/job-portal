<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jobs = Job::orderBy('updated_at','desc')->get();
        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $job = new Job();
        $job->employeer_id = 1;
        $job->location_id = 1;
        $job->category_id = 1;
        $job->title = $request->title;
        $job->vacancy = $request->vacancy;
        $job->deadline = $request->deadline;
        $job->employment_type = $request->employment_type;
        $job->location = $request->location;
        $job->gender = "Both";
        $job->age = $request->age;
        $job->category = 1;
        $job->responsibilities = $request->responsibilities;
        $job->education = $request->education;
        $job->requirements = $request->requirements;
        $job->additional_requirements = $request->additional_requirements;
        $job->salary = $request->salary;
        $job->benifits = $request->benifits;
        $job->apply_instruction = $request->apply_instruction;
        $job->save();
        return redirect('/jobs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($job_id)
    {
        //
        $job = Job::Find($job_id);
        return view('jobs/show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($job_id)
    {
        //
        $job = Job::Find($job_id);
        return view('jobs/edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $job_id)
    {
        //
        $job = Job::Find($job_id);
        $job->employeer_id = 1;
        $job->location_id = 1;
        $job->category_id = 1;
        $job->title = $request->title;
        $job->vacancy = $request->vacancy;
        $job->deadline = $request->deadline;
        $job->employment_type = $request->employment_type;
        $job->location = $request->location;
        $job->gender = "Both";
        $job->age = $request->age;
        $job->category = 1;
        $job->responsibilities = $request->responsibilities;
        $job->education = $request->education;
        $job->requirements = $request->requirements;
        $job->additional_requirements = $request->additional_requirements;
        $job->salary = $request->salary;
        $job->benifits = $request->benifits;
        $job->apply_instruction = $request->apply_instruction;
        $job->save();
        return redirect('/jobs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($job_id)
    {
        //
        $job = Job::Find($job_id);
        $job->delete();
        return redirect('/jobs');
    }
}
