@extends('main')

@section('content')
    <div class="jumbotron margin-5">
        <h2 class="text-center main-color">
            <a href="{{ url('/ask') }}">Ask</a> us any questions. We will answer it!
        </h2>
        @if(!empty($lastQuestion))
            <h3 class="justified">
                <a href="{{ url('/question/'.$lastQuestion->id) }}">{{ $lastQuestion->title }}</a>
            </h3>
            <p class="text-right">{{ $lastQuestion->user->name }}</p>
        @endif
    </div>
@stop
