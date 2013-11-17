@extends('master')

@section('content')
    <h1>Add a Home: {{{ $spaceName }}}</h1>
    <div class="content">
    	<h2>Step Two: Invite Roommates</h2>
        {{ Form::open(array('url' => 'space/addfin')) }}
  
            {{ Form::label('roommate', 'Roommate email:') }}
            {{ Form::text('roommate') }}  

            {{ Form::label('roommate_name', 'Name:') }}
            {{ Form::text('roommate_name') }}

            <br>

            {{ Form::label('roommate', 'Roommate email:') }}
            {{ Form::text('roommate') }}  

            {{ Form::label('roommate_name', 'Name:') }}
            {{ Form::text('roommate_name') }}

            <br>

            {{ Form::label('roommate', 'Roommate email:') }}
            {{ Form::text('roommate') }}  

            {{ Form::label('roommate_name', 'Name:') }}
            {{ Form::text('roommate_name') }}

            <p>

            {{ HTML::link('#', 'Add another roommate') }}

            </p>

            {{ Form::submit('Finish') }}

        {{ Form::close() }}
    	<p>{{ HTML::link('user', 'Cancel') }}
    </div>
@stop