@extends('layouts.app')
@section('content')

    <div class="row">
          <h1>Top Questions</h1>
    </div>
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