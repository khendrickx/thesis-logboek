<!-- app/views/logboek.blade -->

@extends('...template')

@section('title')
    {{ $_ENV['Owner'] }} - Logboek
@stop

@section('css')
    @parent
    {{ HTML::style('css/table.css') }}
@stop
@section('navbar')
    @if(Auth::check())
        @parent
    @endif
@stop
@section('pagetitle')
    {{ $_ENV['Owner'] }} - Logboek
@stop

@section('body')
    <table class="container">
        <thead>
            <tr>
                <th>Datum</th>
                <th>Tijdsduur</th>
                <th>Omschrijving</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
                @foreach( $entries as $entry)
                    <tr>
                         <td title=" {{ Carbon::createFromFormat('Y-m-d H:i:s', $entry->datum)->format('d-m-Y') }}">
                            {{ Carbon::createFromFormat('Y-m-d H:i:s', $entry->datum)->diffForHumans() }}
                        </td>
                        <td>{{ $entry->tijd }}</td>
                        <td>{{ nl2br($entry->omschrijving) }}</td>
                        <td>{{ $entry->entryType()->getResults()->naam }}</td>
                    </tr>
                @endforeach
                <tr>
                    <th>Totaal</th>
                    <th> {{ $logboek->totalTime() }}</th>
                </tr>
        </tbody>
    </table>
@stop