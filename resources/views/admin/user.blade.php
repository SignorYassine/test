@extends('layouts.app')

@section('content')

<div class="container mt-5">
  <a href="{{route('list')}}" class="btn btn-primary m-3">List</a>
  <a href="{{route('admin.user')}}" class="btn btn-primary">Users</a>
  <a href="{{url('add-pic')}}" class="btn btn btn-primary m-3">Add an entertainment</a>
  <div>
    <center>
      <h1 class="text-white">Users</h1>  
    </center>
  </div>
  
  <table class="table table-bordered border border-3 border-secondary text-white text-center rounded mt-3">
    <thead class="bg-dark">
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($user as $v)
      <tr>
        <td>{{$v->id}}</td>
        <td>{{$v->name}}</td>
        <td>{{$v->email}}</td>
        <td>{{$v->role}}</td>
        <td><a href="{{route('user.check', $v->id)}}" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>





@endsection