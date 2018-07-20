
@extends('layout.master')
@section('content')
<a href="/posts" class="btn btn-default">Go back</a>
<h1>{{$post->title}}</h1><hr>
<div>
	{!!$post->body!!}
</div>
<hr>
<small>{{$post->created_at}} by {{@$post->user->name}}</small>
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
{!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
@endsection
