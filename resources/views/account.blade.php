@extends('base')


    @section('additionalHeadInfo')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <title>Digital Ink.</title>
    @endsection


@section('content')

<h1>Hello</h1>


    <div class="card">
        <div class="card-body">
            Welcome,{{ ucfirst(Auth()->user()->name) }}!
        </div>

        <div class="card-body">
            <a class="small" href="{{url('logout')}}">Logout</a>
        </div>
    </div>

@foreach($publishedStories as $publishedStory)
    <p>{{ $publishedStory->title }}</p>
@endforeach


@endsection

