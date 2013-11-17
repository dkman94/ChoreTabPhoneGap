@extends('master')

@section('content')
    <h1>Create a new chore</h1>
    <div class="content">
    	<p>Fill out the information below to create a new chore.</p>
  
        @if ( Session::get('message') )
            <p>{{ Session::get('message') }}</p>
        @endif

    	{{ Form::open(array('url' => 'chore/add')) }}
  
    		{{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}

            <br>

            {{ Form::label('description', 'Description:') }} <br>
            {{ Form::textarea('description') }}

            <br>

    		{{ Form::label('difficulty', 'Difficulty:') }}
            {{ Form::text('difficulty') }}

            <br>

            {{ Form::submit('Add!') }}

    	{{ Form::close() }}
    </div>
@stop