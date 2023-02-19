@extends('layouts.appBackend')

@section('title', $page_title)

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 my-2">
            <div class="text-center backend-logo shadow-lg">
                <img src="{{ Vite::image('logo_3.png') }}" alt="logo">
            </div>
        </div>
        <div class="col-lg-4 my-2">
            <div class="backend-adresse shadow-lg">
                <div class="d-flex flex-column h-100">
                    <div class="mb-auto">
                        <address class="d-flex flex-column">
                            <span>Thüringer Tuning Freunde</span>
                            <span>Schallenburger Straße 37</span>
                            <span>99610 Sömmerda</span>
                        </address>
                    </div>
                    <div class="mt-auto">
                        <div class="d-flex flex-column">
                            <span>&copy; Copyright 2023 - {{ date('Y') }}</span>
                            <span>4l3x83we.de - Webentwicklung</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <h4 class="text-center text-info fw-bold">Fahrzeug Arbeiten</h4>
            <div class="my-2 shadow-lg border border-dark d-flex flex-column align-items-center">
                <a href="#" class="btn btn-dark btn-custom my-2">Fahrzeug Etiketten</a>
                <a href="#" class="btn btn-dark btn-custom my-2">Laufzettel KFZ Annahme</a>
                <a href="{{ route('backend.fahrzeugdaten.index') }}" class="btn btn-dark btn-custom my-2">Fahrzeugdaten</a>
                <div class="backend-distance my-lg-2"></div>
                <div class="backend-distance my-lg-2"></div>
                <a href="#" class="btn btn-dark btn-custom my-2">Fahrzeug Bewertung</a>
                <a href="#" class="btn btn-dark btn-custom my-2">Abfall/KFZ Ausgang</a>
                <a href="#" class="btn btn-dark btn-custom my-2">Betriebstagebuch</a>
                <a href="#" class="btn btn-dark btn-custom my-2">Störfall + Maßnahmen</a>
                <a href="#" class="btn btn-dark btn-custom my-2">TODO Liste</a>
            </div>
        </div>
        <div class="col-lg-4">
            <h4 class="text-center text-info fw-bold">Teile Verwaltung</h4>
            <div class="my-2 shadow-lg border border-dark d-flex flex-column align-items-center">
                <a href="#" class="btn btn-dark btn-custom my-2">Demontageauftrag</a>
                <a href="#" class="btn btn-dark btn-custom my-2">Teile Erfassung</a>
                <a href="#" class="btn btn-dark btn-custom my-2">Teile Einlagerung</a>
                <div class="backend-distance my-lg-2"></div>
                <div class="backend-distance my-lg-2"></div>
                <a href="#" class="btn btn-dark btn-custom my-2">Teile Verkauf</a>
                <div class="backend-distance my-lg-2"></div>
                <div class="backend-distance my-lg-2"></div>
                <a href="#" class="btn btn-dark btn-custom my-2">Fahrzeug Bewegungen</a>
                <a href="#" class="btn btn-dark btn-custom my-2">Auswertungen</a>
            </div>
        </div>
        <div class="col-lg-4">
            <h4 class="text-center text-info fw-bold">System Arbeiten</h4>
            <div class="my-2 shadow-lg border border-dark d-flex flex-column align-items-center">
                <a href="#" class="btn btn-dark btn-custom my-2">Lagerplan</a>
                <a href="#" class="btn btn-dark btn-custom my-2">Lagerstamm</a>
                <a href="#" class="btn btn-dark btn-custom my-2">Inventur</a>
                <div class="backend-distance my-lg-2"></div>
                <div class="backend-distance my-lg-2"></div>
                <a href="#" class="btn btn-dark btn-custom my-2">Adressen</a>
                <div class="backend-distance my-lg-2"></div>
                <a href="#" class="btn btn-dark btn-custom my-2">Grundlagen</a>
                <a href="#" class="btn btn-dark btn-custom my-2">Logout</a>
                <a href="#" class="btn btn-dark btn-custom my-2">Shop</a>
            </div>
        </div>
    </div>
</div>
@endsection
