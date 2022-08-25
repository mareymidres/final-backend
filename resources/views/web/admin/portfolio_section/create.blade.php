@extends('web.admin.layouts.master')

@section('title' ,'create portfoliosection')

@section('content')
      <div class="container ">
        <div class="row justify-content-center">
          <div class="col-md-6 p-5">
          @include('web.admin.layouts.inc.messges')
            <div class="card shadow-sm rounded">
              <div class="badge bg-dark text-wrap ">
                <h3 class="card-title">Add On PortfolioSection</h3>
</div>
              <form action="{{route('portfoliosection.store')}}"  method="POST">
              @csrf
              <div class="card-body shadow-sm">
                  <div class="form-group">
                  <label for="title fs-1">title</label>
                <input type="text" name="title" value="{{old('title')}}" id="title"  class="form-control" >
                <div class="">
                  
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
                  
             
             
                <div class="text-center p-3">
                  <button type="submit" class="btn btn-dark">Submit</button>
               </form>
</div>
@endsection
