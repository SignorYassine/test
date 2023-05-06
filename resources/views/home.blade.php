@extends('layouts.app')

@section('content')
<link rel='stylesheet' href="resources/js/app.css">
<div class="container">
    <div class="row">
        <div class="col-md-12">
                    <h1 class="text">Rating</h1>
                </div>
            </div>
        </div>
        <div class="mb-5">
        <center>
            <h4 class="text">Tv Show</h4>
        </center>    
        
            <div class="slider">
                @foreach($entertainments as $v)
                    @if($v->category == "tvshow")
                    <a href="{{route('info', $v->id)}}" class='main'>
                        <div class='card'>
                            <img class="card-img-top entertainments" src="{{ asset('uploads/entertainments/'.$v->img)}}"  alt="img" >
                            <div class="card-body text-center bg-dark text-white">
                                <h5 class="card-title">{{$v->name}}</h5>
                            </div>
                        </div>
                    </a>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="mb-5">
        <center>
            <h4 class="text">Movie</h4>
        </center>    
        
            <div class="slider">
                @foreach($entertainments as $v)
                    @if($v->category == "movie")
                    <a href="{{route('info', $v->id)}}" class='main'>
                        <div class='card'>
                            <img class="card-img-top entertainments" src="{{ asset('uploads/entertainments/'.$v->img)}}"  alt="img" >
                            <div class="card-body text-center bg-dark text-white">
                                <h5 class="card-title">{{$v->name}}</h5>
                            </div>
                        </div>
                    </a>
                    @endif
                @endforeach
            </div>
        </div>

        <div class="mb-5">
            <center>
            <h4 class="text">Anime</h4>

            </center>
            <div class="slider">
                @foreach($entertainments as $v)
                    @if($v->category == "anime")
                    <a href="{{route('info', $v->id)}}" class='main'>
                        <div class='card'>
                            <img class="card-img-top entertainments" src="{{ asset('uploads/entertainments/'.$v->img)}}"  alt="img" >
                            <div class="card-body text-center bg-dark text-white">
                                <h5 class="card-title">{{$v->name}}</h5>
                            </div>
                        </div>
                    </a>    
                    @endif
                @endforeach
            </div>
        </div>
        <div class="mb-5">
        <center>
            <h4 class="text">Games</h4>
        </center>    
        
            <div class="slider">
                @foreach($entertainments as $v)
                    @if($v->category == "games")
                    <a href="{{route('info', $v->id)}}" class='main'>
                        <div class='card'>
                            <img class="card-img-top entertainments" src="{{ asset('uploads/entertainments/'.$v->img)}}"  alt="img" >
                            <div class="card-body text-center bg-dark text-white">
                                <h5 class="card-title">{{$v->name}}</h5>
                            </div>
                        </div>
                    </a>
                    @endif
                @endforeach
            </div>
        </div>
        
    </div>
</div>

<script src="{{ mix('js/app.js') }}"></script>
<script>
    $(document).ready(function() {
    $('.slider').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 3
    });
    });
</script>


@endsection
