<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;
use Auth;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = Auth::user()->id;
        $education = Education::orderBy('passing_year','desc')->where('user_id', '=' , $id)->get();
        return view('users.education.index', compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.education.create');
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
        $education = new Education();
        $education->user_id = Auth::user()->id;
        $education->degree_name = $request->degree_name;
        $education->subject = $request->subject;
        $education->institute = $request->institute;
        $education->location = $request->location;
        $education->passing_year = $request->passing_year;
        $education->result = $request->result;
        $education->save();
        return redirect('/users/education');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit($edu_id)
    {
        //
        $education = Education::Find($edu_id);
        return view('/users/education/edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $edu_id)
    {
        //
        $education = Education::Find($edu_id);
        $education->user_id = Auth::user()->id;
        $education->degree_name = $request->degree_name;
        $education->subject = $request->subject;
        $education->institute = $request->institute;
        $education->location = $request->location;
        $education->passing_year = $request->passing_year;
        $education->result = $request->result;
        $education->save();
        return redirect('/users/education');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        //
        
    }
}
