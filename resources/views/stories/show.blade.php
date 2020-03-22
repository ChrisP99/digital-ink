@extends('base')

@section('additionalHeadInfo')
    <title>Index | Digital ink.</title>
@endsection

@section('content')
    <div class="main-body">
    <h1 id="story-title">{{ $story->title }}</h1>
        <pre class="author">Written by: {{ $story->author_id }}     Genre: {{ $story->genre }}</pre>
        <p class="content-section">{{ $story->content }}</p>
        <div>
            <a class="btn btn-primary" href="/stories">Back</a>
        </div>
    </div>
    @endsection
