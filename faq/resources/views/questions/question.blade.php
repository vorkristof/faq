@extends('main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3 class="justified">
                {{ $question->title }}
            </h3>
            @if (Auth::check() && Auth::user()->id === $question->user_id)
                <a class="btn" href="{{ url('/question/'.$question->id.'/edit') }}">edit</a>
                <a class="btn" href="{{ url('/question/'.$question->id.'/delete') }}">delete</a>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 justified">
            <p>{{ $question->text }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>{{ $question->created_at }}<span class="float-right">{{ $question->user->name }}</span></p>
        </div>
    </div>
    <div class="row">
        @foreach($question->answers as $answer)
            <div class="col-md-12">
                <p>
                    {{ $answer->text }}
                    @if (Auth::check() && Auth::user()->id === $answer->user_id)
                        <span class="float-right">
                            <a href="{{ url('/question/'.$question->id.'/'.$answer->id.'/edit') }}">edit</a>
                            <a href="{{ url('/question/'.$question->id.'/'.$answer->id.'/delete') }}">delete</a>
                        </span>
                    @endif
                </p>
                <p>{{ $answer->created_at }}<span class="float-right">{{ $answer->user->name }}</span></p>
            </div>
        @endforeach
    </div>
    @if (Auth::check())
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="/question/{{ $question->id }}/answer">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Answer</label>
                        <textarea name="text" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn main-btn">Answer</button>
                    </div>
                </form>
            </div>
        </div>
    @endif
@stop


