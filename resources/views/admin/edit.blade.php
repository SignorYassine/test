@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
                <h6 class="alert alert-success">{{session('status')}}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Edit
                        <a href="{{url('/list')}}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('list.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{ $data->name }}" class="form-control" id="name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="genre">Genre</label>
                            <input type="text" name="genre" value="{{ $data->genre }}" class="form-control" id="genre">
                        </div>
                        <div class="form-group mb-3">
                            <label for="img">Image</label>
                            <input type="file" name="img" class="form-control" id="img" >
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection