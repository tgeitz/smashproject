@extends('app')
@section('content')
    <h1>Add a New Tournament</h1>
    <hr/>

    {!! Form::open(['action' => 'TournamentsController@store']) !!}
    @include('tournaments.createForm', ['submitButtonText' => 'Add Tournament'])
    {!! Form::close() !!}

@stop