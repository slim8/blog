@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-2">
        <a href="/posts" class="btn btn-primary">Back</a>
    </div>
    <div class="col-10">
        <h1>{{ $post->title }}</h1>
        <p>{!!$post->body !!}</p>
        <hr>
        <small>Created At : {{$post->created_at}}</small>
        <hr>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
        {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right']) !!}

        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}

        {!! Form::close() !!}

    </div>
</div>
@endsection
