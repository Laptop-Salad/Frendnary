@extends("base")

@section("title", "Sign Up")

@section("content")
<main id="signup" class="centered">
    <h1>Sign Up</h1>
    <form action="/signup" method="POST">
        @csrf
        
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <p id="userAvail">Username is not available ❌</p>
            <p id="userCharMin">Does not have 3 or more characters ❌</p>
            <p id="userCharMax">Is more than 36 characters ❌</p>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <p id="passCapital">Does not have a capital letter ❌</p>
            <p id="passNum">Does not have a number ❌</p>
            <p id="passSpecial">Does not have a special character ❌</p>
            <p id="passCharMin">Does not have 8 or more characters ❌</p>
            <p id="passCharMax">Is more than 24 characters ❌</p>
        </div>

        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
            <p id="passMatch">Passwords do not match ❌</p>
        </div>

        <div class="centered">
            <input id="submit" class="p-btn" type="submit" value="Create Account" disabled>
        </div>
    </form>
</main>

@vite("resources/js/signup.js")

@stop
