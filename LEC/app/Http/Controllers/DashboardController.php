<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//https://www.youtube.com/watch?v=VHhmfjhu_1g
class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('betmaker')){
            return view('betmakerdashboard');
        }elseif(Auth::user()->hasRole('user')){
            return view('userdashboard');
        }
    }
}
