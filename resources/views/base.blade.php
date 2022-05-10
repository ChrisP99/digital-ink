<!DOCTYPE html>

<html lang = "en">

<head>

    <!-- meta elements -->

    <meta charset="UTF-8">
    <meta name="description" content="online book publishing">
    <meta name="keywords" content="book,author,reader">
    <meta name="author" content="Team 41">

    <!-- viewport -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- additional head information relative to page to be added -->

@yield('additionalHeadInfo')

<!-- styling -->

    <link rel="icon" href="{{'https://group4-digital-ink-s3.s3.amazonaws.com/digital-ink-logo.png'}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    <!-- additional head information relative to page to be added -->

@yield('additionalHeadInfo')
</head>

<body>
<!-- page header -->

    <header>
        <div class = "container">
            <div class = "row">
                <!-- stories page link -->
                <div class = "col header-option">
                    <a href="/stories" class = "header-option">Stories</a>
                </div>

                <div class = "col header-option">
                    <a href="/stories/create" class = "header-option">Create</a>
                </div>

                <!-- homepage link / logo -->
                <div class = "col header-option">
                    <a href="/">
                        <img class="logo" alt = "Digital Ink logo" src = "{{ asset('images/digital-ink-logo.png') }}" align="middle"></a>
                </div>

                <div class = "col header-option">
                    <a href="/about" class = "header-option">About</a>
                </div>

                @isset(Auth()->user()->name)
                    <!-- profile page link -->
                    <div class = "col header-option">
                        <a href="/account" class = "header-option">{{ ucfirst(Auth()->user()->name) }}</a>
                    </div>
                @else
                        <div class = "col header-option">
                            <a href="/account" class = "header-option">Account</a>
                        </div>
                @endisset
            </div>
        </div>
    </header>

    <!-- additional page content to be added -->

@yield ('content')

<!-- page footer -->

    <footer>
        <div class = "container">
            <div class = "row">
                <!-- link to about page -->
                <div class = "col footer-option">
                    <a href="/about">About</a>
                </div>

                <!-- link to contact page -->
                <div class = "col footer-option">
                    <a href="/contact">Get In Touch</a>
                </div>

                <!-- link to social media pages -->
                <div class = "col footer-option">
                    <!-- Facebook -->
                    <a href = "https://facebook.com" target = "_blank">
                        <img class = "socialmedia" alt = "Facebook logo" src = "{{'https://group4-digital-ink-s3.s3.amazonaws.com/facebook.png'}}">
                    </a>

                    <!-- Twitter -->
                    <a href = "https://twitter.com" target = "_blank">
                        <img class = "socialmedia" alt = "Twitter logo" src = "{{ 'https://group4-digital-ink-s3.s3.amazonaws.com/twitter.png' }}">
                    </a>

                    <!-- Instagram -->
                    <a href = "https://instagram.com" target = "_blank">
                        <img class = "socialmedia" alt = "Instagram logo" src = "{{ 'https://group4-digital-ink-s3.s3.amazonaws.com/instagram.png' }}">
                    </a>

                    <!-- Pinterest -->
                    <a href = "https://pintrest.com" target = "_blank">
                        <img class = "socialmedia" alt = "Pinterest logo" src = "{{ 'https://group4-digital-ink-s3.s3.amazonaws.com/pinterest.png' }}">
                    </a>
                </div>
            </div>


        <!-- copyright message -->
        <p class = "copyright">© Digital Ink. 2020 - 2022</p>
        </div>

    </footer>

    @yield('validation')

</body>

</html>
