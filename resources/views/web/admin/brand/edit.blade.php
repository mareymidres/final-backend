"@extends('web.admin.layouts.master')

@section('title' ,'edit  brand')

@section('content')
<div class="container ">
        <div class="row justify-content-center">
          <div class="col-md-6 p-5">
          @include('web.admin.layouts.inc.messges')
    
            <div class="card shadow-sm rounded">
              <div class="badge bg-dark text-wrap">
                <h3 class="card-title ">Edit Brand Section</h3>
</div>
              <form action="{{route('brand.update', $brand->id)}}" enctype="multipart/form-data"  method="POST">
              @csrf
            @method('PUT')
              <div class="card-body ">
              <div class="form-group">
                  <label for="image fs-1">image</label>
                <input type="file" name="img" id="img" value="{{$brand->img}}" class="form-control" >
                </div>
                <div class="text-center p-3">
                  <button type="submit" class="btn btn-dark">Submit</button>
               </form>
</div>

@endsection