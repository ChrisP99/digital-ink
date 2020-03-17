@extends('base')

@section('additionalHeadInfo')
    <title>Account</title>
@endsection

@section('content')

    <div class="main-body">
        <!-- show welcome message to the user - include their name -->
        <h1 class="account-element">Hi {{ ucfirst(Auth()->user()->name) }}!</h1>
        <br/>

        <!-- published stories section - only show if user has at least one story published -->
        @if(count($publishedStories) >= 1)
            <div class="account-information">
                <h2>Your published stories</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Genre</th>
                            <th colspan = 2>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($publishedStories as $publishedStory)
                        <tr>
                            <td>{{$publishedStory->title}}</td>
                            <td>{{$publishedStory->genre}}</td>
                            <td>
                                <a href="{{ route('stories.edit',$publishedStory->id)}}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('stories.destroy', $publishedStory->id)}}" method="post">
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
        @endif
        <br/>

        <!-- drafts section - only show if user has at least one draft saved -->
        @if(count($draftStories) >= 1)
            <div class="account-information">
                <h2>Your drafts</h2>
                <table>
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Genre</th>
                        <th colspan = 2>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach($draftStories as $draftStory)
                        <tr>
                            <td>{{$draftStory->title}}</td>
                            <td>{{$draftStory->genre}}</td>
                            <td>
                                <a href="{{ route('stories.edit',$draftStory->id)}}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('stories.destroy', $draftStory->id)}}" method="post">
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
        @endif
        <br/>

        <!-- logout button -->
        <div class="account-element">
            <input type="button" class="button-small logout-button" onclick="window.location.href='{{url('logout')}}'" value="Logout">
        </div>

    </div>

@endsection

