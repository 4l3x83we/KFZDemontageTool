@extends('layouts.appBackend')

@section('title', $page_title)

@push('css') @endpush
@push('js') @endpush
@push('script') @endpush

@section('content')
    <div class="container-fluid">
        <div class="row my-3 gy-4 gy-lg-0">
            <div class="col-lg-8">
                <div class="row gy-4">
                    <div class="col-lg-12">
                        <div class="text-bg-light shadow-lg px-2 py-3 rounded overflow-hidden">
                            <div class="d-flex justify-content-start align-items-center">
                                <div class="car_icon">
                                    <em class="fa-solid fa-user"></em>
                                </div>
                                <div class="d-flex flex-column justify-content-between align-items-center w-100">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <div class="text-dark">{{ $kunden->kd_anrede }}</div>
                                        <a href="{{ route('backend.kunden.edit', $kunden->id) }}" class="btn btn-secondary btn-sm">Bearbeiten <em class="fa-solid fa-pen ps-2"></em></a>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        <div class="d-flex flex-column justify-content-between align-items-start">
                                            <h4 class="mb-0">{{ $kunden->kd_title . ' ' . $kunden->kd_vorname }}</h4>
                                            <h4 class="mb-0">{{ $kunden->kd_nachname }}</h4>
                                            <span>{{ 'Kd.-Nr.' . $kunden->id }}</span>
                                        </div>
                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#nachrichtModal">Nachricht <em class="fa-solid fa-envelope ps-2"></em></button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex">
                                <div style="width: 47.5%;">
                                    <div class="d-flex flex-column align-items-start">
                                        <div class="fahrzeuge_text">
                                            <em class="fa-solid fa-handshake-angle pe-2" style="width: 25.5px; display: inline-block;"></em> {{ $kunden->kd_ex_address }}
                                        </div>
                                        <div class="d-flex flex-column justify-content-center my-2">
                                            <div class="fahrzeuge_text">
                                                <span style="width: 25.5px; display: inline-block;"></span> {{ $kunden->kd_strasse_hausnr }}
                                            </div>
                                            <div class="fahrzeuge_text">
                                                <em class="fa-solid fa-location-pin pe-2" style="width: 25.5px; display: inline-block;"></em> {{ $kunden->kd_plz . ' ' . $kunden->kd_ort }}
                                            </div>
                                            <div class="fahrzeuge_text">
                                                <span style="width: 25.5px; display: inline-block;"></span> {{ $kunden->kd_land }}
                                            </div>
                                        </div>
                                        <div class="fahrzeuge_text">
                                            <em class="fa-solid fa-id-card pe-2" style="width: 25.5px; display: inline-block;"></em> {{ $kunden->kd_uid }}
                                        </div>
                                        <div class="d-flex align-items-start justify-content-start my-2">
                                            <div class="fahrzeuge_text">
                                                <em class="fa-solid fa-info-circle pe-2" style="width: 25.5px; display: inline-block;"></em> {!! $kunden->kd_zusatzinfo !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="width: 5%;"></div>
                                <div style="width: 47.5%;">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <div class="fahrzeuge_text">
                                            <em class="fa-solid fa-mobile-screen-button pe-2" style="width: 25.5px; display: inline-block;"></em> {!! $kunden->kd_handy !!}
                                        </div>
                                        <a href="" class="btn btn-secondary btn-sm"><em class="ps-1 fa-solid fa-clock-rotate-left"></em></a>
                                    </div>
                                    <div class="fahrzeuge_text my-2">
                                        <em class="fa-solid fa-phone-alt pe-2" style="width: 25.5px; display: inline-block;"></em> {{ $kunden->kd_telefon }}
                                    </div>
                                    <div class="fahrzeuge_text">
                                        <em class="fa-solid fa-envelope pe-2" style="width: 25.5px; display: inline-block;"></em>
                                        <a href="mailto:{{ $kunden->kd_email }}" target="_blank" class="link-dark text-decoration-none">{{ $kunden->kd_email }}</a>
                                    </div>
                                    <div class="fahrzeuge_text my-2">
                                        <em class="fa-solid fa-birthday-cake pe-2" style="width: 25.5px; display: inline-block;"></em> {{ \Carbon\Carbon::parse($kunden->kd_geburtstag)->format('d.m.Y') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="text-bg-light shadow-lg px-2 py-3 rounded">
                            <div class="d-flex justify-content-between align-items-center w-100 mb-3">
                                <div class="d-flex align-items-center">
                                    <em class="fa-solid fa-file pe-3"></em>
                                    <span class="pe-2" style="font-size: 20px; line-height: 24px; font-weight: 500;">Dokumente</span>
                                    <span class="button_circle fahrzeuge_text">0</span>
                                </div>
                                <div>
                                    <a href="" class="btn btn-secondary btn-sm"><em class="ps-1 fa-solid fa-plus pe-2"></em> Angebot</a>
                                    <a href="" class="btn btn-secondary btn-sm"><em class="ps-1 fa-solid fa-plus pe-2"></em> Auftrag</a>
                                    <a href="" class="btn btn-secondary btn-sm"><em class="ps-1 fa-solid fa-plus pe-2"></em> Rechnung</a>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center w-100 mb-3">
                                <div class="d-flex justify-content-between align-items-center w-50 me-3">
                                    <div>
                                        <div style="background: var(--bs-green-200); width: auto; min-width: 32px; height: 32px; font-size: 16px; line-height: 32px;" class="text-success d-inline-block align-middle text-center rounded-circle">
                                            <em class="fa-solid fa-coins"></em>
                                        </div>
                                        <span style="font-size: 16px; padding-left: 10px;">Umsatz</span>
                                    </div>
                                    <div style="font-size: 16px; padding-left: 10px; font-weight: bold;">100.00 €</div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center w-50 ms-3">
                                    <div>
                                        <div style="background: var(--bs-orange-200); color: var(--bs-orange); width: auto; min-width: 32px; height: 32px; font-size: 16px; line-height: 32px;" class="d-inline-block align-middle text-center rounded-circle">
                                            <em class="fa-solid fa-hourglass-half"></em>
                                        </div>
                                        <span style="font-size: 16px; padding-left: 10px;">Offene Zahlungen</span>
                                    </div>
                                    <div style="font-size: 16px; padding-left: 10px; font-weight: bold;">0.00 €</div>
                                </div>
                            </div>
                            {{--@foreach($fahrzeugs as $fahrzeug)
                            @if(!empty($fahrzeug->kunden_id))
                                <div class="table-responsive">
                                    <table class="table table-light table-striped table-borderless table-hover">
                                        <thead>
                                        <tr>
                                            <th class="dokumente_row" style="width: 18%; min-width: 200px;">Status</th>
                                            <th class="dokumente_row" style="width: 8%; min-width: 90px;">Nummer</th>
                                            <th class="dokumente_row" style="width: 11%; min-width: 125px;">Datum</th>
                                            <th class="dokumente_row" style="width: 35%; min-width: 395px;">Fahrzeug</th>
                                            <th class="dokumente_row text-end" style="width: 17%; min-width: 150px;">Summe</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="dokumente_row align-middle" style="width: 18%; min-width: 200px;">
                                                <div class="d-inline-flex align-items-center">
                                                    @if(false)
                                                        <div class="alert alert-primary d-flex align-items-center mb-0 py-1 px-2 rounded-5" role="alert">
                                                            <em class="fa-solid fa-wrench pe-2"></em>
                                                            <div>Auftrag</div>
                                                        </div>
                                                    @elseif(true)
                                                        <div class="alert alert-orange d-flex align-items-center mb-0 py-1 px-2 rounded-5" role="alert">
                                                            <em class="fa-solid fa-hand-holding pe-2"></em>
                                                            <div>Auftrag</div>
                                                        </div>
                                                    @elseif(false)
                                                        <div class="alert alert-success d-flex align-items-center mb-0 py-1 px-2 rounded-5" role="alert">
                                                            <em class="fa-solid fa-check pe-2"></em>
                                                            <div>Bezahlt</div>
                                                        </div>
                                                    @elseif(false)
                                                        <div class="alert alert-secondary d-flex align-items-center mb-0 py-1 px-2 rounded-5" role="alert">
                                                            <em class="fa-solid fa-file pe-2"></em>
                                                            <div>Entwurf</div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="dokumente_row align-middle" style="width: 8%; min-width: 90px;">1</td>
                                            <td class="dokumente_row align-middle" style="width: 11%; min-width: 125px;">{{ \Carbon\Carbon::parse(now())->format('d.m.Y') }}</td>
                                            <td class="dokumente_row align-middle" style="width: 35%; min-width: 395px;">
                                                <div class="d-flex">
                                                    <div class="mt-auto mb-auto mr-2">
                                                        <div class="text-dark shadow-lg kennzeichen">
                                                        <span class="d-flex">
                                                            <span class="mx-auto pt-1 ps-2 fahrzeuge_text">{{ $fahrzeug->fzd_kennzeichen }}</span>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div class="mt-auto mb-auto ms-2">{{ $fahrzeug->fzd_hersteller . ' ' . $fahrzeug->fzd_modell }}</div>
                                                </div>
                                            </td>
                                            <td class="dokumente_row text-end align-middle" style="width: 17%; min-width: 150px;">
                                                <div class="d-inline-flex align-items-center">
                                                    <div class="dokument_summe_color">100,00 €</div>
                                                    <span data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Gesamtbetrag: 100,00 € Bezahlt: 0,00 € Offen: 100,00 €">
                                                    @if(true)
                                                            <div class="status_dokumente status_dokumente_gradient_offen"></div>
                                                        @else
                                                            <div class="status_dokumente status_dokumente_gradient_bezahlt"></div>
                                                        @endif
                                                </span>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="fahrzeuge_border">
                                    <div class="inner_text">
                                        Keine Aufträge / Rechnungen
                                    </div>
                                </div>
                            @endif
                            @endforeach--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row gy-4">
                    <div class="col-lg-12">
                        <div class="text-bg-light shadow-lg px-2 py-3 rounded">
                            <div class="d-flex justify-content-between align-items-center w-100 mb-3">
                                <div class="d-flex align-items-center">
                                    <em class="fa-solid fa-car pe-3"></em>
                                    <span class="pe-2" style="font-size: 20px; line-height: 24px; font-weight: 500;">Fahrzeuge</span>
                                    <span class="button_circle fahrzeuge_text">0</span>
                                </div>
                                <div>
                                    <a href="{{ route('backend.fahrzeugdaten.create') }}" class="btn btn-secondary btn-sm"><em class="ps-1 fa-solid fa-plus pe-2"></em> Fahrzeug</a>
                                </div>
                            </div>
                            @foreach($fahrzeugs as $fahrzeug)
                            @if(!empty($fahrzeug->kunden_id))
                                <div class="d-block">
                                    <div style="padding: 12px 0; align-items: center;">
                                        <div class="d-inline-block h-100 w-100" style="vertical-align: top;">
                                            <div class="d-inline-flex pt-2 ps-3 align-items-center align-middle w-100">
                                                <div>{{ $fahrzeug->fzd_hersteller . '   ' . $fahrzeug->fzd_modell }}</div>
                                            </div>
                                            <div class="d-inline-flex pt-2 ps-3 align-items-center align-middle w-100">
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <div class="text-dark shadow-lg kennzeichen">
                                                        <span class="d-flex">
                                                            <span class="mx-auto pt-1 ps-2 fahrzeuge_text">{{ $fahrzeug->fzd_kennzeichen }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="ms-auto pe-3">
                                                    <div class="d-flex align-items-center">
                                                        <em class="fa-solid fa-calendar-days pe-2"></em>
                                                        <div>{{ \Carbon\Carbon::parse($fahrzeug->created_at)->format('d.m.Y') }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="mt-3 mb-0">
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="fahrzeuge_border">
                                    <div class="inner_text">
                                        Keine Fahrzeuge
                                    </div>
                                </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="text-bg-light shadow-lg px-2 py-3 rounded">
                            <div class="d-flex justify-content-between align-items-center w-100 mb-3">
                                <div class="d-flex align-items-center">
                                    <em class="fa-solid fa-calendar-days pe-3"></em>
                                    <span class="pe-2" style="font-size: 20px; line-height: 24px; font-weight: 500;">Termine</span>
                                    <span class="button_circle fahrzeuge_text">0</span>
                                </div>
                                <div>
                                    <a href="" class="btn btn-secondary btn-sm"><em class="ps-1 fa-solid fa-plus pe-2"></em> Termin</a>
                                </div>
                            </div>
                            @if(false)
                                <div class="fahrzeuge_border">
                                    <div class="inner_text">
                                        Keine Termine
                                    </div>
                                </div>
                            @else
                                <div class="d-block mt-3">
                                    <div class="callout callout-orange">
                                        {{--<div>
                                            <div style="color: var(--bs-orange);">Werkstatt</div>
                                            <div>{{ \Carbon\Carbon::parse(now())->format('d.m. H:i') . ' Uhr' }}</div>
                                            <div class="d-flex align-items-center">
                                                <div class="pe-2">{{ $fahrzeug->fzd_hersteller }}</div>
                                                <div class="text-dark shadow-lg kennzeichen">
                                                    <span class="d-flex">
                                                        <span class="mx-auto pt-1 ps-2 fahrzeuge_text">{{ $fahrzeug->fzd_kennzeichen }}</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>--}}
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="text-bg-light shadow-lg px-2 py-3 rounded">
                            <div class="d-flex justify-content-between align-items-center w-100 mb-3">
                                <div class="d-flex align-items-center">
                                    <em class="fa-solid fa-folder-open pe-3"></em>
                                    <span class="pe-2" style="font-size: 20px; line-height: 24px; font-weight: 500;">Dateien</span>
                                    <span class="button_circle fahrzeuge_text">0</span>
                                </div>
                                <div>
                                    <a href="" class="btn btn-secondary btn-sm"><em class="ps-1 fa-solid fa-plus pe-2"></em> Datei</a>
                                </div>
                            </div>
                            @if(true)
                                <div class="fahrzeuge_border">
                                    <div class="inner_text">
                                        Keine Dateien
                                    </div>
                                </div>
                            @else
                                <div class="d-block">
                                    <div class="d-flex justify-content-between align-items-center pt-2 pb-2 ps-2">
                                        <div class="d-inline-flex align-items-center align-middle text-dark p-0" style="white-space: pre-wrap; font-size: 14px; line-height: 20px; font-weight: 400;">
                                            <div class="text-danger d-inline-block pe-2" style="cursor: pointer; font-size: 20px;"><em class="fa-solid fa-file-pdf"></em></div>
                                            <div class="d-inline-block" style="vertical-align: text-bottom; cursor: pointer; font-size: 14px;">test.pdf</div>
                                        </div>
                                        <span class="d-inline-flex align-items-center align-middle text-dark p-0" style="white-space: pre-wrap; font-size: 14px; line-height: 40px; font-weight: 400;">
                                            <a href="" class="link-secondary px-2" download=""><em class="fa-solid fa-download"></em></a>
                                            <em class="fa-solid fa-pen link-secondary px-2"></em>
                                            <div title="Löschen" class="link-secondary px-2"><em class="fa-solid fa-trash"></em></div>
                                        </span>
                                    </div>
                                    <hr class="m-0">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
