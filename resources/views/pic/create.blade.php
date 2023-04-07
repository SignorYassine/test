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
                    <h4>Add pic
                        <a href="{{url('pic')}}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('add-pic')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name='name' class='form-control'>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Genre</label>
                            <input type="text" name='genre' class='form-control'>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Image</label>
                            <input type="file" name='img' class='form-control'>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-success">Save Pic</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection