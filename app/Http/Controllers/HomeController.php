<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    /**
     * Show the application user.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
//        if(Gate::allows('isAdmin')){
//            return view('home');
//        }
    }
//    public function private()
//    {
//        if (Gate::allows('admin', auth()->user())) {
//            return view('private');
//        }
//        return 'You are not admin!!!!';
//    }
}
