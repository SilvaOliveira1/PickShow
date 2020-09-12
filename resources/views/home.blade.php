<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pickshow</title>
    <link rel="stylesheet" href="{{ asset('site/css/bootstrap.css') }}">
</head>
<body>

@yield('content', View::make('site.barra'))
<script src="{{ asset('site/js/jquery.js') }}"></script>
<script src="{{ asset('site/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
