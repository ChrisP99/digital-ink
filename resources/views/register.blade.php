<!DOCTYPE html>
<html lang = "en">

<head>
    @yield('title')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <title>Digital Ink.</title>
</head>
<h1>Hello</h1>
@yield ('content')

<header class="masthead">
    <div class="banner h-25">

    </div>
    <div class="login">
        <h2>Register.</h2>
        <div class="login-form">
            <form action="{{url('post-registration')}}" method="POST" id="regForm">
                {{ csrf_field() }}
                <label>Name:
                    <input type="text" id="inputName" name="name" placeholder="Name">
                </label>

                @if ($errors->has('name'))
                    <span class="error">{{ $errors->first('name') }}</span>
                @endif

                <label>Email:
                    <input type="email" id="inputEmail" name="email" placeholder="Email">
                </label>

                @if ($errors->has('email'))
                    <span class="error">{{ $errors->first('email') }}</span>
                @endif

                <label>Password:
                    <input type="password" id="inputPassword" name="password" placeholder="Password">
                </label>

                @if ($errors->has('password'))
                    <span class="error">{{ $errors->first('password') }}</span>
                @endif

                <button type="submit">Login</button>
                <a href="{{url('/')}}">Login</a>
            </form>
        </div>
    </div>
</header>

<footer>
    <div class="container">
        <div class="row">
            <div class="col footer-option">
                About
            </div>
            <div class="col footer-option">
                Get In Touch
            </div>
            <div class="col footer-option">
                <a href="https://facebook.com" target = "_blank">
                    <img class = "socialmedia" alt = "facebook logo" src="images/facebook.png">
                </a>
                <a href="https://twitter.com" target = "_blank">
                    <img class = "socialmedia" alt = "twitter logo" src="images/twitter.png">
                </a>
                <a href="https://instagram.com" target = "_blank">
                    <img class="socialmedia" alt = "instagram logo" src="images/instagram.png">
                </a>
                <a href="https://pintrest.com" target = "_blank">
                    <img class="socialmedia" alt = "pinterest logo" src="images/pinterest.png">
                </a>
            </div>
        </div>
        <p class="copyright">© Digital Ink. 2020</p>
    </div>
</footer>
</html>
