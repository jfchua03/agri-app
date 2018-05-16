@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id],'method' => 'POST']) !!}
        <div class='form-group'>
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class='form-group'>
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        <p>{{Form::submit('Submit', ['class' => 'btn btn-success'])}}{!! Form::close() !!} <a href="http://localhost:85/laravelapps/myFirstLaravelApp/public/posts/"><button class="btn btn-danger">Go Back</button></a></p>
@endsection