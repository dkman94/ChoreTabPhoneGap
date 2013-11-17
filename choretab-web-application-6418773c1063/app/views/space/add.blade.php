@extends('master')

@section('content')
    <h1>Add a Home</h1>
    <div class="content">
    	<h2>Step One: Home Info</h2>
        {{ Form::open(array('url' => 'space/add')) }}
  
            {{ Form::label('name', 'Name your home:') }}
            {{ Form::text('name') }}

            <br>

            {{ Form::submit('Next') }}

        {{ Form::close() }}
    	<p>{{ HTML::link('user', 'Cancel') }}
    </div>
@stop