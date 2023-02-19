<div class="sidebar" id="side_nav">
    <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between align-items-center">
        <h1 class="fs-4"><span class="bg-white text-dark rounded shadow px-2 me-2"><em class="fa-solid fa-box-open"></em></span> <span class="text-white">{{ config('app.name') }}</span></h1>
        <button class="btn d-lg-none d-block close-btn px-1 py-0 text-white"><em class="fa-solid fa-bars-staggered"></em></button>
    </div>
    <ul class="list-unstyled px-2">
        <li class="side-one my-2 {{ Request::is('/') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="text-decoration-none px-3 py-2 d-block">
                <em class="fa-solid fa-home"></em> Übersicht
            </a>
        </li>
        <li class="side-one my-2 {{ Request::is('/backend/kunden') ? 'active' : '' }}">
            <a href="{{ route('backend.kunden.index') }}" class="text-decoration-none px-3 py-2 d-block">
                <em class="fa-solid fa-users"></em> Kunden
            </a>
        </li>
        <li class="side-one my-2 {{ Request::is('backend/fahrzeugdaten*') ? 'active' : '' }}">
            <a href="{{ route('backend.fahrzeugdaten.index') }}" class="text-decoration-none px-3 py-2 d-block">
                <em class="fa-solid fa-car"></em> Fahrzeuge
            </a>
        </li>
        <li class="side-one my-2 {{ Request::is('/backend/kalender') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="text-decoration-none px-3 py-2 d-block">
                <em class="fa-solid fa-calendar-days"></em> Kalender
            </a>
        </li>
        <li class="side-one my-2 {{ Request::is('/backend/angebote') ? 'active' : '' }}">
            <a href="{{ route('backend.angebote.index') }}" class="text-decoration-none px-3 py-2 d-block">
                <em class="fa-solid fa-hand-holding"></em> Angebote
            </a>
        </li>
        {{--<li class="side-one my-2 {{ Request::is('/backend/auftraege') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="text-decoration-none px-3 py-2 d-block">
                <em class="fa-solid fa-wrench"></em> Aufträge
            </a>
        </li>--}}
        {{--<li class="side-one my-2 {{ Request::is('/backend/rechnungen') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="text-decoration-none px-3 py-2 d-block">
                <em class="fa-solid fa-file-invoice"></em> Rechnungen
            </a>
        </li>--}}
        {{--<li class="side-one my-2 {{ Request::is('/backend/kassenbuch') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="text-decoration-none px-3 py-2 d-block">
                <em class="fa-solid fa-book-open"></em> Kassenbuch
            </a>
        </li>--}}
        {{--<li class="side-one my-2 {{ Request::is('/backend/positionen') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="text-decoration-none px-3 py-2 d-block">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="zk_z0" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M2.53 19.65l1.34.56v-9.03l-2.43 5.86c-.41 1.02.08 2.19 1.09 2.61zm19.5-3.7L17.07 3.98a2.013 2.013 0 00-1.81-1.23c-.26 0-.53.04-.79.15L7.1 5.95a1.999 1.999 0 00-1.08 2.6l4.96 11.97a1.998 1.998 0 002.6 1.08l7.36-3.05a1.994 1.994 0 001.09-2.6zM7.88 8.75c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-2 11c0 1.1.9 2 2 2h1.45l-3.45-8.34v6.34z"></path></svg>
                Positionen
            </a>
        </li>--}}
        {{--<li class="side-one my-2 {{ Request::is('/backend/berichte') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="text-decoration-none px-3 py-2 d-block">
                <em class="fa-solid fa-chart-simple"></em> Berichte
            </a>
        </li>--}}
        {{--<li class="side-one my-2 {{ Request::is('/backend/emails') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="text-decoration-none px-3 py-2 d-block">
                <em class="fa-solid fa-envelope"></em> gesendete E-Mails
            </a>
        </li>--}}
        {{--<li class="side-one my-2 {{ Request::is('/backend/papierkorb') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="text-decoration-none px-3 py-2 d-block">
                <em class="fa-solid fa-trash"></em> Papierkorb
            </a>
        </li>--}}
        <!-- abfrage admin -->
        <li class="side_coll my-2 toggler">
            <a class="text-decoration-none px-3 py-2 d-block collapsed {{ Request::is('backend/intern/*') ? 'active' : '' }}" data-bs-toggle="collapse" data-bs-target="#intern" aria-expanded="false">
                <em class="fa-solid {{ Request::is('backend/intern/*') ? 'fa-angle-down' : 'fa-angle-right' }}">&nbsp;</em> Intern
            </a>
            <div class="collapse {{ Request::is('backend/intern/*') ? 'show' : '' }}" id="intern">
                <ul class="toggle-nav list-unstyled fw-normal px-4 pb-1 small lh-1">
                    <li class="my-2"><a href="{{ route('backend.intern.hersteller.index') }}" class="link-light text-decoration-none px-3 py-2 d-block rounded {{ Request::is('backend/intern/hersteller') ? 'active' : '' }}">Hersteller</a></li>
                    <li class="my-2"><a href="{{ route('backend.intern.modell.index') }}" class="link-light text-decoration-none px-3 py-2 d-block rounded {{ Request::is('backend/intern/modell') ? 'active' : '' }}">Modell</a></li>
                    <li class="my-2"><a href="{{ route('backend.intern.fahrzeuge.index') }}" class="link-light text-decoration-none px-3 py-2 d-block rounded {{ Request::is('backend/intern/fahrzeuge') ? 'active' : '' }}">Fahrzeuge</a></li>
                </ul>
            </div>
        </li>
        <!-- abfrage admin end -->
    </ul>
    <hr class="h-color mx-2">
    <ul class="list-unstyled px-2">
        <li class="side-one my-2">
            <a href="" class="text-decoration-none px-3 py-2 d-block">
                <em class="fa-solid fa-gear"></em> Settings
            </a>
        </li>
        <li class="side-one my-2">
            <a href="" class="text-decoration-none px-3 py-2 d-block">
                <em class="fa-solid fa-right-from-bracket"></em> Logout
            </a>
        </li>
    </ul>
</div>

@push('script')
    <script type="module">
        $('.sidebar ul li').click(function () {
            $('.sidebar ul li.active').removeClass('active');
            $(this).addClass('active');
        });

        $('.open-btn').click(function () {
            $('.sidebar').addClass('active');
        });

        $('.close-btn').click(function () {
            $('.sidebar').removeClass('active');
        });
    </script>
@endpush
