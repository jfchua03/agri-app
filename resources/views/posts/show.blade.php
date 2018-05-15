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
    </div>
@endsection