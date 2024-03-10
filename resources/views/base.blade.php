<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <!-- Base stylesheet -->
    @vite('resources/css/app.css')

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="/site.webmanifest">

    <title>Frendnary | @yield("title")</title>
</head>
<body>
    @guest
        @include("navbar")
    @endguest

    @auth
        @include("usernavbar")
    @endauth

    @yield("content")

    @if(Session::has("success"))
    <div id="msgSuccess" class="popup-message">
        <div class="banner success"></div>
        <div class="body">
            <p>{{ Session::get("success") }}</p>

            <div class="btns">
                <button class="g-btn btn-h-lg">Ok</button>
            </div>
        </div>
    </div>
    @endif

    @if(Session::has("error"))
    <div id="msgError" class="popup-message">
        <div class="banner error"></div>
        <div class="body">
            <p>{{ Session::get("error") }}</p>

            <div class="btns">
                <button class="g-btn btn-h-lg">Ok</button>
            </div>
        </div>
    </div>
    @endif

    @vite("resources/js/app.js")

</body>
</html>
