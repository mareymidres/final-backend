@extends('web.admin.layouts.master')

@section('title' ,'edit about')

@section('content')
<div class="container ">
        <div class="row justify-content-center">
          <div class="col-md-6 p-5">
          @include('web.admin.layouts.inc.messges')
    
            <div class="card shadow-sm rounded">
              <div class="badge bg-dark text-wrap ">
                <h3 class="card-title ">Adit About Aection</h3>
</div>
              <form action="{{route('about.update', $about->id)}}" enctype="multipart/form-data"  method="POST">
              @csrf
            @method('PUT')
              <div class="card-body shadow-sm">
                  <div class="form-group">
                  <label for="title fs-1">title</label>
                <input type="text" name="title" id="title"  value="{{$about->title}}" class="form-control" >
                </div>
                  <div class="form-group">
                  <label for="image fs-1">image</label>
                <input type="file" name="img" id="img" value="{{$about->img}}" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="description fs-1">description</label>
                  <input type="text" name="description" value="{{$about->description}}" id="description"  class="form-control" >
                    </div>
                    <div class="form-group">
                  <label for="descriptiontow fs-1">descriptiontow</label>
                  <input type="text" name="descriptiontow" value="{{$about->descriptiontow}}" id="descriptiontow"  class="form-control" >

                    </div>
                <div class="text-center p-3">
                  <button type="submit" class="btn btn-dark">Submit</button>
               </form>
</div>

@endsection