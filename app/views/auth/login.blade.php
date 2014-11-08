@extends('layout.master')

@section('head')
    {{ HTML::style(asset('css/login.css')) }}
@stop

@section('content')
      {{ Form::open(['route' => 'sessions.store', 'class' => 'form-signin']) }}
        <h2>Please sign in</h2>
        {{ Form::input('text', 'email', null, ['class' => 'form-control', 'placeholder' => 'Email address']) }}
        {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
        <div class="checkbox">
            <label for="remember_me">
                {{ Form::checkbox('remember_me', true) }} Remember me
            </label>
        </div>
        {{ Form::submit('Sign in', ['class' => 'btn btn-lg btn-primary btn-block']) }}
      {{ Form::close() }}
@stop