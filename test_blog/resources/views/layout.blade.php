<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="/js/app.js" defer></script>
</head>
<body>
    <header>
        @include('header')
    </header>
    <br>
    <div class="container">
        @yield('content')
    </div>
    <footer class="footer bg-dark  fixed-bottom">
        @include('footer')

    </footer>
</body>
</html>