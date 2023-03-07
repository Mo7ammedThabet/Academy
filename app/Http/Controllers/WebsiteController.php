<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //



    public function show(Course $course)
    {
        return view('website.blog.single', ['course' => $course]);
    }
}
