<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <header>
            <nav>
                <a href="/" class="site-title">Blog</a>
                <a href="/authors">Authors</a>
            </nav>
            <hr>
        </header>
    @yield('content')
        <footer>
            <hr>
            <p><small>Copyright &copy; {{ date('Y') }} All rights reserved</small></p>
        </footer>
    </div>
</body>
</html>
