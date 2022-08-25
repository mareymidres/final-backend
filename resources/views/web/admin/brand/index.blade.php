@extends('web.admin.layouts.master')

@section('title' ,'brnad')

@section('content')

<div class="container p-5  my-5">
  
  <h1 class="text-center mb-3">Brand</h1>
  <div class="row justify-content-center">
    <div class="col-8">
    @include('web.admin.layouts.inc.messges')

           <a href="{{route('brand.create')}}" class="fw-lighter btn btn-outline-dark">Add <i class="fa-solid fa-plus"></i></a>
<table class="table">
  <thead>
    <tr>
      <th class="col text-capitalize fw-lighter">#</th>
      <th class="col text-capitalize fw-lighter">image</th>
      <th class="col text-capitalize fw-lighter">edit</th>
      <th class="col text-capitalize fw-lighter">delet</th>

      
    </tr>
  </thead>
  <tbody>
      <tr> 
      @foreach ($brands as $brand)
      <td class="fw-lighter py-2 ">{{$loop->iteration}}</td>
      <td class="fw-lighter py-2 ">
      <img src="{{asset('images/brand/' . $brand->img )}}" style="height: 100px; width: 150px;" >
      </td> 
      <td>
      <a class="btn btn-success" href="{{route('brand.edit', $brand->id)}}">edit <i class="bi bi-pencil-square"></i></a>
    </td>
      <td>
      <form action="{{route('brand.destroy', $brand->id)}}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">delet</button>
    </form>
    </td>
    </tr>
    @endforeach

  </tbody>
</table>
</div>
</div>
@endsection
