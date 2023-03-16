@extends('layouts.auth')
@section('styles')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdn.datatables.net/v/dt/dt-1.13.3/datatables.min.css" rel="stylesheet"/>
@endsection
@section('content')


        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title"> Courses  Admin</h3>
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
                                @if( count($courses) > 0)
                                <h4 class="card-title">Courses</h4>

                                    <table id="myTable" class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th> Title </th>
                                            <th> Image </th>
                                            <th> Category </th>
                                            <th> course owner </th>
                                            <th> Status </th>
                                            <th> Action </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                          @foreach($courses  as $course )
                                              <tr>

                                                <td> {{ $course->title}} </td>

                                                <td class="py-1">
                                                    <img src="storage/{{$course->image}}" style="width: 100px; height:90%" alt="image" />
                                                </td>
                                                  <td> {{$course->category->name}}</td>
                                                  <td> {{ $course->user->name}}</td>
                                                  <td> {{$course->is_publish ==1 ? 'Published' : 'Draft'}} </td>

                                                <td>
                                                    <a href="{{route('courses.edit',$course->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                                </td>


                                                  <td>
                                                      {{-- <a href="" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a> --}}
                                                      {{-- <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a> --}}
                                                      <form action="{{route('courses.destroy',$course->id)}}" method="post">
                                                        @csrf
                                                        {{-- Form Method spoofing --}}
                                                        <input type="hidden" name="_method" value="delete">
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                        </form>
                                                  </td>
                                              </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                @else
                                   <h3 class="text-center text-danger">No course found</h3>
                                   @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('scripts')

<script src="https://cdn.datatables.net/v/dt/dt-1.13.3/datatables.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous">
    </script>

    <script>
     $(document).ready(function () {
     $('#myTable').DataTable();
        });
    </script>
@endsection
