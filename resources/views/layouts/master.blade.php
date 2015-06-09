<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Cat</title>
    
    <!-- import jquery code -->
    <script src="//code.jquery.com/jquery-1.11.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <div class="page-header">
            @yield('header')
        </div>
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success', '')}}
            </div>
        @endif
        @if(Session::has('error'))
            <div class="alert alert-warning has-error">
                {{Session::get('error', '')}}
            </div>
        @endif
        @yield('content')
    </div>
</body>
<footer class="footer center-block">
    <nav class="navbar navbar-default navbar-fixed-bottom center-block">
        <p class="pull-right"><a href="#">Top</a></p>
        <p><a href="mailto:shu@c-m.co.jp"> Contract to </p></a>
        <p>Copyright: Personal.&nbsp;&nbsp;<a href="/about">About</a></p>
    </nav>
    
</footer>
</html>