@extends('base')

@section('additionalHeadInfo')
    <title>Index | Digital ink.</title>
@endsection

@section('content')

    <div>
        <div class="main-body">
            <h1 class = "form-heading">Stories</h1>
            <br>

            <div >
                <table class="table">
                    <thead>
                        <tr>
                            <th class="headerStories">Author ID</th>
                            <th class="headerStories">Title</th>
                            <th class="headerStories">Genre</th>
                            <th class="headerStories">Blurb</th>
                        </tr>
                    </thead>
                    <tbody class="tableStories">
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
    </div>

@endsection
