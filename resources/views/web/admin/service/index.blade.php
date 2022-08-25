@extends('web.admin.layouts.master')

@section('title' ,'service')

@section('content')

<div class="container p-5  my-5">
  
  <h1 class="text-center mb-3">Service</h1>
  <div class="row justify-content-center">
    <div class="col-8">
    @include('web.admin.layouts.inc.messges')

           <a href="{{route('service.create')}}" class="btn btn-outline-dark">Add <i class="fa-solid fa-plus"></i></a>
<table class="table">
  <thead>
    <tr>
      <th class="col text-capitalize fw-lighter">#</th>
      <th class="col text-capitalize fw-lighter">icon</th>
      <th class="col text-capitalize fw-lighter">title</th>
      <th class="col text-capitalize fw-lighter">description</th>
      <th class="col text-capitalize fw-lighter">edit</th>
      <th class="col text-capitalize fw-lighter">delet</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($services as $service)
      <tr> 
      <td class="fw-lighter py-2 text-capitalize">{{$loop->iteration}}</td>
      <td class="fw-lighter py-2 text-capitaliz">{{$service->icon}}</td> 
      <td class="fw-lighter py-2 text-capitaliz">{{$service->title}}</td>
      <td class="fw-lighter py-2 text-capitaliz">{{$service->description}}</td> 
      <td>
      <a class="btn btn-success" href="{{route('service.edit', $service->id)}}">edit <i class="bi bi-pencil-square"></i></a>
    </td>
      <td>
      <form action="{{route('service.destroy', $service->id)}}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">delet</button>
    </form>
    </td>
    @endforeach
    
    

    </tr>
   

  </tbody>
</table>
</div>
</div>
@endsection
