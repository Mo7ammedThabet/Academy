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

        // $destroy_url = route('courses.destroy');
        // $html_new_path = route('courses.create');

        return view('admin.courses.index', compact('html_breadcrumbs'));
    }

    public function datatable()
    {
        $model = Course::with(['User', 'Category']);
        return DataTables::eloquent($model)
            ->toJson();
    }
    public function destroy($id)
    {
        $object = Course::findOrFail($id);
        $object->delete();
        return ['success' => 'Delete Successfully'];
    }

    public function publish($id)
    {
        $object = Course::findOrFail($id);
        $object->is_publish = 1;
        $object->save();
        return ['success' => 'Publish Successfully'];
    }

    public function delete(Request $request){
        $request->validate([
            'ids' => 'required|array',  
        ]);
        Course::destroy($request->ids);
       return [];
    }
}
