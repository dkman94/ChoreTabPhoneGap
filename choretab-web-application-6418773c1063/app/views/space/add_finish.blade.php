@extends('master')

@section('content')
    <h1>Home Added: {{{ $spaceName }}}</h1>
    <div class="content">
    	<h2>Success!</h2>
        <p>View your new home {{HTML::link("space/$space_id", 'here')}}.</p>
    </div>
@stop