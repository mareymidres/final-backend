@extends('web.admin.layouts.master')

@section('title' ,'edit blog')

@section('content')
<div class="container ">
        <div class="row justify-content-center">
          <div class="col-md-6 p-5">
          @include('web.admin.layouts.inc.messges')
    
            <div class="card shadow-sm rounded">
              <div class="badge bg-dark text-wrap ">
                <h3 class="card-title ">edit blog section</h3>
</div>
              <form action="{{route('blog.update', $blog->id)}}" enctype="multipart/form-data"  method="POST">
              @csrf
            @method('PUT')
            <div class="card-body ">
              <div class="form-group">
                  <label for="image fs-1">image</label>
                  <input type="file" value="{{old('img')}}"  name="img" id="img"  class="form-control" >
              </div>
              <div class="form-group">
                  <label for="title fs-1">title</label>
                  <input type="text" value="{{$blog->title}}" name="title" id="title"  class="form-control" >
              </div>
              <div class="form-group">
                  <label for="name fs-1">name</label>
                  <input type="text" value="{{$blog->name}}" name="name" id="name"  class="form-control" >
              </div>
              <div class="form-group mt-3">
                    <label for="name">Category</label>
                    <select class="form-select" name="categor_id">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}" @if($blog->category->id == $category->id  ) selected @endif> {{$category->name}}</option>
                        @endforeach
                      </select>

                </div>
              <div class="form-group">
                  <label for="image fs-1">sec image</label>
                  <input type="file" name="image"  value="{{old('image')}}" id="image"  class="form-control" >
              </div>



                <div class="text-center p-3">
                  <button type="submit" class="btn btn-dark">Submit</button>
               </form>
</div>

@endsection