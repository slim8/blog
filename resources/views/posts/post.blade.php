@extends('layouts.app')
@section('content')
    <h1>Posts</h1>


    @if (count($posts)>0)
    @foreach($posts as $post)
        <div class="well">
            <a href="/posts/{{$post->id}}">
        <h3>{{$post->title}}</h3></a>
            <!-- Button trigger modal -->

            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$post->id}}">
                Edit
            </button>

            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$post->id}}">
                Delete
            </button>

            <div class="modal fade" id="delete{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">r u sure u want to delete {{$post->title}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <form action="{{ route('delete.post' , ['id' => $post->id]) }}" method="POST">
                                @csrf
                                <a href="">
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>Delete</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade bd-example-modal-lg" id="edit{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">r u sure u want to delete {{$post->title}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">

                                {!! Form::open(['action' => ['PostController@update', $post->id], 'method'=>'POST']) !!}
                                <div class="form-group">
                                    {{Form::label('title','Title')}}
                                    {{Form::text('title',$post->title, ['class'=>'form-control','placeholder'=>'Title'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::label('body','Body')}}
                                    {{Form::textarea('body',$post->body, ['id'=>'article-ckeditor'.$post->id, 'class'=>'form-control','placeholder'=>'Body Text'])}}
                                </div>
                                {{Form::hidden('_method','PUT')}}
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

                                {!! Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>

            <script>
                CKEDITOR.replace( 'article-ckeditor{{$post->id}}' );
            </script>

        <small>Created At : {{$post->created_at}}</small>
            </div>
    @endforeach
        {{$posts->links()}}
    @else
    <h3>There is no posts yet</h3>
    @endif
   @endsection




