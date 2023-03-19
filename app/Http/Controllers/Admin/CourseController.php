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

        $destroy_url = route('courses.destroy', 0);
        // $html_new_path = route('courses.create');

        return view('admin.courses.index',compact('html_breadcrumbs','destroy_url'));
    }

    public function datatable(){
        $model = Course::with(['User','Category']);
        return DataTables::eloquent($model)
        ->toJson();
    }
    public function destroy($id)
    {
        $object =Course::findOrFail($id);
        $object->delete();
        return redirect()->route('courses.index')->with('success',__('Delete Successfully'));

    }
}
