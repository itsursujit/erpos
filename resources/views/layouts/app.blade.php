<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <title>Document 123</title>
</head>
<body>
    <div id="app">
        <example-component></example-component>
    </div>
    @yield('content')
<script src="{{mix('/js/app.js')}}"></script>
</body>
</html>