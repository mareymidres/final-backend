@extends('web.admin.layouts.master')

@section('title' ,'team')

@section('content')

<div class="container my-5">
  
  <h1 class="text-center mb-3">Team</h1>
  <div class="row justify-content-center">
    <div class="col">
      
    @include('web.admin.layouts.inc.messges')
           <a href="{{route('team.create')}}" class=" fw-lighter btn btn-outline-dark">Add <i class="fa-solid fa-plus"></i></a>
<table class="table">
  <thead>
    <tr>
      <th class="col text-capitalize fw-lighter">#</th>
      <th class="col text-capitalize fw-lighter">image</th>
      <th class="col text-capitalize fw-lighter">name</th>
      <th class="col text-capitalize fw-lighter">position</th>
      <th class="col text-capitalize fw-lighter">twitter</th>
      <th class="col text-capitalize fw-lighter">facebook</th>
      <th class="col text-capitalize fw-lighter">insta</th>
      <th class="col text-capitalize fw-lighter">linkedin</th>
      <th class="col text-capitalize fw-lighter">edit</th>
      <th class="col text-capitalize fw-lighter">delet</th>
    </tr>
  </thead>
  <tbody>
     <tr>
       @foreach($teams as $team)
       <td class="fw-lighter py-2 text-capitaliz">{{$loop->iteration}}</td> 
       <td class="fw-lighter py-2 text-capitaliz"><img src="{{asset('images/team/' . $team->img )}}" style="height: 100%; width: 80px;" alt=""></td> 
       <td class="fw-lighter py-2 text-capitaliz">{{$team->name}}</td> 
       <td class="fw-lighter py-2 text-capitaliz">{{$team->position}}</td> 
       <td class="fw-lighter py-2 text-capitaliz">{{$team->twitter}}</td> 
       <td class="fw-lighter py-2 text-capitaliz">{{$team->facebook}}</td> 
       <td class="fw-lighter py-2 text-capitaliz">{{$team->insta}}</td> 
       <td class="fw-lighter py-2 text-capitaliz">{{$team->linkedin}}</td> 
       <td>
      <a class="btn btn-success" href="{{route('team.edit', $team->id)}}">edit <i class="bi bi-pencil-square"></i></a>
    </td>
    <td>
      <form action="{{route('team.destroy', $team->id)}}" method="POST">
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
