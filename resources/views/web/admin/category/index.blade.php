@extends('web.admin.layouts.master')

@section('title' ,'category')

@section('content')

<div class="container p-5  my-5">
  
  <h1 class="text-center mb-3">Category</h1>
  <div class="row justify-content-center">
    <div class="col-8">
    @include('web.admin.layouts.inc.messges')

           <a href="{{route('category.create')}}" class="btn btn-outline-dark">Add <i class="fa-solid fa-plus"></i></a>
<table class="table">
  <thead>
    <tr>
      <th  class="col text-capitalize fw-lighter">#</th>
      <th  class="col text-capitalize fw-lighter">Name</th>
      <th  class="col text-capitalize fw-lighter">edit</th>
      <th  class="col text-capitalize fw-lighter">delete</th>

      
    </tr>
  </thead>
  <tbody>
      <tr>
        @foreach($categories as $category)
      <td class="fw-lighter py-2 " >{{$loop->iteration}}</td>
      <td class="fw-lighter py-2 ">{{$category->name}}</td> 
      <td>
      <a class="btn btn-success" href="{{route('category.edit', $category->id)}}">edit <i class="bi bi-pencil-square"></i></a>
</td>
      <td>
      <form action="{{route('category.destroy', $category->id)}}" method="POST">
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






