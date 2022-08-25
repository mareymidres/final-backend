@extends('web.admin.layouts.master')

@section('title' ,'create service')

@section('content')
      <div class="container ">
        <div class="row justify-content-center">
          <div class="col-md-6 p-5">
          @include('web.admin.layouts.inc.messges')
            <div class="card shadow-sm rounded">
              <div class="badge bg-dark text-wrap ">
                <h3 class="card-title  ">Add On Section Service</h3>
</div>
              <form action="{{route('service.store')}}"  method="POST">
              @csrf
              <div class="card-body shadow-sm">
                  <div class="form-group">
                  <label for="icon fs-1">icon</label>
                <input type="text" value="{{old('icon')}}" name="icon" id="icon"  class="form-control" >
          
                <div class="">
                  <div class="form-group">
                  <label for="title fs-1">title</label>
                <input type="text" name="title" value="{{old('title')}}" id="title"  class="form-control" >
                  
             
                <div class="">
                  <div class="form-group">
                  <label for="description fs-1">description</label>
                <textarea type="text" value="{{old('description')}}" name="description" id="description"  class="form-control" ></textarea >
                  

                <div class="text-center p-3">
                  <button type="submit" class="btn btn-dark">Submit</button>
               </form>
</div>
@endsection
