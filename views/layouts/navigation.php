<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a aria-current="page" href="/"
                       class="nav-link <?= urlIs('/') ? 'active' : '' ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/notes"
                       class="nav-link <?= urlIs('/notes') ? 'active' : '' ?>">Notes</a>
                </li>
                <li class="nav-item">
                    <a href="/about"
                       class="nav-link <?= urlIs('/about') ? 'active' : '' ?>">About</a>
                </li>
                <li class="nav-item">
                    <a href="/contact"
                       class="nav-link <?= urlIs('/contact') ? 'active' : '' ?>">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <?php
                if ($_SESSION['user'] ?? false) : ?>
                    <li class="nav-item">
                        <form method="POST" action="/logout">
                            <input type="hidden" name="_method" value="DELETE"/>

                            <button class="btn btn-danger btn-sm">Log Out</button>
                        </form>
                    </li>
                <?php
                else : ?>
                    <li class="nav-item">
                        <a href="/login"
                           class="nav-link <?= urlIs('/login') ? 'active' : '' ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register"
                           class="nav-link <?= urlIs('/register') ? 'active' : '' ?>">Register</a>
                    </li>
                <?php
                endif; ?>
            </ul>
        </div>
    </div>
</nav>
