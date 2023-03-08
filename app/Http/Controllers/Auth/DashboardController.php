<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){

        $userCount = User::count();
        $courseCount = Course::count();
        return view('auth.dashboard' , compact('userCount','courseCount'));
    }
}
