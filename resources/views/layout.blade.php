<html lang="en">
<head>
    <title>@yield('title')</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

    <style>
        .active a {
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>
@include('partials.nav')
@include('partials.session-status')
@yield('content')
<script src="{{asset('js/app.js')}}" defer></script>
</body>
</html>
