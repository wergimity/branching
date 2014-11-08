@extends('layout.master')

@section('head')
    {{ HTML::script(asset('js/script.js')) }}
@stop

@section('content')
    <div class="text-center">
        <button class="btn btn-primary btn-lg" data-target="#user-info" data-plugin="user-info">Show my info</button>
    </div>
    <div id="user-info"></div>
@stop