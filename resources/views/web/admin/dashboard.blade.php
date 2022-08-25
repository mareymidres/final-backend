@extends('web.admin.layouts.master')

@section('title' ,'Dashboard')


@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
      

        <div class="row">
         <div class="col-xl-3 col-md-6">
          <div class="card bg-dark text-white mb-4">
            <div class="card-body">Totel Category
              <h3>{{$categories}}</h3>
            </div>
             <div class="card-footer d-flex align-items-center justify-content-between">
              <a class="small text-white stretched-link text-decoration-none" href="{{url ('admin/category')}}">View Details</a>
           <div class="small text-white"><i class="fas fa-angle-right"></i></div>
         </div>
      </div>
    </div>
 
    <div class="col-xl-3 col-md-6">
          <div class="card bg-dark text-white mb-4">
            <div class="card-body">Totel admin
              <h3>{{$admin}}</h3>
            </div>
             <div class="card-footer d-flex align-items-center justify-content-between">
              <a class="small text-white stretched-link text-decoration-none" href="{{url ('admin/user')}}">View Details</a>
              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
         </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
          <div class="card bg-dark text-white mb-4">
            <div class="card-body">Totel user
            <h3>{{$users}}</h3>
            </div>
             <div class="card-footer d-flex align-items-center justify-content-between">
              <a class="small text-white text-decoration-none" href="{{url ('admin/user')}}">View Details</a>
              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
         </div>
      </div>
    </div>
  </div>
</div>


@endsection