@extends('web.admin.layouts.master')

@section('title' ,'edit testimonial')

@section('content')
<div class="container ">
        <div class="row justify-content-center">
          <div class="col-md-6 p-5">
          @include('web.admin.layouts.inc.messges')
    
            <div class="card shadow-sm rounded">
              <div class="badge bg-dark text-wrap ">
                <h3 class="card-title ">Edit Team Section</h3>
</div>
              <form action="{{route('testimonial.update', $testimonial->id)}}" enctype="multipart/form-data"  method="POST">
              @csrf
            @method('PUT')
              <div class="card-body shadow-sm">
              <div class="card-body ">
              <div class="form-group">
                  <label for="image fs-1">image</label>
                  <input type="file" name="img" id="img" value="{{$testimonial->img}}" class="form-control" >
              </div>
              <div class="form-group">
                  <label for="name fs-1">name</label>
                  <input type="text" name="name" id="name" value="{{$testimonial->name}}"  class="form-control" >
              </div>
              <div class="form-group">
                  <label for="position fs-1">position</label>
                  <input type="text" name="position" id="position"  value="{{$testimonial->position}}"  class="form-control" >
              </div>
              <div class="form-group">
                  <label for="description fs-1">description</label>
                  <input type="text" name="description" id="description"  value="{{$testimonial->description}}" class="form-control" >
              </div>
                <div class="text-center p-3">
                  <button type="submit" class="btn btn-dark">Submit</button>
               </form>
</div>

@endsection