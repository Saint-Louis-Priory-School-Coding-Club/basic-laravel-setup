@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="panel panel-default col-lg-8 col-lg-offset-2">
            <div class="panel-heading">
                <h1>{{ $post->title }}</h1>
            </div>
            <div class="panel-body">
                <p class="pre">{{ $post->body }}</p>
                @if ($post->user->id == Auth::id())
                    <a href="/Journal/public/edit/{{ $post->id }}" class="btn btn-primary">Edit Post</a>
                @endif
            </div>
        </div>
    </div>

    <hr>

    <div class="col-lg-8 col-lg-offset-2">
    	<div class="panel-group">
            <h1>Comments</h1>
            @auth
            <hr>
            <div class="panel">
                <div class="panel-heading">
                    <h3>Comment Here</h3>
                </div>
                <div class="panel-body">
                    <form method="post" class="" action="/posts/{{ $post->id }}/comment">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" class="form-control" name="body" placeholder="Your comment here.">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Post Comment" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
            @endauth
            <hr>
        </div>
    </div>
@endsection
