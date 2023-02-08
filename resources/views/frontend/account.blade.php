@extends('layouts.app')

@section('title', $page_title)

@section('content')
    <section class="content-main">
        <div class="container">
            <div class="row flex-lg-row-reverse mb-3 mb-lg-0">
                <div class="col-lg-8 mt-4 mb-2 register-content">
                    <div class="border rounded-1">
                        @include('auth.register')
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mb-2">
                    <div class="row">
                        <div class="col-lg-12 register-exist-customer">
                            <div class="border rounded-1">
                                @include('auth.login')
                            </div>
                        </div>
                        <div class="col-lg-12 d-none d-lg-block register-advantages">
                            <h2 class="title">Meine Vorteile</h2>
                            <ul class="list-unstyled">
                                <li><em class="fa-solid fa-check pe-1"></em> Schnelles Einkaufen</li>
                                <li><em class="fa-solid fa-check pe-1"></em> Speichern Sie Ihre Benutzerdaten und Einstellungen</li>
                                <li><em class="fa-solid fa-check pe-1"></em> Einblick in Ihre Bestellungen ink. Sendungsauskunft</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
