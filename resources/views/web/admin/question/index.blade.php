@extends('web.admin.layouts.master')

@section('title' ,'question')

@section('content')

<div class="container p-5  my-5">
  
  <h1 class="text-center mb-3">Question</h1>
  <div class="row justify-content-center">
    <div class="col-8">
    @include('web.admin.layouts.inc.messges')

           <a href="{{route('question.create')}}" class="fw-lighter btn btn-outline-dark">Add <i class="fa-solid fa-plus"></i></a>
<table class="table">
  <thead>
    <tr>
      <th class="col text-capitalize fw-lighter">#</th>
      <th class="col text-capitalize fw-lighter">question</th>
      <th class="col text-capitalize fw-lighter">answer</th>
      <th class="col text-capitalize fw-lighter">edit</th>
      <th class="col text-capitalize fw-lighter">delet</th>

      
    </tr>
  </thead>
  <tbody>
      <tr> 
      @foreach ($questions as $question)
      <td class="fw-lighter py-2 ">{{$loop->iteration}}</td>
      <td class="fw-lighter py-2 ">{{$question->question}}</td> 
      <td class="fw-lighter py-2 ">{{$question->answer}}</td> 
      <td>
      <a class="btn btn-success" href="{{route('question.edit', $question->id)}}">edit <i class="bi bi-pencil-square"></i></a>
    </td>
      <td>
      <form action="{{route('question.destroy', $question->id)}}" method="POST">
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
