@extends('base')

@section('additionalHeadInfo')
    <title>Index | Digital ink.</title>
@endsection

@section('content')

    <div class="main-body">
        <!-- page title -->
        <div>
            <h1 class="story-header">Stories</h1>
        </div>

        <!-- search bar functionality -->
        <div class="col-md-6 search-bar">
            <form action="/search" method="get">
                <div class="input-group">
                    <!-- input field and button to activate search controller function -->
                    <input type="search" name="search" class="form-control" placeholder="Enter a title to search">
                    <span class="input-group-prepend">
                        <input type="submit" class="complete-button" value="Search">
                    </span>
                </div>
                <br/>
            </form>
            <br/>
        </div>
        <br/>

        @if($stories->isNotEmpty())

        <div>
            <!-- table to show the published stories list -->
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
                    <!-- for each statement to loop through each result returned from controller -->
                    @foreach($stories as $story)
                        <!-- when the row is clicked the user will be redirected to the show blade -->
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

        @else
            <div class="search-error">Oh no! None of our stories match your search! Please try again!</div>
        @endif

    </div>

@endsection
