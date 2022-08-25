"@extends('web.admin.layouts.master')

@section('title' ,'edit question')

@section('content')
<div class="container ">
        <div class="row justify-content-center">
          <div class="col-md-6 p-5">
          @include('web.admin.layouts.inc.messges')
    
            <div class="card shadow-sm  rounded">
              <div class="badge bg-dark text-wrap ">
                <h3 class="card-title ">Edit Question Section</h3>
</div>
              <form action="{{route('portfoliosection.update', $portfoliosection->id )}}"  method="POST">
              @csrf
            @method('PUT')
            <div class="card-body shadow-sm">
                  <div class="form-group">
                  <label for="title fs-1">title</label>
                <input type="text" name="title" value="{{$portfoliosection->title}}" id="title"  class="form-control" >
                <div class="">
                  
                  <div class="form-group">
                  <label for="firstdescription fs-1">firstdescription</label>
                <input type="text" value="{{$portfoliosection->firstdescription}}" name="firstdescription" id="firstdescription"  class="form-control" >
                  
                <div class="">
                  <div class="form-group">
                  <label for="seconddescription fs-1">seconddescription</label>
                <input type="text" value="{{$portfoliosection->seconddescription}}" name="seconddescription" id="seconddescription"  class="form-control" >
                  
                <div class="">
                  <div class="form-group">
                  <label for="thirddescription fs-1">thirddescription</label>
                <input type="text" value="{{$portfoliosection->thirddescription}}" name="thirddescription" id="thirddescription"  class="form-control" >
                  
                <div class="">
                  <div class="form-group">
                  <label for="fourthdescription fs-1">fourthdescription</label>
                <input type="text" value="{{$portfoliosection->fourthdescription}}" name="fourthdescription" id="fourthdescription"  class="form-control" >
                  
             
             
                <div class="text-center p-3">
                  <button type="submit" class="btn btn-dark">Submit</button>
               </form>
               


@endsection