<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance - @yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="images/icon-finance.png">
</head>

<nav class="mainnav">
    <img src="images/logo finance.png" alt="logo" class="logo-img">
    <a class="nav-a" href="/">home</a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a class="nav-a" href="/login">login</a>

</nav>
<body class="@yield('bodyclass')">
    @yield('body')
    
</body>
</html>