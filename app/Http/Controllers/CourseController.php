<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Termwind\Components\Dd;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $course = Course::all();
        // $course = Course::with('user')->get();
        $course = Course::where('user_id',Auth::user()->id)->get();

        // dd($course->toArray());
        return view('auth.course.index', ['courses'=>$course]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = Course::all();
        $category = Category::all();
        // dd($categories->toArray());
        return view('auth.course.create', ['courses'=>$course, 'categories'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'time_course' => 'required',
            'description' => 'required',
            'price' => 'required',
            'date' => 'required',
            'category_id' => 'required',
        ]);
        $image_path = $request->file('image')->store('image', 'public');
        $user_id = Auth::user()->id;
        // dd($image_path);
        // $data['image'] = $this->uploadImgae($request);
        $data=Course::create([
            'title' => $request->title,
            'image' => $image_path,
            'time_course' => $request->time_course,
            'description' => $request->description,
            'price' => $request->price,
            'date' => $request->date,
            'user_id' => Auth::user()->id,
            'category_id' => $request->category_id,

        ]);
        // dd($data->toArray());

        return redirect()->route('courses.index')->with('success', 'Course created successfully.');

    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    // public function show(Course $course,$id)
    // {
    //     $course=Course::with(['user','comments'])->find($id);
    //     dd($course->toArray());
    //     return view('website.blog.single', ['course'=>$course]);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('auth.course.edit', ['course'=>$course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course,$id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'time_course' => 'required',
            'description' => 'required',
            'price' => 'required',
            'date' => 'required',
        ]);
        $course=Course::findOrFail($id);
        $course->update($request->all());
        return redirect()->route('course.index')->with('success', 'Course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }
}
