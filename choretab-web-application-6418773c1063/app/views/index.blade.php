@extends('master')

@section('content')
    <h1>Welcome to ChoreTab!</h1>
    <div class="content">
    	<p>ChoreTab is awesome. {{ HTML::link('auth/login', 'Login') }}</p>
    </div>
@stop