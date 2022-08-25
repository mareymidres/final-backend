@extends('web.admin.layouts.master')

@section('title' ,'edit blog section')

@section('content')
<div class="container ">
        <div class="row justify-content-center">
          <div class="col-md-6 p-5">
          @include('web.admin.layouts.inc.messges')
    
            <div class="card shadow-sm rounded">
              <div class="badge bg-dark text-wrap">
                <h3 class="card-title ">Edit blog section</h3>
</div>
              <form action="{{route('blogsection.update', $blogsection->id)}}" enctype="multipart/form-data"  method="POST">
              @csrf
            @method('PUT')
   
            <div class="card-body ">
              <div class="form-group">
                  <label for="image fs-1">image</label>
                  <input type="file" value="{{$blogsection->img}}"  name="img" id="img"  class="form-control" >
              </div>

              <div class="form-group">
                  <label for="image fs-1">image</label>
                  <input type="file" value="{{$blogsection->image}}"  name="image" id="image"  class="form-control" >
              </div>
             
              <div class="form-group">
                  <label for="title fs-1">title</label>
                  <input type="text" value="{{$blogsection->title}}" name="title" id="title"  class="form-control" >
              </div>

              <div class="form-group">
                  <label for="secondtitle fs-1">secondtitle</label>
                  <input type="text" value="{{$blogsection->secondtitle}}" name="secondtitle" id="secondtitle"  class="form-control" >
              </div>
        
              <div class="form-group">
                  <label for="thirdtitle fs-1">thirdtitle</label>
                <input type="text" name="thirdtitle" value="{{$blogsection->thirdtitle}}" id="thirdtitle"  class="form-control" >
                <div class="">
                
                  
                <div class="form-group">
                  <label for="description fs-1">description</label>
                <input type="text" value="{{$blogsection->description}}" name="description" id="description"  class="form-control" >
                  

                  <div class="form-group">
                  <label for="firstdescription fs-1">firstdescription</label>
                <input type="text" value="{{$blogsection->firstdescription}}" name="firstdescription" id="firstdescription"  class="form-control" >

                <div class="">
                  <div class="form-group">
                  <label for="seconddescription fs-1">seconddescription</label>
                <input type="text" value="{{$blogsection->seconddescription}}" name="seconddescription" id="seconddescription"  class="form-control" >
                  
                <div class="">
                  <div class="form-group">
                  <label for="thirddescription fs-1">thirddescription</label>
                <input type="text" value="{{$blogsection->thirddescription}}" name="thirddescription" id="thirddescription"  class="form-control" >
                  
       
                <div class="">
                  <div class="form-group">
                  <label for="fourthdescription fs-1">fourthdescription</label>
                <input type="text" value="{{$blogsection->fourthdescription}}" name="fourthdescription" id="fourthdescription"  class="form-control" >
                  
                     
                <div class="">
                  <div class="form-group">
                  <label for="fifthtdescription fs-1">fifthtdescription</label>
                <input type="text" value="{{$blogsection->fifthtdescription}}" name="fifthtdescription" id="fifthtdescription"  class="form-control" >
               <div class="form-group mt-3">



                <div class="text-center p-3">
                  <button type="submit" class="btn btn-dark">Submit</button>
               </form>
</div>

@endsection