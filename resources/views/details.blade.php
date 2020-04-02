@extends('base')

@section('additionalHeadInfo')
    <title>Account</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/account.css') }}">
@endsection

@section('content')

    <form id="account-update" method="post" action="{{ route('account.update', Auth()->user()->id) }}">
        <div class="account-update">
            @csrf
            @method('PATCH')
            <h2 class="account-h2">Update Account:</h2>
            <div class="form-group">
                <label for="name" class = "input-heading"><strong>Name:</strong></label>
                <input type="text" class="form-control" name="name" autocomplete="off" value="{{ Auth()->user()->name }}">

                <!-- error messages -->
                <span class="text-danger">{{ $errors->first('name') }}<br/></span>
            </div>

            <div class="form-group">
                <label for="email" class = "input-heading"><strong>Email:</strong></label>
                <input type="text" class="form-control" name="email" autocomplete="off" value="{{ Auth()->user()->email }}">

                <!-- error messages -->
                <span class="text-danger">{{ $errors->first('email') }}<br/></span>
            </div>

            <div class="main-button">
                <!-- form submit button - activates error messages -->
                <button type="submit" class="button complete-button">Update Account</button>
            </div>
        </div>
    </form>
@endsection
