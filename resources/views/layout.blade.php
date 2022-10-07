<!<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
</head>
<body>
<nav>
    <ul>
        <li>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/portfolio">Portfolio</a>
            <a href="/contact">Contact</a>

        </li>
    </ul>
</nav>
@yield('content')
</body>
</html>
