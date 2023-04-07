@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
                    <h1 class="text">Rating
                    <a href="{{url('add-pic')}}" class="btn btn-primary float-end">Add pic</a>
                    </h1>
                    
                </div>
            </div>
        </div>
        <div class="mb-5">
        <center>
            <h4 class="text">Action</h4>
        </center>    
        
            <div class="slider">
                @foreach($pics as $v)
                    @if($v->genre == "Action")
                        
                    <img class="pics" src="{{ asset('uploads/pics/'.$v->img)}}"  alt="img" >
                    @endif
                @endforeach
            </div>
        </div>
        <div class="mb-5">
        <center>
            <h4 class="text">Comedy</h4>
        </center>    
        
            <div class="slider">
                @foreach($pics as $v)
                    @if($v->genre == "comedy")
                        
                    <img class="pics" src="{{ asset('uploads/pics/'.$v->img)}}"  alt="img" >
                    @endif
                @endforeach
            </div>
        </div>
        <div>
            <div class="slider-for">

            </di class="mb-5"v>
            <center>
            <h4 class="text">Anime</h4>

            </center>
                        <div class="slider">
                @foreach($pics as $v)
                    @if($v->genre == "Anime")
                    
                        
                    <img class="pics" src="{{ asset('uploads/pics/'.$v->img)}}"  alt="img" >
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
