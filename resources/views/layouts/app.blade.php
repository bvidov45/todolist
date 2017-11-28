<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<title>Todo list</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"><link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('inc.navbar')
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>

    
    <footer id="footer" class="text-center">
        <p>Copyright &copy; 2017</p>
    </footer>

</body>
</html>