<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeerController extends Controller
{
    //
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('employeers.dashboard');
    }
    public function view_profile()
    {
        $id = Auth::user()->id;
        $education = Education::orderBy('passing_year','desc')->where('user_id', '=' , $id)->get();
        return view('employeers.view_profile', compact('education'));
    }
    public function edit_profile()
    {
        return view('users.edit_profile');
    }
}
