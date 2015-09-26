@extends('app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <h1>{{ ucfirst($user->name) }}'s Profile</h1>
            <ul>
                <li>Member since: {{ $user->created_at }}</li>
            </ul>
        </div>
    </div>
@stop