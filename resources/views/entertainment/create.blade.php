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
                        <a href="{{route('list')}}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('add-entertainment')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name='name' class='form-control'>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Genre</label>
                            <select name='genre' class='form-control'>
                                <option value='action'>Action</option>
                                <option value='comedy'>Comedy</option>
                                <option value='fantasy'>Fantasy</option>
                                <option value='adventure'>Adventure</option>
                                <option value='drama'>Drama</option>
                                <option value='horror'>Horror</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Category</label>
                            <select name='category' class='form-control'>
                                <option value='anime'>Anime</option>
                                <option value='movie'>Movie</option>
                                <option value='tvshow'>Tv Show</option>
                                <option value='games'>Games</option>
                            </select>
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