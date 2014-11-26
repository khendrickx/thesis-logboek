<!-- app/views/password.remind.blade -->

@extends('...template')

@section('title')
    Wachtwoord vergeten
@stop

@section('body')
    <form action="{{ action('RemindersController@postRemind') }}" method="POST">
        <input type="email" name="email">
        <input type="submit" value="Send Reminder">
    </form>
@stop