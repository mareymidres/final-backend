@extends('web.admin.layouts.master')

@section('title' ,'edit team')

@section('content')
<div class="container ">
        <div class="row justify-content-center">
          <div class="col-md-6 p-5">
          @include('web.admin.layouts.inc.messges')
    
            <div class="card shadow-sm rounded">
              <div class="badge bg-dark text-wrap">
                <h3 class="card-title ">Edit Team Section</h3>
</div>
              <form action="{{route('team.update', $team->id)}}" enctype="multipart/form-data"  method="POST">
              @csrf
            @method('PUT')
              <div class="card-body shadow-sm">
              <div class="card-body ">
              <div class="form-group">
                  <label for="image fs-1">image</label>
                  <input type="file" name="img" id="img" value="{{$team->img}}" class="form-control" >
              </div>
              <div class="form-group">
                  <label for="name fs-1">name</label>
                  <input type="text" name="name" id="name" value="{{$team->name}}"  class="form-control" >
              </div>
              <div class="form-group">
                  <label for="position fs-1">position</label>
                  <input type="text" name="position" id="position"  value="{{$team->position}}"  class="form-control" >
              </div>
              <div class="form-group">
                  <label for="twitter fs-1">twitter</label>
                  <input type="text" name="twitter" id="twitter"  value="{{$team->twitter}}" class="form-control" >
              </div>
              <div class="form-group">
                  <label for="facebook fs-1">facebook</label>
                  <input type="text" name="facebook" id="facebook"  value="{{$team->facebook}}"  class="form-control" >
              </div>
              <div class="form-group">
                  <label for="insta fs-1">insta</label>
                  <input type="text" name="insta" id="insta"  value="{{$team->insta}}"  class="form-control" >
              </div>
              <div class="form-group">
                  <label for="linkedin fs-1">linkedin</label>
                  <input type="text" name="linkedin" id="linkedin"  value="{{$team->linkedin}}"  class="form-control" >
              </div>



                <div class="text-center p-3">
                  <button type="submit" class="btn btn-dark">Submit</button>
               </form>
</div>

@endsection