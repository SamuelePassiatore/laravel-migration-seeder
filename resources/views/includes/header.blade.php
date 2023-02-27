<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-brand">Trains</div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link @if (request()->routeIs('home')) active @endif"
                            href="{{ url('/') }}">Home
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
