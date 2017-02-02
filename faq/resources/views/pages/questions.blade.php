@extends('main')

@section('content')
    @if($questions->isEmpty())
        <div class="jumbotron margin-5">
            <h2 class="text-center main-color">There is no question asked.</h2>
            <h3 class="text-center main-color"><a href="{{ url('/ask') }}">Ask</a> us any questions.</h3>
        </div>
    @else
        @foreach($questions as $question)
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <a href="{{ $question->path() }}" class="btn">
                        <p class="justified">{{ $question->title }}</p>
                        <p class="light-color float-right">{{ count($question->answers) }}</p>
                    </a>
                </div>
            </div>
        @endforeach
    @endif
@stop


