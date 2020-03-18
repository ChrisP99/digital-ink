@extends('base')

@section('additionalHeadInfo')
    <title>Account</title>
@endsection

@section('content')

    <div class="main-body">
        <!-- show welcome message to the user - include their name -->
        <h1 class="center-element">Hi {{ ucfirst(Auth()->user()->name) }}!</h1>
        <br/>

        <!-- success message from uploading or deleting story -->
        <div class="col-sm-12">
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>
        <br/>

        <!-- published stories section - only show if user has at least one story published -->
        @if(count($publishedStories) >= 1)
            <div class="account-information">
                <h2 class="account-h2">Here are your published stories:</h2>
                <table>
                    <thead>
                        <tr>
                            <th class="headerAccount">Title</th>
                            <th class="headerAccount">Genre</th>
                            <th class="headerAccount" colspan = 2>Actions</th>
                        </tr>
                    </thead>

                    <tbody class="tableAccount">
                        @foreach($publishedStories as $publishedStory)
                        <tr>
                            <td>{{$publishedStory->title}}</td>
                            <td>{{$publishedStory->genre}}</td>
                            <td>
                                <input type="button" onclick="window.location.href='{{ route('stories.edit',$publishedStory->id)}}'" class="button-small edit-button" value="Edit">
                            </td>
                            <td>
                                <form action="{{ route('stories.destroy', $publishedStory->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button-small delete-button" type="submit">Delete</button>
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

                    <tbody class="tableAccount">
                        @foreach($draftStories as $draftStory)
                        <tr>
                            <td>{{$draftStory->title}}</td>
                            <td>{{$draftStory->genre}}</td>
                            <td>
                                <input type="button" onclick="window.location.href='{{ route('stories.edit',$draftStory->id)}}'" class="button-small edit-button" value="Edit">
                            </td>
                            <td>
                                <form action="{{ route('stories.destroy', $draftStory->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input class="button-small delete-button" type="submit" value="Delete">
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
        <div class="center-element">
            <input type="button" class="button-small logout-button" onclick="window.location.href='{{url('logout')}}'" value="Logout">
        </div>

    </div>

@endsection

