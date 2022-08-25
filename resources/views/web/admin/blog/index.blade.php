@extends('web.admin.layouts.master')

@section('title' ,'blog')

@section('content')

<div class="container my-5">
  
  <h1 class="text-center mb-3">Blog</h1>
  <div class="row justify-content-center">
    <div class="col">

      
    @include('web.admin.layouts.inc.messges')
           <a href="{{route('blog.create')}}" class=" fw-lighter btn btn-outline-dark">Add <i class="fa-solid fa-plus"></i></a>
<table class="table">
  <thead>
    <tr>
      <th class="col text-capitalize fw-lighter">#</th>
      <th class="col text-capitalize fw-lighter">img</th>
 
      <th class="col text-capitalize fw-lighter">title</th>
      <th class="col text-capitalize fw-lighter">name</th>
      <th class="col text-capitalize fw-lighter">cat-id</th>
      <th class="col text-capitalize fw-lighter">img</th>
      <th class="col text-capitalize fw-lighter">edit</th>
      <th class="col text-capitalize fw-lighter">delet</th>
    </tr>
  </thead>
  <tbody>
     <tr>
       @foreach($blogs as $blog)
       <td class="fw-lighter py-2 text-capitaliz">{{$loop->iteration}}</td> 
       <td class="fw-lighter py-2 text-capitaliz">
       <img src="{{ asset ('images/blog/' . $blog->img)}}"
       style="height: 100px; width: 150px;" alt="photo"> </td>
       <td class="fw-lighter py-2 text-capitaliz">{{$blog->title}}</td> 
       <td class="fw-lighter py-2 text-capitaliz">{{$blog->name}}</td> 
       <td class="fw-lighter py-2 text-capitaliz">{{$blog->category->name}}</td> 
       <td class="fw-lighter py-2 text-capitaliz">
       <img src="{{ asset ('images/blog/' . $blog->image)}}"
       style="height: 100px; width: 150px;" alt="photo"> </td>
       </td> 
       <td>
      <a class="btn btn-success" href="{{route('blog.edit', $blog->id)}}">edit <i class="bi bi-pencil-square"></i></a>
    </td>
    <td>
      <form action="{{route('blog.destroy', $blog->id)}}" method="POST">
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
