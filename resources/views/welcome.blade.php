@extends('base')

@section('additionalHeadInfo')
    <title>Home | Digital Ink.</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
@endsection

@section ('content')

    <div class="main-body">
        @if ($errors->any())
            @if(strpos($errors, 'Oops') !==false)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div><br />
            @endif
        @endif

            <div class="col-sm-12">
            @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>


        <form action="{{url('post-login')}}" method="POST">
            {{ csrf_field() }}
            <div class="signup-signin-form">
                <label for="email"><b>Email</b></label>
                <input type="text" id="inputEmail" placeholder="Enter Email" name="email">

                @if ($errors->has('email'))
                    <small class="error">{{ $errors->first('email') }}</small><br/>
                @endif
                <br/>

                <label for="password"><b>Password</b></label>
                <input type="password" id="inputPassword" placeholder="Enter Password" name="password">

                @if ($errors->has('password'))
                    <small class="error">{{ $errors->first('password') }}</small><br/>
                @endif
                <br/>

                <button type="submit">Login</button>
                <p style="text-align:right"><a>Don't have an account already? Why not sign up?</a></p>
                <label>
                    <input type="checkbox" checked="checked" name="remember" value="1"> Remember me
                </label>
            </div>
        </form>

        <form action="{{url('post-registration')}}" method="POST">
            {{ csrf_field() }}
            <div class="signup-signin-form">
                <h1>Sign Up</h1>

                <label for="name"><b>Name</b></label>
                <input type="text" id="inputName" placeholder="Enter Name" name="name">

                @if ($errors->has('name'))
                    <small class="error">{{ $errors->first('name') }}</small><br/>
                @endif
                <br/>

                <label for="email"><b>Email</b></label>
                <input type="text" id="inputEmail" placeholder="Enter Email" name="email">

                @if ($errors->has('email'))
                    <small class="error">{{ $errors->first('email') }}</small><br/>
                @endif
                <br/>

                <label for="password"><b>Password</b></label>
                <input type="password" id="inputPassword" placeholder="Enter Password" name="password">

                @if ($errors->has('password'))
                    <small class="error">{{ $errors->first('password') }}</small><br/>
                @endif
                <br/>

                <label for="password-repeat"><b>Repeat Password</b></label>
                <input type="password" id="inputPassword" placeholder="Repeat Password" name="password_confirmation">

                @if ($errors->has('password_confirm'))
                    <small class="error">️{{$errors->first('password_confirm') }}</small><br/>
                @endif
                <br/>

                <div class="clearfix">
                    <button type="submit" >Sign Up</button>
                </div>
            </div>
        </form>
    </div>


@endsection

