@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card">
                <a href="http://localhost:85/laravelapps/myFirstLaravelApp/public/posts/{{$post->id}}">{{$post->title}}</a>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found!</p>
    @endif
    <br>
    <a href="http://localhost:85/laravelapps/myFirstLaravelApp/public/posts/create"><button class="btn btn-primary">Create New Post</button></a>
@endsection