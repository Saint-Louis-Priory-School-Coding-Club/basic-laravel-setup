@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="text-center">
        <h1>Edit a Post</h1>
    </div>
    <div class="col-xs-8 col-xs-offset-2">
        <form class="form-horizontal" method="post" action="/Journal/public/edit/{{ $id->id }}">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $id->id }}">
            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                <input type="text" class="form-control" value="{{ $id->title }}" name="title" required>
                @if ($errors->has('title'))
                    <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                <textarea type="text" class="form-control" name="body" required>{{ $id->body }}</textarea>
                @if ($errors->has('body'))
                    <span class="help-block">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
                <a href="/Journal/public/posts/{{ $id->id }}" class="btn btn-primary">{{ $id->title }}</a>
            </div>
        </form>
    </div>
</div>
@endsection
