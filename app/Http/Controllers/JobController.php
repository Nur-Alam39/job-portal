<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Category;
use Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if ($request->category)
        {
            $category_type = $request->category;
            $jobs = Job::where('category', '=', $request->category)->get();
            return view('jobs.index', compact('jobs', 'category_type'));
        }
        else if ($request->location)
        {
            $job_location = $request->location;
            $jobs = Job::where('location', '=', $request->location)->get();
            return view('jobs.index', compact('jobs', 'job_location'));
        }
        else if ($request->company)
        {
            $company = $request->company;
            $jobs = Job::where('employeer_id', '=', $request->company)->get();
            return view('jobs.index', compact('jobs', 'company'));
        }
        else if($request->search)
        {
            $jobs = Job::where("title", 'like', '%' . $request->search . '%')
                    ->orWhere("location", 'like' , '%' . $request->search . '%')
                    ->get();
            return view('jobs.index', compact('jobs'));
        }
        else
        {
            $category_type = 'All Jobs';
            $jobs = Job::orderBy('updated_at','desc')->get();
            return view('jobs.index', compact('jobs', 'category_type'));
        }
       
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
        //return response()->json($request);
        $job->employeer_id = Auth::user('employeer')->id;
        $job->category = $request->category_name;
        $job->job_context = $request->job_context;
        $job->keywords = $request->keywords;
        $job->title = $request->title;
        $job->vacancy = $request->vacancy;
        $job->deadline = $request->deadline;
        $job->employment_type = $request->employment_type;
        $job->location = $request->location;
        $job->gender = $request->gender;
        $job->age = $request->age;
        $job->responsibilities = $request->responsibilities;
        $job->education = $request->education;
        $job->requirements = $request->requirements;
        $job->additional_requirements = $request->additional_requirements;
        $job->salary = $request->salary;
        $job->benifits = $request->benifits;
        $job->apply_instruction = $request->apply_instruction;

        $job->save();
        Category::where('category_name', '=' , $request->category_name)->increment('no_jobs', 1);
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

        if ($job->category_name != $request->category_name)
        {
            Category::where('category_name', '=' , $job->category)->decrement('no_jobs', 1);
            Category::where('category_name', '=' , $request->category_name)->increment('no_jobs', 1);
        }

        $job->employeer_id = Auth::user('employeer')->id;
        $job->category = $request->category_name;
        $job->job_context = $request->job_context;
        $job->keywords = $request->keywords;
        $job->title = $request->title;
        $job->vacancy = $request->vacancy;
        $job->deadline = $request->deadline;
        $job->employment_type = $request->employment_type;
        $job->location = $request->location;
        $job->gender = $request->gender;
        $job->age = $request->age;
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
        Category::where('category_name', '=' , $job->category_name)->increment('no_jobs', -1);
        return redirect('/jobs');
    }
}
