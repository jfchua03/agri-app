@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card text-center">
            <h1>Account Information</h1>
            <hr>
            <p><span class="label label-default">Name: </span> {{$userDetails->name}}</p>
            <p><span class="label label-default">Email Address: </span> {{$userDetails->email}}</p>
            <p><span class="label label-default">Created at: </span> {{$userDetails->created_at}}</p>
            <p><span class="label label-default">Modified at: </span> {{$userDetails->updated_at}}</p>
            <p><a href="http://localhost:85/laravelapps/myFirstLaravelApp/public/profile/{{$userDetails->id}}/edit/" class="btn btn-primary">Edit Profile</a></p>
        </div>
    </div>
@endsection