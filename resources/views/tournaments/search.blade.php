@extends('app')
@section('content')
    <h1>Search for tournaments</h1>
    {!! Form::open(['action' => 'TournamentsController@basicSearch']) !!}
    @include ('tournaments.basicSearchForm', ['submitButtonText' => 'Add Tournament'])
    {!! Form::close() !!}
@stop