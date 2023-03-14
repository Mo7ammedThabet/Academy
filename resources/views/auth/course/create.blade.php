@extends('layouts.auth')

@section('title' , 'Create Post')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Courses </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('courses.index')}}">Course</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create course</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Create Courses</h4>


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="Post"  action ="{{ route('courses.store')}}" class="forms-sample" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ old('title') }}" required>
                      </div>
                      <div class="form-group">
                        <label>Category</label>
                        <select name="category_id" class="form-control" required>
                                @foreach ($categories as $category)
                                    <option @selected( old('category') == $category-> id) value="{{$category->id}}">{{ $category->name }}</option>
                                @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Price</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-gradient-primary text-white">$</span>
                          </div>
                          <input  type="number" name="price" id="price" class="form-control" aria-label="Amount (to the nearest dollar)">
                          <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Published</label>
                        <select name="is_publish" class="form-control">
                            <option disabled selected>Choose Option</option>
                            <option @selected( old('is_publish') == 1 ) value="1">Publish</option>
                            <option @selected( old('is_publish') == 0 )  value="0">Draft</option>
                        </select>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-3 col-form-label">Date of Course</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="date" type="date" placeholder="dd/mm/yyyy" />
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 col-form-label">Time of Course</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" id="time_course" name="time_course"pattern="\d{2}:\d{2}" title="Three letter country code" placeholder="H:M">
                          {{-- <input class="form-control" type="text" name="time_course" id="time_course"   placeholder="H:M" /> --}}
                        </div>
                    </div>

                      <div class="form-group">
                        <label>Image upload</label>
                        <input type="file" name="image"  id="image" class="form-control"  required>
                      </div>

                      <div class="form-group">
                        <label>Description</label>
                        <textarea id="description" name="description" class="form-control" cols="30" rows="10" required >{{old('description')}}</textarea>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
    $(document).ready(function(){
        $('#summernote').summernote();
    });
</script>
@endsection
