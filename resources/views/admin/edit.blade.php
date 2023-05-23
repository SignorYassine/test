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
                            <input type="text" name='name' value="{{$data->name}}" class='form-control'>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Genre</label>
                            <select name='genre' class='form-control'>
                                <option value='action' {{ $data->genre == 'action' ? 'selected' : '' }}>Action</option>
                                <option value='comedy' {{ $data->genre == 'comedy' ? 'selected' : '' }}>Comedy</option>
                                <option value='fantasy' {{ $data->genre == 'fantasy' ? 'selected' : '' }}>Fantasy</option>
                                <option value='adventure' {{ $data->genre == 'adventure' ? 'selected' : '' }}>Adventure</option>
                                <option value='drama' {{ $data->genre == 'drama' ? 'selected' : '' }}>Drama</option>
                                <option value='horror' {{ $data->genre == 'horror' ? 'selected' : '' }}>Horror</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Category</label>
                            <select name='category' class='form-control'>
                                <option value='anime' {{ $data->category == 'anime' ? 'selected' : '' }}>Anime</option>
                                <option value='movie' {{ $data->category == 'movie' ? 'selected' : '' }}>Movie</option>
                                <option value='tvshow' {{ $data->category == 'tvshow' ? 'selected' : '' }}>Tv Show</option>
                                <option value='games' {{ $data->category == 'games' ? 'selected' : '' }}>Games</option>
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
