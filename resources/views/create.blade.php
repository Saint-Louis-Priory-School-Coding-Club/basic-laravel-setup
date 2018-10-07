@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="text-center">
        <h1>Create a Post</h1>
    </div>
    <div class="col-xs-8 col-xs-offset-2">
        <form class="form-horizontal" method="post" action="/Journal/public/create">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                <input type="text" class="form-control" placeholder="Your title" name="title" required autofocus>
                @if ($errors->has('title'))
                    <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                <textarea type="text" class="form-control" placeholder="The body of your post" name="body" required></textarea>
                @if ($errors->has('body'))
                    <span class="help-block">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Post">
            </div>
        </form>
    </div>
</div>

@endsection
