<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Fahrzeug Arbeiten
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Fahrzeug Etiketten</a></li>
                        <li><a class="dropdown-item" href="#">Laufzettel KFZ Annahme</a></li>
                        <li><a class="dropdown-item" href="#">Fahrzeugdaten</a></li>
                        <li><a class="dropdown-item" href="#">Fahrzeug Bewertungen</a></li>
                        <li><a class="dropdown-item" href="#">Abfall/KFZ Ausgang</a></li>
                        <li><a class="dropdown-item" href="#">Betriebstagebuch</a></li>
                        <li><a class="dropdown-item" href="#">Störfall + Maßnahmen</a></li>
                        <li><a class="dropdown-item" href="#">TODO Liste</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Teile Verwaltung
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Demontageauftrag</a></li>
                        <li><a class="dropdown-item" href="#">Teile Erfassung</a></li>
                        <li><a class="dropdown-item" href="#">Teile Einlagerung</a></li>
                        <li><a class="dropdown-item" href="#">Teile Verkauf</a></li>
                        <li><a class="dropdown-item" href="#">Fahrzeug Bewegungen</a></li>
                        <li><a class="dropdown-item" href="#">Auswertungen</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        System Arbeiten
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Lagerplan</a></li>
                        <li><a class="dropdown-item" href="#">Lagerstamm</a></li>
                        <li><a class="dropdown-item" href="#">Inventur</a></li>
                        <li><a class="dropdown-item" href="#">Adressen</a></li>
                        <li><a class="dropdown-item" href="#">Grundlagen</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
