<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Comment;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    public function home()
    {
        $course = Course::with('User')->get();
        return view('website.blog.index',  ['courses' => $course]);
    }



    public function show_course($id)
    {
        $course = Course::with(['User', 'Comments.user'])->find($id);
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
