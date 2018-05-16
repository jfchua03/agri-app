@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <a href="http://localhost:85/laravelapps/myFirstLaravelApp/public/posts"><button class="btn btn-danger">Go Back</button></a>
        <hr>
        <h1>{{$post->title}}</h1>
        <div>
            {{$post->body}}
        </div>
        <hr>
        <small>Written on {{$post->created_at}}</small>
        <hr>
        <p>
            <a class="btn btn-warning" href="http://localhost:85/laravelapps/myFirstLaravelApp/public/posts/{{$post->id}}/edit/">Edit Post</a> 
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete Post', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        </p>
    </div>
@endsection