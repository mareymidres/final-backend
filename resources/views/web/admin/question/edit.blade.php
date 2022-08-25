"@extends('web.admin.layouts.master')

@section('title' ,'edit question')

@section('content')
<div class="container ">
        <div class="row justify-content-center">
          <div class="col-md-6 p-5">
          @include('web.admin.layouts.inc.messges')
    
            <div class="card shadow-sm  rounded">
              <div class="card-header p-1 ">
                <h3 class="card-title ">edit question section</h3>
</div>
              <form action="{{route('question.update', $question->id)}}" enctype="multipart/form-data"  method="POST">
              @csrf
            @method('PUT')
            <div class="card-body ">
                  <div class="form-group">
                  <label for="question fs-1">question</label>
                <input type="text" value="{{$question->question}}" name="question" id="question"  class="form-control" >
          
                <div class="">
                  <div class="form-group">
                  <label for="answer fs-1">answer</label>
                <input type="text" name="answer" id="answer" value="{{$question->answer}}" class="form-control" >
                  
             
                <div class="text-center p-3">
                  <button type="submit" class="btn btn-primary">Submit</button>
               </form>
               


@endsection