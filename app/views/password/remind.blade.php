<!-- app/views/password.remind.blade -->

@extends('...template')

@section('title')
    Wachtwoord vergeten
@stop
@section('pagetitle')
	Wachtwoord vergeten
@stop
@section('body')
		<div class="container">
			<div class="row" style="margin-top:20px">
			    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				    <form action="{{ action('RemindersController@postRemind') }}" method="POST">
				        <input type="email" name="email" placeholder="awesome@awesome.com" class="form-control input-lg">
				        <br>
				        <input type="submit" value="Send Reminder" class="btn btn-lg btn-primary btn-block">
				    </form>
				</div>
			</div>
		</div>
@stop