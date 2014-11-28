<!-- app/views/logboek.blade -->

@extends('template')

@section('title')
    Logboek: toevoegen
@stop

@section('pagetitle')
    Toevoegen
@stop

@section('body')
    <div class="container">
        <div class="row" style="margin-top:20px">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                {{ Form::open(array('action' => 'LogboekAdminController@store', 'class' => 'pure-form pure-form-stacked')) }}
                    <fieldset class="pure-group">
                        {{ $errors->first('datum') }}
                        <div class="form-group">
                        {{ Form::text('datum', Input::old('datum'), array('placeholder' => 'Datum YYYY-MM-DD HH:MM:SS','class'=>"form-control input-lg")) }}
                        </div>
                        {{ $errors->first('tijd') }}
                        <div class="form-group">
                        {{ Form::text('tijd', Input::old('tijd'), array('placeholder' => 'Tijdsduur HH:MM:SS','class'=>"form-control input-lg")) }}
                        </div>
                    </fieldset>
                    <fieldset class="pure-group">
                        {{ $errors->first('entrytype') }}
                        <div class="form-group">
                        {{ Form::select('entrytype', $types, Input::old('entrytype'),array('class'=>"form-control input-lg")) }}
                        </div>
                        {{ $errors->first('omschrijving') }}
                        <div class="form-group">
                        {{ Form::textarea('omschrijving', Input::old('omschrijving'), array('placeholder' => 'Omschrijving','class'=>"form-control input-lg")) }}
                        </div>
                        {{ Form::submit('Opslaan', array('class'=>'btn btn-lg btn-primary btn-block')) }}
                    </fieldset>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop