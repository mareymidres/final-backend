@extends('web.admin.layouts.master')

@section('title' ,'create portfolio')

@section('content')
      <div class="container ">
        <div class="row justify-content-center">
          <div class="col-md-6 p-5">
          @include('web.admin.layouts.inc.messges')
            <div class="card rounded shadow-sm">
              <div class="badge bg-dark text-wrap ">
                <h3 class="card-title ">Add On Section Blog</h3>
              </div>
              <form action="{{route('portfolio.store')}}" enctype="multipart/form-data" method="POST">
              @csrf
              <div class="card-body ">
              <div class="form-group">
                  <label for="image fs-1">image</label>
                  <input type="file" value="{{old('img')}}"  name="img" id="img"  class="form-control" >
              </div>
              <div class="form-group">
                  <label for="title fs-1">title</label>
                  <input type="text" value="{{old('title')}}" name="title" id="title"  class="form-control" >
              </div>
              <div class="form-group">
                  <label for="name fs-1">name</label>
                  <input type="text" value="{{old('name')}}" name="name" id="name"  class="form-control" >
              </div>

               <div class="form-group mt-3">
                    <label for="name">Category</label>
                    <select class="form-select" name="categor_id">
                        @foreach ($portfoliocats as $portfoliocat)
                            <option value="{{$portfoliocat->id}}">{{$portfoliocat->name}}</option>
                        @endforeach
                      </select> 
              
                  <div class="text-center p-3">
                  <button type="submit" class="btn btn-dark">Submit</button>
               </form>
</div>
@endsection
