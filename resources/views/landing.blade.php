@extends("base")

@section("title", "Landing")

@section("content")
    <main class="landing centered">
        <h1>Frendnary</h1>
        <p>Frendnary brings the memories and lore of friend groups into their 
            own central and collaborative private dictionary.</p>

        @guest
        <a href="/signup" class="p-btn btn-lg">Start Now!</a>
        @endguest

        @auth
        <a href="/dashboard" class="p-btn btn-lg">Dashboard</a>
        @endauth
    </main>
@stop