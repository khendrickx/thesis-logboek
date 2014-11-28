@extends('template')

@section('title')
    Login
@stop

@section('navbar')
@stop

@section('body')
	<div class="container">
		<div class="row" style="margin-top:20px">
		    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			    <h1>Login</h1>
			    {{ Form::open(array('action' => 'UsersController@store', 'class' => 'pure-form')) }}
			        <fieldset>
					<p>
						{{ $errors->first('email') }}
						{{ $errors->first('password') }}
					</p>
						<div class="form-group">
						{{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com','class'=>"form-control input-lg")) }}
						</div>
						<div class="form-group">
						{{ Form::password('password',array('class'=>"form-control input-lg")) }}
						</div>
						<p>
			            {{ Form::submit('Submit!',  array('class' => 'btn btn-lg btn-primary btn-block' )) }}
			            </p>
			        </fieldset>
				{{ Form::close() }}
				
			</div>
		</div>
	</div>
@stop