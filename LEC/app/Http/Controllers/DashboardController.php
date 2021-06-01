<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
