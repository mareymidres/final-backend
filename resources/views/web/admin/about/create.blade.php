@extends('web.admin.layouts.master')

@section('title' ,'create About')

@section('content')
      <div class="container ">
        <div class="row justify-content-center">
          <div class="col-md-6 p-5">
          @include('web.admin.layouts.inc.messges')
            <div class="card shadow-sm rounded">
              <div class="badge bg-dark text-wrap">
                <h3 class="card-title  ">Add On Section About</h3>
</div>
              <form action="{{route('about.store')}}" enctype="multipart/form-data" method="POST">
              @csrf
              <div class="card-body shadow-sm">
                  <div class="form-group">
                  <label for="title fs-1">title</label>
                <input type="text" name="title" id="title" value="{{old('title')}}" class="form-control" >
                <div class=" ">
                  <div class="form-group">
                  <label for="img fs-1">image</label>
                 <input type="file" name="img" id="img"  class="form-control" >
                <div class="">
                  <div class="form-group">
                  <label for="description fs-1">description</label>
                  <textarea type="text" name="description" value="{{old('description')}}" id="description"  class="form-control" ></textarea >
                  <div class="form-group">
                  <label for="descriptiontow fs-1">description tow</label>
                  <textarea type="text" name="descriptiontow" value="{{old('descriptiontow')}}" id="descriptiontow"  class="form-control" ></textarea >
                <div class="text-center p-3">
                  <button type="submit" class="btn btn-dark">Submit</button>
               </form>
</div>
@endsection
