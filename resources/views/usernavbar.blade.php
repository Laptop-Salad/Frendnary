<header>
    <div class="logo">
        <a href="/" class="bold-text">Frendnary</a>
    </div>

    <nav id="defaultNav">
        <div class="links">
            <ul>
                <li><a href="/newgroup" class="p-btn">Create New Friend Group</a></li>
                <li><a href="/logout" class="r-btn">Log out</a></li>
                <li><a href="/dashboard" class="y-btn">Me</a></li>
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
        <li><a href="/newgroup" class="p-btn">Create New Friend Group</a></li>
        <li><a href="/logout" class="r-btn">Log out</a></li>
        <li><a href="/dashboard" class="y-btn">Me</a></li>
    </ul>
</nav>

@vite("resources/js/app.js")
