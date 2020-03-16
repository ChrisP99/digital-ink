@extends('base')

@section('additionalHeadInfo')
    <title>Home | Digital Ink.</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
@endsection

@section ('content')

        <form action="{{url('post-login')}}" method="POST">
            {{ csrf_field() }}
            <div class="signup-signin-form">
                <label for="email"><b>Email</b></label>
                <input type="text" id="inputEmail" placeholder="Enter Email" name="email">

                @if ($errors->has('email'))
                    <small class="error">{{ $errors->first('email') }}</small>
                @endif

                <label for="password"><b>Password</b></label>
                <input type="password" id="inputPassword" placeholder="Enter Password" name="password">

                @if ($errors->has('password'))
                    <small class="error">{{ $errors->first('password') }}</small>
                @endif

                <button type="submit">Login</button>
                <p style="text-align:right"><a>Don't have an account already? Why not sign up?</a></p>
                <label>
                    <input type="checkbox" checked="checked" name="remember" value="1"> Remember me
                </label>
            </div>
        </form>


    <form action="{{url('post-registration')}}" method="POST" style="border:1px solid #ccc">
        {{ csrf_field() }}
        <div class="signup-signin-form">
            <h1>Sign Up</h1>

            <label for="name"><b>Name</b></label>
            <input type="text" id="inputName" placeholder="Enter Name" name="name">

            @if ($errors->has('name'))
                <small class="error">{{ $errors->first('name') }}</small>
            @endif

            <label for="email"><b>Email</b></label>
            <input type="text" id="inputEmail" placeholder="Enter Email" name="email">

            @if ($errors->has('email'))
                <small class="error">{{ $errors->first('email') }}</small>
            @endif

            <label for="password"><b>Password</b></label>
            <input type="password" id="inputPassword" placeholder="Enter Password" name="password">

            @if ($errors->has('password'))
                <small class="error">{{ $errors->first('password') }}</small>
            @endif

            <label for="password-repeat"><b>Repeat Password</b></label>
            <input type="password" id="inputPassword" placeholder="Repeat Password" name="password_confirmation">

            @if ($errors->has('password_confirm'))
                <small class="error">️{{$errors->first('password_confirm') }}</small>
            @endif

            <div class="clearfix">
                <button type="submit" >Sign Up</button>
            </div>
        </div>
    </form>


@endsection

