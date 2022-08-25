@extends('web.admin.layouts.master')

@section('title' ,'category')

@section('content')




      <div class="container ">
        <div class="row justify-content-center">
          <div class="col-md-6 p-5">
          @include('web.admin.layouts.inc.messges')
    
            <div class="card shadow-sm rounded">
              <div class="badge bg-dark text-wrap ">
                <h3 class="card-title Light ">Add Category</h3>
</div>
              <form action="{{route('portfoliocat.store')}}" method="POST">
              @csrf
              <div class="card-body shadow-sm">
                  <div class="form-group">
                  <label for="name fs-1">name</label>
                <input type="text" name="name" id="name" value="{{old('name')}}"  class="form-control" >
                  
                    </div>
                <div class="text-center p-3">
                  <button type="submit" class="btn btn-dark">Submit</button>
               </form>
</div>
@endsection
