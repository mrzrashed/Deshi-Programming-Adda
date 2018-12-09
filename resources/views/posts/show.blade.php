@extends('layouts.app')

@section('content')
<div class="post">
	<div class="post_title">
		<h1 style="color:aliceblue;">{{$post->post_title}}</h1>
	</div>
	<div class="post_body">

		<h4 style="color:aliceblue;">{{$post->post_body}}</h4>
	    <h4 style="color:aliceblue;">{{$post->created_at}}</h4>
	    <h4 style="color:aliceblue;">{{$post->post_id}}</h4>
	</div>
	<div class="post_commnet">
		<form class="form">
			<input type="text" name="" class="form__input">
			<button class="btnn_comnt">Commnent</button>
		</form>
	</div>
	<hr>
	<a  href="/posts/{{$post->post_id}}/edit" class="btn btn-primary">Edit</a>

	{!!Form::open(['action'=> ['PostsController@destroy',$post->post_id], 'method'=>'POST','class'=>'pull-right'])!!}
	{{Form::hidden('_method','DELETE')}}
	{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
	{!!Form::close()!!}

</div>
@endsection