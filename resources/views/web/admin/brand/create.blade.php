@extends('web.admin.layouts.master')

@section('title' ,'create brand')

@section('content')
      <div class="container ">
        <div class="row justify-content-center">
          <div class="col-md-6 p-5">
          @include('web.admin.layouts.inc.messges')
            <div class="card shadow-sm rounded">
              <div class="badge bg-dark text-wrap">
                <h3 class="card-title  ">Add on Section Brand</h3>
</div>
              <form action="{{route('brand.store')}}" enctype="multipart/form-data" method="POST">
              @csrf
              <div class="card-body shadow-sm">
                  <div class="form-group">
                  <label for="img fs-1">image</label>
                 <input type="file" name="img" id="img"  class="form-control" >
          </div>
             
                <div class="text-center p-3">
                  <button type="submit" class="btn btn-dark">Submit</button>
               </form>
</div>
@endsection
