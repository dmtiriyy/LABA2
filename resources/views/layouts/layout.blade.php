<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>         
    <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6c2c37fab8.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <div id="logo"><a href="{{url('home')}}">Сайт</a></div>
    <div class="header nav">
        <a href="{{url('home')}}">Дім</a>
        <a href="{{url('about')}}">Інфо</a>
    </div>
    <div class="header auth">
        @if(isset(Auth::user()->email))
            <a href="">Аккаунт</a>
            <a href="{{url('logout')}}">Вийти</a>
        @else
            <a href="{{url('register')}}">Реєстрація</a>
            <a href="{{url('login')}}">Ввійти</a>
        @endif
    </div>
</header>
<main>
    <div class="container">

        @if ($message = Session::get('msg'))
            <div class="flash success">
                <p>{{ $message }}</p>
            </div>
        @endif

        @yield('content')
    </div>
   
</main>
<footer>
    <a href="{{url('/')}}">Дім</a>
    <a href="{{url('about')}}">Інфо</a>
    @if(isset(Auth::user()->email))
        <a href="">Аккаунт</a>
        <a href="{{url('logout')}}">Вийти</a>
    @else
        <a href="{{url('register')}}">Реєстрація</a>
        <a href="{{url('login')}}">Ввійти</a>
    @endif
</footer>
</body>
</html>