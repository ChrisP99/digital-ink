@extends('base')

@section('additionalHeadInfo')
    <title>Index | Digital ink.</title>
@endsection

@section('content')
<div>
<div class="col-sm-12">
        <h1 class="display-3">Stories</h1>
    <table class="table table-striped">
        <thread>
            <tr>
                <td>Story ID</td>
                <td>Author ID</td>
                <td>Title</td>
                <td>Genre</td>
                <td>Blurb</td>
                <td>Content</td>
                <td>Published</td>
            </tr>
        </thread>
        <tbody>
            @foreach($stories as $story)
            <tr>
                <td>{{$story->id}}</td>
                <td>{{$story->author_id}}</td>
                <td><a href = "stories/{{ $story->id }}">{{ $story->title }}</a></td>
                <td>{{$story->genre}}</td>
                <td>{{$story->blurb}}</td>
                <td>{{$story->content}}</td>
                <td>{{$story->published}}</td>
                <td>
                    <a href="{{ route('stories.edit',$story->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{ route('stories.destroy',$story->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
