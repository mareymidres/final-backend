@extends('web.admin.layouts.master')

@section('title' ,'create question')

@section('content')
      <div class="container ">
        <div class="row justify-content-center">
          <div class="col-md-6 p-5">
          @include('web.admin.layouts.inc.messges')
            <div class="card shadow-sm rounded">
              <div class="badge bg-dark text-wrap ">
                <h3 class="card-title  ">Add on section question</h3>
</div>
              <form action="{{route('question.store')}}"  method="POST">
              @csrf
              <div class="card-body shadow-sm">
                  <div class="form-group">
                  <label for="question fs-1">question</label>
                <input type="text" name="question" value="{{old('question')}}" id="question"  class="form-control" >
          
                <div class="">
                  <div class="form-group">
                  <label for="answer fs-1">answer</label>
                <input type="text" value="{{old('answer')}}" name="answer" id="answer"  class="form-control" >
                  
             
                <div class="text-center p-3">
                  <button type="submit" class="btn btn-dark">Submit</button>
               </form>
</div>
@endsection
