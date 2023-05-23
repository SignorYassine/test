@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-12">
                    <h1 class="text">Games</h1>
                    
                </div>
            </div>
        </div>
        <div class="mb-5">
        <center>
            <h4 class="text">Action</h4>
        </center>    
        
            <div class="slider">
                @foreach($show as $v)
                    @if($v->genre == "action")
                        <a href="{{route('info', $v->id)}}" class='main'>
                        <div class='card'>
                            <img class="card-img-top entertainments" src="{{ asset('uploads/entertainments/'.$v->img)}}"  alt="img" >
                            <div class="card-body text-center bg-dark text-white">
                                <h5 class="card-title">{{$v->name}}</h5>
                            </div>
                        </div>
                    </a>                 @endif
                @endforeach
            </div>
        </div>
        <div class="mb-5">
        <center>
            <h4 class="text">Comedy</h4>
        </center>    
        
            <div class="slider">
                @foreach($show as $v)
                    @if($v->genre == "comedy")
                        <a href="{{route('info', $v->id)}}" class='main'>
                        <div class='card'>
                            <img class="card-img-top entertainments" src="{{ asset('uploads/entertainments/'.$v->img)}}"  alt="img" >
                            <div class="card-body text-center bg-dark text-white">
                                <h5 class="card-title">{{$v->name}}</h5>
                            </div>
                        </div>
                    </a>                 @endif
                @endforeach
            </div>
        </div>

        <div class="mb-5">
            <center>
            <h4 class="text">Fantasy</h4>

            </center>
                        <div class="slider">
                @foreach($show as $v)
                    @if($v->genre == "fantasy")
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
            <h4 class="text">Adventure</h4>
        </center>    
        
            <div class="slider">
                @foreach($show as $v)
                    @if($v->genre == "adventure")
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
            <h4 class="text">Drama</h4>
        </center>    
        
            <div class="slider">
                @foreach($show as $v)
                    @if($v->genre == "drama")
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
            <h4 class="text">Horror</h4>
        </center>    
        
            <div class="slider">
                @foreach($show as $v)
                    @if($v->genre == "horror")
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
    slidesToShow: 5,
    slidesToScroll: 3
    });
    });
</script>


@endsection