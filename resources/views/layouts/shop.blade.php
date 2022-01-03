<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My portfolio</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('/css/slick.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('/css/slick-theme.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('/css/nouislider.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('/css/style.css')}}"/>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
<header>
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-right">
                <li><a href="{{route('register')}}"><i class="fa fa-user-o"></i>Registration</a></li>
                <li><a href="{{route('login')}}"><i class="fa fa-user-o"></i>Login</a></li>
            </ul>
        </div>
    </div>
</header>
@yield('content')
<footer id="footer">
</footer>
<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/slick.min.js')}}"></script>
<script src="{{asset('/js/nouislider.min.js')}}"></script>
<script src="{{asset('/js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('/js/main.js')}}"></script>
</body>
</html>

