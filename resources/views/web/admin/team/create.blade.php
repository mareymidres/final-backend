@extends('web.admin.layouts.master')

@section('title' ,'create team')

@section('content')
      <div class="container ">
        <div class="row justify-content-center">
          <div class="col-md-6 p-5">
          @include('web.admin.layouts.inc.messges')
            <div class="card rounded shadow-sm">
              <div class="badge bg-dark text-wrap ">
                <h3 class="card-title ">Add on section team</h3>
              </div>
              <form action="{{route('team.store')}}" enctype="multipart/form-data" method="POST">
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
                  <label for="twitter fs-1">twitter</label>
                  <input type="text" value="{{old('twitter')}}" name="twitter" id="twitter"  class="form-control" >
              </div>
              <div class="form-group">
                  <label for="facebook fs-1">facebook</label>
                  <input type="text" value="{{old('facebook')}}" name="facebook" id="facebook"  class="form-control" >
              </div>
              <div class="form-group">
                  <label for="insta fs-1">insta</label>
                  <input type="text" value="{{old('insta')}}" name="insta" id="insta"  class="form-control" >
              </div>
              <div class="form-group">
                  <label for="linkedin fs-1">linkedin</label>
                  <input type="text" value="{{old('linkedin')}}" name="linkedin" id="linkedin"  class="form-control" >
              </div>
                  <div class="text-center p-3">
                  <button type="submit" class="btn btn-dark">Submit</button>
               </form>
</div>
@endsection
