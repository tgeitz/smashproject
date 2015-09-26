@extends ('app')
@section('content')
    @foreach ($tournaments as $tournament)
    <article>
        <h2><a href="{{ url('/tournaments/index', $tournament->id) }}">{{ $tournament->title }}</a>
        </h2>
        <div class="body">
            <p>{{ $tournament->location }}</p>
        </div>
    </article>
    @endforeach
@stop