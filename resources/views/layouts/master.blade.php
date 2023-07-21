<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield('head')
</head>
<body>
<header>
    <p>this is my header</p>
</header>
<div id="main">
@yield('content')
</div>
<footer>
    <p>this is my footer</p>
</footer>
</body>
</html>
