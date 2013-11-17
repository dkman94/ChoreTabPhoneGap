@extends('master')

@section('content')
    <h1>Dashboard for {{{ $space->name }}}</h1>
    <div class="content">
    	<h2>Chores for home</h2>
        @if (count($space->chores))
            <ul>
                @foreach($space->chores as $chore)
                    <li>{{ HTML::link("chore/$chore->id", $chore->name) }}</li>
                @endforeach
            </ul>
        @else
            <p>No chores! Add one!</p>
        @endif

        <p>{{ HTML::link("chore/add/$space->id", 'Add Chore') }}</p>

        <h2>Roommates in home</h2>
        @if (count($space->users))
            <ul>
                @foreach($space->users as $roommate)
                    <li>{{ HTML::link("user/$roommate->id", $roommate->fullname()) }}</li>
                @endforeach
            </ul>
        @else
            <p>No roommates! Add one!</p>
        @endif
    </div>
@stop