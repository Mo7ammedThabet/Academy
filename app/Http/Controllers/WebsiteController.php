<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    public function home()
    {
        $course = Course::all();
        return view('website.blog.index' ,  ['courses' => $course]);
    }



    public function show(Course $course)
    {
        // $course=Course::with(['user','comments'])->find($id);

        // dd($course->toArray());
        return view('website.blog.single', ['course' => $course,]);
    }

    //    public function show(Course $course,$id)
    // {
    //     $course=Course::with(['user','comments'])->find($id);
    //     dd($course->toArray());
    //     return view('website.blog.single', ['course'=>$course]);
    // }
}
