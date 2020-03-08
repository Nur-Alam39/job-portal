<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Education;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('users.user_dashboard');
    }
    public function view_profile()
    {
        $id = Auth::user()->id;
        $education = Education::orderBy('passing_year','desc')->where('user_id', '=' , $id)->get();
        return view('users.view_profile', compact('education'));
    }
    public function edit_profile()
    {
        return view('users.edit_profile');
    }
    public function public_profile($user_id)
    {
        $user = User::Find($user_id);
        $education = Education::orderBy('passing_year','desc')->where('user_id', '=' , $user_id)->get();
        return view('users.public_profile', compact('user', 'education'));
    }
}
