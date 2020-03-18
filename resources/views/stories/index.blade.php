@extends('base')

@section('additionalHeadInfo')
    <title>Index | Digital ink.</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stories.css') }}">
@endsection

@section('content')

    <div>
        <div class="main-body">
            <h1 class = "form-heading">Stories</h1>
            <br>

        <table class="table">
            <thead>
                <tr>
                    <th>Author ID</th>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Blurb</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stories as $story)
                <tr class='clickable-row' onclick="window.location='stories/{{ $story->id }}';">
                    <td>{{$story->author_id}}</td>
                    <td>{{ $story->title }}</td>
                    <td>{{$story->genre}}</td>
                    <td>{{$story->blurb}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
