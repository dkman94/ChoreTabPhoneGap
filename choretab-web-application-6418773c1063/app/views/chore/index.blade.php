@extends('master')

@section('content')
    <h1>Chore: {{{ $chore->name }}}</h1>
    <div class="content">
    	<h2>Info:</h2>
        <p>Name: {{{ $chore->name }}}</p>
        <p>Description: {{{ $chore->description }}}</p>
        <p>Difficulty: {{{ $chore->difficulty }}}</p>
        <p>{{ HTML::link("space/".$chore->space->id, '<< Back to home') }}</p>
    </div>
@stop