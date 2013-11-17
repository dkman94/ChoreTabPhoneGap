@extends('master')

@section('content')
    <h1>Profile for {{{ $user->fullname() }}}</h1>
    <div class="content">
    	<h2>Info:</h2>
        <p>Email: {{{ $user->email }}}</p>
    </div>
@stop