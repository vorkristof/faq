@extends('main')

@section('content')
    @if($questions->isEmpty())
        <div class="jumbotron margin-5">
            <h2 class="text-center main-color">There is no question asked.</h2>
            <h3 class="text-center main-color"><a href="{{ url('/ask') }}">Ask</a> us any questions.</h3>
        </div>
    @else
        <div class="row main-color questions">
            @foreach($questions as $question)
                <a href="{{ $question->path() }}">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 btn justified">
                        <p>{{ $question->title }}</p>
                        <p class="light-color float-right">{{ count($question->answers) }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    @endif
@stop


