@extends('layouts.app')

@section('content')


<div class="container text-white">
    <div class="row movie-info">
        <div class="col-md-4">
            <img class="movie-poster the-img" src="{{ asset('uploads/entertainments/'.$info->img)}}"
                alt="{{$info->name}} poster">
        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-4">
              <h1>{{$info->name}}</h1>
            </div>
            <div class="movie-rating col-md-4">
                <h3 class="average-rating"><img class='rating-star' width="30"
                        src="{{ asset('uploads/entertainments/star.png')}}" alt="star">{{$averageRating}} / 5 </h3>
                <h5><img class='user-icon' width="20" src="{{ asset('uploads/entertainments/user.png')}}"
                        alt="user">{{$users}} user ratings</h5>
            </div>
            <div class="movie-actions col-md-4">

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
              Launch modal
            </button>

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rate this movie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('rating')}}" method="POST">
          @csrf
          <div class="form-group ml-5">
            <label for="rating">Your rating:</label>
            <div class="rating ml-4">
              <input type="radio" id="star5" name="rate" value="5" /><label for="star5"
                title="5 stars"></label>
              <input type="radio" id="star4" name="rate" value="4" /><label for="star4"
                title="4 stars"></label>
              <input type="radio" id="star3" name="rate" value="3" /><label for="star3"
                title="3 stars"></label>
              <input type="radio" id="star2" name="rate" value="2" /><label for="star2"
                title="2 stars"></label>
              <input type="radio" id="star1" name="rate" value="1" /><label for="star1"
                title="1 star"></label>
            </div>
          </div>
          @if(auth()->check())
          <input type="hidden" name="entertainment_id" value="{{$info->id}}" />
          <input type="hidden" name="user_id" value="{{ Auth::id() }}" />
          <button type="submit" class="btn btn-primary">Rate</button>
          @else
          <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
          @endif

        </form>
      </div>
    </div>
  </div>
</div>
          </div>
          <div class="description mt-3">
            <h3 class="description-tag">Description</h3>
            <p class="description-content">A failed reporter is bonded to an alien entity, one of many symbiotes who have invaded Earth. But the being takes a liking to Earth and decides to protect it.</p>
          </div>
        </div>
    </div>
    <div class="row comments my-5">
        <div class="comments">
            <form action="{{route('comment')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control rounded-pill shadow-sm px-4 comment-field" required name="comment" placeholder="Type your comment..." maxlength="250">
                </div>
                @if(auth()->check())
                <input type="hidden" name="entertainment_id" value="{{$info->id}}" />
                <input type="hidden" name="user_id" value="{{ Auth::id() }}" />
                <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">

                <button type="submit" class="my-3 btn btn-primary rounded-pill px-5 py-2">Comment</button>

                @else
                <a href="{{ route('login') }}"  class="my-3 btn btn-primary rounded-pill px-5 py-2">Login</a>
                @endif
            </form>
        </div>
        <div>

            @foreach($comments as $comment)
            <div class="comment">
                <table class="comment-section border-rounded my-3">
                    <tr>
                        <td rowspan="2" class="p-2"><img class='user-icon' width="50" src="{{ asset('uploads/entertainments/utilisateur.png')}}"alt="user"></td>
                        <td>{{$comment->user_name}}</td>
                        <tr>
                            <td >{{$comment->created_at}}</td>
                        </tr>
                    </tr>
                    <tr>
                        <td colspan="2" class="p-2" width="500">{{$comment->comment}}</td>
                    </tr>
                    
                </table>
            @if(auth()->check() && Auth::user()->name == $comment->user_name)
                <form action="{{route('delete_comment', $comment->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="my-3 btn btn-danger rounded-pill px-5 py-2">Delete Comment</button>
                </form>
            @endif

            </div>
            @endforeach
        </div>
    </div>
</div>
<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
@endsection