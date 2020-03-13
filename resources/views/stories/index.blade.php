@extends('base')

@section('additionalHeadInfo')
    <title>Index | Digital ink.</title>
@endsection

@section('content')
<div class="row">
<div class="col-sm-12">
        <h1 class="display-3">Contacts</h1>
    <table class="table table-striped">
        <thread>
            <tr>
                <td>id</td>
                <td>author_id</td>
                <td>title</td>
                <td>genre</td>
                <td>blurb</td>
                <td>content</td>
                <td>published</td>
            </tr>
        </thread>
        <tbody>
            @foreach($stories as $story)
            <tr>
                <td>{{$story->id}}</td>
                <td>{{$story->author_id}}</td>
                <td>{{$story->title}}</td>
                <td>{{$story->genre}}</td>
                <td>{{$story->blurb}}</td>
                <td>{{$story->content}}</td>
                <td>{{$story->published}}</td>
                <td>
                    <a href="{{ route('stories.edit',$story->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{ route('stories.destroy',$contact->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
<div>
</div>
@endsection
