@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="text-center">
        <h1>Welcome</h1>
    </div>

    <div class="panel-group col-lg-8 col-lg-offset-2">
        @foreach(Auth::user()->posts as $post)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><a href="/Journal/public/posts/{{ $post->id }}">{{ $post->title }}</a></h1>
                </div>
            </div>
        @endforeach
    </div>

</div>


@endsection
