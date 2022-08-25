@extends('web.admin.layouts.master')

@section('title' ,'create testimonial')

@section('content')
      <div class="container ">
        <div class="row justify-content-center">
          <div class="col-md-6 p-5">
          @include('web.admin.layouts.inc.messges')
            <div class="card rounded shadow-sm">
              <div class="badge bg-dark text-wrap">
                <h3 class="card-title ">Add On Section Testimonial</h3>
              </div>
              <form action="{{route('testimonial.store')}}" enctype="multipart/form-data" method="POST">
              @csrf
              <div class="card-body ">
              <div class="form-group">
                  <label for="image fs-1">image</label>
                  <input type="file" value="{{old('img')}}" name="img" id="img"  class="form-control" >
              </div>
              <div class="form-group">
                  <label for="name fs-1">name</label>
                  <input type="text" value="{{old('name')}}" name="name" id="name"  class="form-control" >
              </div>
              <div class="form-group">
                  <label for="position fs-1">position</label>
                  <input type="text" value="{{old('position')}}" name="position" id="position"  class="form-control" >
              </div>
              <div class="form-group">
                  <label for="description fs-1">description</label>
                  <input type="text" value="{{old('description')}}" name="description" id="description"  class="form-control" >
              </div>
             
                  <div class="text-center p-3">
                  <button type="submit" class="btn btn-dark">Submit</button>
               </form>
</div>
@endsection
