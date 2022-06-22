<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
        <link rel="stylesheet" href="{{ asset('css/FirstPage.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>HE Forum</title>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
    </head>

    <body>
        <div class="navbar">
            <div class="logo_container">
                <a href="/HE_Forum"><img src="{{ asset('images/logo.png') }}"></a>
            </div>
            
            <div class="nav_container">
                <a href="{{ route('login') }}"><button type="button" class="loginbtn">Log In</button></a>
                <a href="{{ route('register') }}"><button type="button" class="signupbtn">Register</button></a>
            </div>
        </div>

        @yield('content')

    </body>
</html>