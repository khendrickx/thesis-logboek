<!-- app/views/logboek.blade -->

@extends('template')

@section('title')
    Logboek: toevoegen
@stop

@section('pagetitle')
    Toevoegen
@stop

@section('body')
    {{ Form::open(array('action' => 'LogboekAdminController@store', 'class' => 'pure-form pure-form-stacked')) }}
        <fieldset class="pure-group">
            {{ $errors->first('datum') }}
            {{ Form::text('datum', Input::old('datum'), array('placeholder' => 'Datum YYYY-MM-DD HH:MM:SS')) }}

            {{ $errors->first('tijd') }}
            {{ Form::text('tijd', Input::old('tijd'), array('placeholder' => 'Tijdsduur HH:MM:SS')) }}
        </fieldset>
        <fieldset class="pure-group">
            {{ $errors->first('entrytype') }}
            {{ Form::select('entrytype', $types, Input::old('entrytype')) }}

            {{ $errors->first('omschrijving') }}
            {{ Form::textarea('omschrijving', Input::old('omschrijving'), array('placeholder' => 'Omschrijving')) }}

            {{ Form::submit('Opslaan', array('class' => 'pure-button pure-button-primary' )) }}
        </fieldset>
    {{ Form::close() }}
@stop