@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card text-center">
            <h1>Edit Account</h1>
            <hr>
            {!!Form::open(['action' => ['UsersProfileController@update', $userDetails->id], 'method'=>'POST'])!!}
                <div class='form-group'>
                    <p>{{Form::label('name', 'Name')}} {{Form::text('name', $userDetails->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}</p>
                    <p>{{Form::label('email', 'Email')}} {{Form::text('email', $userDetails->email, ['class' => 'form-control', 'placeholder' => 'Email Address'])}}</p>
                    {{Form::hidden('_method', 'PUT')}}
                    <p>{{Form::submit('Submit', ['class' => 'btn btn-success'])}}</p>
                </div>
            {!!Form::close()!!}
        </div>
    </div>
@endsection