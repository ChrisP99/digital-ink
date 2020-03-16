@extends('base')

@section('additionalHeadInfo')
    <title>Index | Digital ink.</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/show.css') }}">
@endsection

@section('content')
    <div class="main-body">
    <h1>{{ $story->title }}</h1>
        <pre class="author">Written by: {{ $story->author_id }}     Genre: {{ $story->genre }}</pre>
        <p class="content-section">{{ $story->content }}</p>
        <div>
            <a class="btn btn-primary" href="/stories">Back</a>
        </div>
    </div>
    @endsection
