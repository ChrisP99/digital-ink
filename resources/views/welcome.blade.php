@extends('base')

@section('title')
    <title>Home | Digital Ink.</title>
@endsection

@section ('content')


    <div class="banner h-25">

    </div>

    <form action="{{url('post-login')}}" method="POST">
        {{ csrf_field() }}
        <div class="container">
            <label for="email"><b>Email</b></label>
            <input type="text" id="inputEmail" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" id="inputPassword" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>


    </form>

    <p> <br /> <br /> <br /> </p>

    <form action="{{url('post-registration')}}" method="POST" style="border:1px solid #ccc">
        {{ csrf_field() }}
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="name"><b>Name</b></label>
            <input type="text" id="inputName" placeholder="Enter Name" name="name" required>

            <label for="email"><b>Email</b></label>
            <input type="text" id="inputEmail" placeholder="Enter Email" name="email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" id="inputPassword" placeholder="Enter Password" name="password" required>

            <label for="password-repeat"><b>Repeat Password</b></label>
            <input type="password" id="inputPassword" placeholder="Repeat Password" name="password-repeat" required>

            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>

            <div class="clearfix">
                <button type="submit" >Sign Up</button>
            </div>
        </div>
    </form>


@endsection

