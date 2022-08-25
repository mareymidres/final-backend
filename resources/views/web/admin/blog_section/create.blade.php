@extends('web.admin.layouts.master')

@section('title' ,'create blog section')

@section('content')
      <div class="container ">
        <div class="row justify-content-center">
          <div class="col-md-6 p-5">
          @include('web.admin.layouts.inc.messges')
            <div class="card rounded shadow-sm">
              <div class="badge bg-dark text-wrap ">
                <h3 class="card-title ">Add On  Blog Section </h3>
              </div>
              <form action="{{route('blogsection.store')}}" enctype="multipart/form-data" method="POST">
              @csrf
              <div class="card-body ">
              <div class="form-group">
                  <label for="image fs-1">image</label>
                  <input type="file" value="{{old('img')}}"  name="img" id="img"  class="form-control" >
              </div>

              <div class="form-group">
                  <label for="image fs-1">image</label>
                  <input type="file" value="{{old('image')}}"  name="image" id="image"  class="form-control" >
              </div>
             
              <div class="form-group">
                  <label for="title fs-1">title</label>
                  <input type="text" value="{{old('title')}}" name="title" id="title"  class="form-control" >
              </div>

              <div class="form-group">
                  <label for="secondtitle fs-1">secondtitle</label>
                  <input type="text" value="{{old('secondtitle')}}" name="secondtitle" id="secondtitle"  class="form-control" >
              </div>
        
              <div class="form-group">
                  <label for="thirdtitle fs-1">thirdtitle</label>
                <input type="text" name="thirdtitle" value="{{old('thirdtitle')}}" id="thirdtitle"  class="form-control" >
                <div class="">
                
                  
                <div class="form-group">
                  <label for="description fs-1">description</label>
                <textarea type="text" value="{{old('description')}}" name="description" id="description"  class="form-control" ></textarea>
                  

                  <div class="form-group">
                  <label for="firstdescription fs-1">firstdescription</label>
                <textarea type="text" value="{{old('firstdescription')}}" name="firstdescription" id="firstdescription"  class="form-control" ></textarea>

                <div class="">
                  <div class="form-group">
                  <label for="seconddescription fs-1">seconddescription</label>
                <textarea type="text" value="{{old('seconddescription')}}" name="seconddescription" id="seconddescription"  class="form-control" ></textarea>
                  
                <div class="">
                  <div class="form-group">
                  <label for="thirddescription fs-1">thirddescription</label>
                <textarea type="text" value="{{old('thirddescription')}}" name="thirddescription" id="thirddescription"  class="form-control" ></textarea>
                  
       
                <div class="">
                  <div class="form-group">
                  <label for="fourthdescription fs-1">fourthdescription</label>
                <textarea type="text" value="{{old('fourthdescription')}}" name="fourthdescription" id="fourthdescription"  class="form-control" ></textarea>
                  
                     
                <div class="">
                  <div class="form-group">
                  <label for="fifthtdescription fs-1">fifthtdescription</label>
                <textarea type="text" value="{{old('fifthtdescription')}}" name="fifthtdescription" id="fifthtdescription"  class="form-control" ></textarea>
               <div class="form-group mt-3">

              
                  <div class="text-center p-3">
                  <button type="submit" class="btn btn-dark">Submit</button>
               </form>
</div>
@endsection
