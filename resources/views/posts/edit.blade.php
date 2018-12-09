@extends('layouts.app')

@section('content')
	{!! Form::open(['action'=>['PostsController@update',$post->post_id], 'method'=>'POST']) !!}
	    <div class="form-group">
	        {{form::label('title','Title')}}
	        {{form::text('title',$post->post_title,['class'=> 'form-control','placeholder' => 'title'])}}
	    </div>
	    <div class="form-group">
	            {{form::label('category','Category')}}
	            {{form::text('category',$post->post_category,['class'=> 'form-control','placeholder' => 'category'])}}
	    </div>
	    <div class="form-group">
	            {{form::label('body','Body')}}
	            {{form::textarea('body',$post->post_body,['class'=> 'form-control','placeholder' => 'body '])}}
	    </div>
	    {{form::hidden('_method','PUT')}}
	    {{form::submit('submit',['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}


@endsection