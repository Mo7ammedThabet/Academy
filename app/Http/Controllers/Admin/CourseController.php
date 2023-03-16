<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Yajra\DataTables\Facades\DataTables;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $html_breadcrumbs = [
            'title' => 'الدورات التدريبية',
            'title_url' => route('admin.courses.index'),
            'subtitle' => 'فهرس',
            'datatable' => true,
        ];
        // $html_new_path = route('courses.create');
    
        return view('admin.courses.index',compact('html_breadcrumbs'));
    }

    public function datatable(){
        $model = Course::with(['User','Category']);
        return DataTables::eloquent($model)
        ->toJson();
    }
}
