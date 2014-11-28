<!-- app/views/password.remind.blade -->

@extends('...template')

@section('title')
    Wachtwoord reset
@stop
@section('pagetitle')
	Wachtwoord vergeten
@stop
@section('body')
	<div class="container">
			<div class="row" style="margin-top:20px">
			    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				    <form action="{{ action('RemindersController@postReset') }}" method="POST">
				        <input type="hidden" name="token" value="{{ $token }}">
				        <input type="email" name="email" placeholder="awesome@awesome.com" class="form-control input-lg">
				        <input type="password" name="password" class="form-control input-lg" placeholder="password">
				        <input type="password" name="password_confirmation" class="form-control input-lg" placeholder="retype password">
				        <input type="submit" value="Reset Password" class='btn btn-lg btn-primary btn-block'>
				    </form>
				</div>
			</div>
		</div>
@stop