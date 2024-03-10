@extends("base")

@section("title", "Sign In")

@section("content")
<main id="signin" class="centered">
    <h1>Sign In</h1>
    <form action="/signin" method="POST">
        @csrf
        
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <div class="centered">
            <input id="submit" class="p-btn" type="submit" value="Sign In" disabled>
        </div>    
    </form>
</main>

@vite("resources/js/signin.js")

@stop
