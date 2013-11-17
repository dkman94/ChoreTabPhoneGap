@extends('master')

@section('content')
    <h1>Login to your account</h1>
    <div class="content">
    	
		@if ( Session::get('message') )
            <p>{{ Session::get('message') }}</p>
        @endif

    	<p>Login below using your username and password.</p>

        <div class="horizontal-form">
        	{{ Form::open(array('url' => 'auth/login')) }}

                <div class="form-group">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email', Input::old('email')) }}
                </div>

                <div class="form-group">
                    {{ Form::label('password', 'Password:') }}
                    {{ Form::password('password') }}
                </div>  

                {{ Form::submit('Login') }}

        	{{ Form::close() }}
        </div>  

    </div>
@stop