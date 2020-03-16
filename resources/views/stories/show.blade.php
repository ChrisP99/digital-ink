@extends('base')

@section('additionalHeadInfo')
    <title>Index | Digital ink.</title>
@endsection

@section('content')
    <div class="main-body">

    <h1>Story Details</h1>
    <div>
        <a href="/stories">Back</a>
    </div>

        <strong>Title:</strong>
        <p>{{ $story->title }}</p>
        <strong>Author:</strong>
        <p>{{ $story->author_id }}</p>
        <strong>Genre:</strong>
        <p>{{ $story->genre }}</p>
        <strong>Content:</strong>
        <p>{{ $story->content }}</p>

    </div>
    @endsection
