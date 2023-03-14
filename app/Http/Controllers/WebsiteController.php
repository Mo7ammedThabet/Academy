<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    public function home()
    {
        // $course = Course::with('User')->get();
        $course = Course::with(['User', 'Comments.user','Category'])->get();
        // dd($course->toArray());
        return view('website.blog.index',  ['courses' => $course]);
    }



    public function show_course($title)
    {
        $course = Course::with(['User', 'Comments.user'])->where('title',$title)->first();
        return view('website.blog.single', ['course' => $course]);
    }

    public function comment(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'content' => 'required',
            'course_id' => 'required',
        ]);

        Comment::create([
            'content' => $request->content,
            'course_id' => $request->course_id,
            'user_id' => \Auth::user()->id,

        ]);
        return redirect()->back();
    }
}
