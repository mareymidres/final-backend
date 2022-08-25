@extends('web.admin.layouts.master')

@section('title' ,'testimonial')

@section('content')

<div class="container-fluid, p-5  my-5">
  
  <h1 class="text-center mb-3">Testimonial</h1>
  <div class="row justify-content-center">
    <div class="col">
      
    @include('web.admin.layouts.inc.messges')
           <a href="{{route('testimonial.create')}}" class=" fw-lighter btn btn-outline-dark">Add <i class="fa-solid fa-plus"></i></a>
<table class="table">
  <thead>
    <tr>
      <th class="col text-capitalize fw-lighter">#</th>
      <th class="col text-capitalize fw-lighter">image</th>
      <th class="col text-capitalize fw-lighter">name</th>
      <th class="col text-capitalize fw-lighter">position</th>
      <th class="col text-capitalize fw-lighter">description</th>
      <th class="col text-capitalize fw-lighter">edit</th>
      <th class="col text-capitalize fw-lighter">delet</th>
    </tr>
  </thead>
  <tbody>
     <tr>
       @foreach($testimonials as $testimonial)
       <td class="fw-lighter py-2 text-capitaliz">{{$loop->iteration}}</td> 
       <td class="fw-lighter py-2 text-capitaliz">{{$testimonial->img}}</td> 
       <td class="fw-lighter py-2 text-capitaliz">{{$testimonial->name}}</td> 
       <td class="fw-lighter py-2 text-capitaliz">{{$testimonial->position}}</td> 
       <td class="fw-lighter py-2 text-capitaliz">{{$testimonial->description}}</td>  
       <td>
      <a class="btn btn-success" href="{{route('testimonial.edit', $testimonial->id)}}">edit <i class="bi bi-pencil-square"></i></a>
    </td>
    <td>
      <form action="{{route('testimonial.destroy', $testimonial->id)}}" method="POST">
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
