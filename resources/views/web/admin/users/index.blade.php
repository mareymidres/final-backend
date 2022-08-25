@extends('web.admin.layouts.master')

@section('title' ,'show user')

@section('content')

<div class="container  p-5   my-5">
  <div class="row">
    <div class="col">
<table class="table">
    <h1 class="text-center fw-lighter py-3 text-capitalize ">view user</h1>
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">role</th>
    
    </tr>
  </thead>
  <tbody>
   <tr>
   @foreach($users as $user)
    <tr>
      <td class="fw-lighter py-2 text-capitalize" >{{$loop->iteration}}</td>
      <td class="fw-lighter py-2 text-capitalize" >{{$user->name}}</td> 
      <td class="fw-lighter py-2 text-capitalize" >{{$user->email}}</td>
      <td class="fw-lighter py-2 text-capitalize" >{{$user->role_as }}</td> 
</tr> 
  
  @endforeach
</tbody>
</table>
</div>
</div>
</div>
@endsection