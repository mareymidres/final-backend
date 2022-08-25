@extends('web.admin.layouts.master')

@section('title' ,'blog section')

@section('content')

<div class="container my-5">
  
  <h1 class="text-center mb-3">blog section</h1>
  <div class="row justify-content-center">
    <div class="col">

      
    @include('web.admin.layouts.inc.messges')
           <a href="{{route('blogsection.create')}}" class=" fw-lighter btn btn-outline-dark">Add <i class="fa-solid fa-plus"></i></a>
<table class="table">
  <thead>
    <tr>
      <th class="col text-capitalize fw-lighter">#</th>
      <th class="col text-capitalize fw-lighter">img</th>
      <th class="col text-capitalize fw-lighter">img</th>
      <th class="col text-capitalize fw-lighter">title</th>
      <th class="col text-capitalize fw-lighter">secondtitle</th>
      <th class="col text-capitalize fw-lighter">thirdtitle</th>
      <th class="col text-capitalize fw-lighter">description</th>
      <th class="col text-capitalize fw-lighter">firstdescription</th>
      <th class="col text-capitalize fw-lighter">seconddescription</th>
      <th class="col text-capitalize fw-lighter">thirddescription</th>
      <th class="col text-capitalize fw-lighter">fourthdescription</th>
      <th class="col text-capitalize fw-lighter">fifthtdescription</th>
      <th class="col text-capitalize fw-lighter">edit</th>
      <th class="col text-capitalize fw-lighter">delet</th>
    </tr>
  </thead>
  <tbody>
     @foreach($blogsections as $b)
  <tr>
  <td class="fw-lighter py-2 ">{{$loop->iteration}}</td>
  <td class="fw-lighter py-2 ">
    <img src="{{asset('images/blogsection/' . $b->img )}}" style="height: 100px; width: 150px;" alt="">
  </td>
  <td class="fw-lighter py-2 b->tit">
  <img src="{{asset('images/blogsection/' . $b->image )}}" style="height: 100px; width: 150px;" alt="">

  </td>

  <td class="fw-lighter py-2 ">{{$b->title}}</td>
  <td class="fw-lighter py-2 ">{{$b->secondtitle}}</td>  
  <td class="fw-lighter py-2 ">{{$b->thirdtitle}}</td>
  <td class="fw-lighter py-2 ">{{$b->description}}</td>
  <td class="fw-lighter py-2 ">{{$b->firstdescription}}</td>
  <td class="fw-lighter py-2 ">{{$b->seconddescription}}</td>
  <td class="fw-lighter py-2 ">{{$b->thirddescription}}</td>
  <td class="fw-lighter py-2 ">{{$b->fourthdescription}}</td>
  <td class="fw-lighter py-2 ">{{$b->fifthtdescription}}</td>
  <td>
      <a class="btn btn-success" href="{{route('blogsection.edit', $b->id)}}">edit <i class="bi bi-pencil-square"></i></a>
    </td>
      <td>
      <form action="{{route('blogsection.destroy', $b->id)}}" method="POST">
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
