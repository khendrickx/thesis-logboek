@extends('template')

@section('title')
    Login
@stop

@section('body')
    <h1>Login</h1>
    {{ Form::open(array('action' => 'UsersController@store', 'class' => 'pure-form')) }}
        <fieldset>
		<p>
			{{ $errors->first('email') }}
			{{ $errors->first('password') }}
		</p>

			{{ Form::label('email', 'Email Address') }}
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}

			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}

            {{ Form::submit('Submit!',  array('class' => 'pure-button pure-button-primary' )) }}
        </fieldset>
	{{ Form::close() }}
@stop