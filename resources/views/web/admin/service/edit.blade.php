"@extends('web.admin.layouts.master')

@section('title' ,'edit service')

@section('content')
<div class="container ">
<div class="row justify-content-center">
  <div class="col-md-6 p-5">
  @include('web.admin.layouts.inc.messges')

  
    <div class="card-header p-1 ">
      <h3 class="card-title ">Edit Service Section</h3>
    </div>
      <form action="{{route('service.update', $service->id)}}"  method="POST">
      @csrf
      @method('PUT')
      <div class="card-body shadow-sm">
      <div class="form-group">
      <label for="icon fs-1">icon</label>
      <input type="text" value="{{$service->icon}}" name="icon" id="icon"  class="form-control" >

      <div class="">
      <div class="form-group">
      <label for="title fs-1">title</label>
      <input type="text" value="{{$service->title}}" name="title" id="title"  class="form-control" >
      <div class="">
      <div class="form-group">
      <label for="description fs-1">description</label>
      <input type="text" value="{{$service->description}}" name="description" id="description"  class="form-control" >
      <div class="text-center p-3">
      <button type="submit" class="btn btn-dark">Submit</button>
      </form>
  


@endsection