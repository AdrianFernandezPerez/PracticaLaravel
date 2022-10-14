<html lang="en">
<head>
    <title>@yield('title', 'Laravel')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

    <style>
        .active a {
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div id="app" class="d-flex flex-column h-screen justify-content-between">
    <header>
        @include('partials.nav')
        @include('partials.session-status')
    </header>
    <main class="py-4">
        @yield('content')
    </main>
    <footer class="bg-white text-center text-black-50 py-3 shadow">
        {{ config('app.name') }} | Copyright @ {{ date('Y') }}
    </footer>
</div>
<script src="{{asset('js/app.js')}}" defer></script>
</body>
</html>
