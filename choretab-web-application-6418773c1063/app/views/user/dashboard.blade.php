@extends('master')

@section('content')
    <h1>My Dashboard</h1>
    <div class="content">
    	<h2>My Home:</h2>
    	@if (count($spaces))
            <ul>
                @foreach($spaces as $space)
                    <li>{{ HTML::link("space/$space->id", $space->name) }}</li>
                @endforeach
            </ul>
        @else
            <p>No homes! Add one!</p>
        @endif
    	<p>{{ HTML::link('space/add', 'Add new home') }}</p>
    </div>
@stop