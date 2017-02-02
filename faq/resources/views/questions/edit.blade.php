@extends('main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="/question/{{ $question->id }}">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="title" class="form-control" required>{{ $question->title }}</textarea>
                </div>
                <div class="form-group">
                    <textarea name="text" class="form-control" required>{{ $question->text }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn main-btn">Edit</button>
                    <button type="button" class="btn main-btn" onClick="history.go(-1);return true;">Back</button>
                </div>
            </form>
        </div>
    </div>
@stop


