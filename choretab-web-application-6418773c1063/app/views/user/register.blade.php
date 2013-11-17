@extends('master')

@section('content')
    <h1>Create a new account</h1>
    <div class="content">
    	<p>Fill out the information below to create a new account.</p>
  
        @if ( Session::get('message') )
            <p>{{ Session::get('message') }}</p>
        @endif

    	{{ Form::open(array('url' => 'auth/register')) }}
  
    		{{ Form::label('email', 'Email address:') }}
            {{ Form::text('email') }}

            <br>

            {{ Form::label('firstname', 'First Name:') }}
            {{ Form::text('firstname') }}

            <br>

            {{ Form::label('lastname', 'Last Name:') }}
            {{ Form::text('lastname') }}

            <br>

            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password') }}

            <br>

            {{ Form::submit('Register!') }}

    	{{ Form::close() }}
    </div>
@stop