@extends('main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="/question/{{ $question->id }}">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <div class="form-group">
                    <span>Do you want to delete this question?</span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn main-btn">Delete</button>
                    <button type="button" class="btn main-btn" onClick="history.go(-1);return true;">Back</button>
                </div>
            </form>
        </div>
    </div>
@stop