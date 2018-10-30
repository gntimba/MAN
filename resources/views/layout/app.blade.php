<!doctype html>
<html lang="{{config('app.locale')}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Comaptible" content="IE=edge">
    <meta name="viewport" content="Width=device-width,initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <title>{{config('app.name','Hview')}}</title>
</head>
<body>
    @include('include.navbar')
    <div class="container">
    @yield('content')
    </div>
</body>
</html>
