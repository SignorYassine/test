@extends('layouts.app')

@section('content')

<div class="bg-dark text-white p-5">
    <h1 class="mb-4">Are you sure?</h1>
    <a href="/list" class="btn btn-primary mr-2">No</a>
    <form action="{{route('list.delete', $id)}}" method="post" class="d-inline">
        @csrf
        @method('delete')
        <button class='btn btn-danger'>Delete</button>
    </form>
</div>


@endsection