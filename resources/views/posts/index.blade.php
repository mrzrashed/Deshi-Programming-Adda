@extends('layouts.app')

@section('content')

    <div style="background:transparent !important" class="jumbotron text-center">
        <h2>We are here to give you more than you ever thought.</h2>
        <hr class="my-4">
        <p>Deshi Programming Adda will surve you as your ebst assistant when you fall any problem.Where many technology specialist will be avilable and will
          share their thoughts to you.</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="/login" role="button">Get Started</a>
        </p>
      </div>
    <h1>Posts</h1>

     @if(count($posts) > 1)
        @foreach($posts as $post)
            <div class="well">
                <h4><a href="/posts/{{$post->post_id}}">{{$post->post_title}}</a></h4>
                <small>Asked Date - {{$post->created_at}}</small>
            </div>
        @endforeach
     @else
        <p>There is no posts available.</p>
     @endif
@endsection