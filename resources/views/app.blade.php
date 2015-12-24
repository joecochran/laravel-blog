<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
    .site-title {
        font-weight: bold;
        display: block;
        font-size: 2.5em;
    }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <a href="/" class="site-title">Blog</a>
        </header>
    @yield('content')
        <footer>
            <p><small>Copyright &copy; {{ date('Y') }} All rights reserved</small></p>
        </footer>
    </div>
</body>
</html>
