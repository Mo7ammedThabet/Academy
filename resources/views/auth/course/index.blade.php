@extends('layouts.auth')
@section('styles')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href=" https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css" rel="stylesheet" type="text/css">
@endsection
@section('content')


        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title"> Courses </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Courses</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All courses</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                {{-- @if( count($course) > 0)    --}}
                                <h4 class="card-title">Courses</h4>

                                    <table id="posts-table" class="table table-striped">
                                        <thead>
                                        <tr>Title
                                            <th> Title </th>
                                            <th> Image </th>
                                            <th> price </th>
                                            <th>time_course</th>
                                            <th> date </th>
                                            <th> Action </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($courses  as $course )
                                              <tr>
                                                  <td class="py-1">
                                                      <img src="{{ $course->gallery->image}}" style="width: 100px; height:90%  " alt="image" />
                                                  </td>
                                                  <td> {{ $course->title }} </td>
                                                  <td>
                                                      {!! Str::limit($course->description, 15) !!}
                                                  </td>
                                                  <td> {{$course->category->name}} </td>
                                                  <td> {{$course->is_publish ==1 ? 'Published' : 'Draft'}} </td>
                                                  <td>
                                                      <a href="" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                                                      <a href="" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                                      <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                                  </td>
                                              </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                {{-- @else --}}
                                   <h3 class="text-center text-danger">No posts found</h3>
                                   {{-- @endif --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('scripte')
             <script  src=" https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" type="text/javascript" charset="utf8"></script>

                <script>
                    $(document).ready(function () {
                        $('#posts-table').DataTable();
                    });
                </script>
@endsection
