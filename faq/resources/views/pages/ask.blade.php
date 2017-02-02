@extends('main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="/ask">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label>Question</label>
                    <textarea name="text" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn main-btn">Ask</button>
                </div>
            </form>
        </div>
    </div>
@stop


