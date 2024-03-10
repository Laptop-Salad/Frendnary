<header>
    <div class="logo">
        <a href="/" class="bold-text">Frendnary</a>
    </div>

    <nav id="defaultNav">
        <div class="links">
            <ul>
                <li><a href="/signin" class="bold-text">Sign In</a></li>
                <li><a href="/signup" class="p-btn">Start Now!</a></li>
            </ul>
        </div>

        <div id="mobileContent">
            <img src="{{ asset('images/hamburger.png') }}" alt="Hamburger icon" id="navOpen" role="button" aria-expanded="false"></img>
        </div>
    </nav>
</header>

<nav id="navToggledContent">
    <div id="hamburgerDiv">
        <div class="logo">
            <a href="#" class="bold-text">Frendnary</a>
        </div>

        <div class="hamburger-cross">
            <img src="{{ asset('images/hamburger-cross.png') }}" alt="Hamburger icon" id="navClose" role="button" aria-expanded="false"></img>
        </div>
    </div>

    <ul>
        <li><a href="/signin" class="bold-text">Sign In</a></li>
        <li><a href="/signup" class="p-btn">Start Now!</a></li>
    </ul>
</nav>