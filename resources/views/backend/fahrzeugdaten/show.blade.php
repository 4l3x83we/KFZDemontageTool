@extends('layouts.appBackend')

@section('title', $page_title)

@push('css')

@endpush

@push('js')

@endpush

@push('script')

@endpush

@section('content')
    <div class="container-fluid">
        <div class="row my-3 gy-4 gy-lg-0">
            <div class="col-lg-8">
                <div class="row gy-4">
                    <div class="col-lg-12">
                        <div class="text-bg-light shadow-lg px-2 py-3 rounded overflow-hidden">
                            <div class="d-flex justify-content-start align-items-center">
                                <div class="car_icon">
                                    <em class="fa-solid fa-car"></em>
                                </div>
                                <div class="d-flex flex-column justify-content-between align-items-center w-100">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="text-dark shadow-lg kennzeichen">
                                        <span class="d-flex">
                                            <span class="mx-auto pt-1 ps-2 fahrzeuge_text">{{ $fahrzeug->fzd_kennzeichen }}</span>
                                        </span>
                                    </div>
                                    <a href="{{ route('backend.fahrzeugdaten.edit', $fahrzeug->id) }}" class="btn btn-secondary btn-sm">Bearbeiten <em class="ps-1 fa-solid fa-pen"></em></a>
                                </div>
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <div class="d-flex flex-column justify-content-between align-items-start">
                                        <h4>{{ $fahrzeug->fzd_hersteller . ' ' . $fahrzeug->fzd_modell }} <span class="fahrzeuge_text ms-2">{{ $fahrzeug->fzd_type }}</span></h4>
                                        <div class="fahrzeuge_text_orange"><em class="fa-solid fa-user"></em> </div>
                                    </div>
                                    <a href="" class="btn btn-secondary btn-sm"><em class="ps-1 fa-solid fa-clock-rotate-left"></em></a>
                                </div>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex">
                                <div style="width: 47.5%;">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fahrzeuge_text"><em class="fa-solid fa-road pe-2"></em> Laufleistung</span>
                                        <div class="btn btn-secondary btn-sm">
                                            @isset($laufleistung)
                                                @if($laufleistung->fzd_km_stand)
                                                    {{ number_format($laufleistung->fzd_km_stand, 0, ' ', ' ') . ' km' }}
                                                @elseif($laufleistung->fzd_betriebsstunden)
                                                    {{ number_format($laufleistung->fzd_betriebsstunden, 0, ' ', ' ') . ' km' }}
                                                @endif
                                            @else
                                                Hinzufügen
                                            @endisset
                                                <em class="ps-1 fa-solid fa-pen" aria-describedby="fzd_laufleistung" data-bs-toggle="modal" data-bs-target="#laufleistungModal"></em>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fahrzeuge_text">
                                            <em style="width: 23px; height: 12px;" class="fa-solid pe-2">&nbsp;</em> HSN/TSN
                                        </span>
                                        <span>{{ $fahrzeug->fzd_hsn . ' / ' . $fahrzeug->fzd_tsn }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fahrzeuge_text">
                                            <em style="width: 23px; height: 12px; font-size: 10px; font-weight: 700; font-style: normal;" class="pe-2">VIN</em>FIN
                                        </span>
                                        <span>{{ $fahrzeug->fzd_id }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><em class="fa-solid fa-car pe-2"></em></span>
                                        <span>{{ $fahrzeug->fzd_fahrzeugklasse }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fahrzeuge_text"><em class="fa-solid fa-gears pe-2"></em> Getriebeart</span>
                                        <span>{{ $fahrzeug->fzd_getriebeart }}</span>
                                    </div>
                                    <hr>
                                    @if($fahrzeug->fzd_zusatzinfo)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span><em class="fa-solid fa-info-circle"></em>
                                                {!! $fahrzeug->fzd_zusatzinfo !!}
                                            </span>
                                        </div>
                                    @endif
                                </div>
                                <div style="width: 5%;"></div>
                                <div style="width: 47.5%;">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><em class="fa-solid fa-weight-hanging pe-2"></em>{{ $fahrzeug->fzd_eigengewicht . ' kg' }}</span>
                                        <span><span class="fahrzeuge_text pe-3">max. </span>{{ $fahrzeug->fzd_hoechstzul_gewicht . ' kg' }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span><em class="fa-solid fa-tachometer-alt pe-2"></em>{{ $fahrzeug->fzd_leistung . ' kw / ' . round($fahrzeug->fzd_leistung * 1.35962, 0) . ' ps' }}</span>
                                        <span><span class="fahrzeuge_text pe-3"> </span>{{ $fahrzeug->fzd_hubraum . ' cm³' }}</span>
                                    </div>
                                    <hr>
                                    <div class="alert alert-orange mb-0 w-100" style="padding: 4px 8px; line-height: 20px; border-radius: 20px;">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="fahrzeuge_text"><em class="fa-solid fa-info-circle pe-2"></em>Nächste Überprüfung</span>
                                            <span>{{ \Carbon\Carbon::parse($fahrzeug->fzd_tuev)->format('d.m.Y') }}</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fahrzeuge_text"><em style="width: 23px; height: 12px;" class="fa-solid pe-2">&nbsp;</em>Letzte Zulassung</span>
                                        <span>{{ \Carbon\Carbon::parse($fahrzeug->fzd_letzte_zulassung)->format('d.m.Y') }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fahrzeuge_text"><em class="fa-solid fa-calendar-days pe-2"></em> Erstzulassung</span>
                                        <span>{{ \Carbon\Carbon::parse($fahrzeug->fzd_erstzulassung)->format('d.m.Y') }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fahrzeuge_text"><em style="width: 23px; height: 12px;" class="fa-solid pe-2">&nbsp;</em>Genehmigungsdatum</span>
                                        <span>{{ \Carbon\Carbon::parse($fahrzeug->fzd_genehmigungsdatum)->format('d.m.Y') }}</span>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fahrzeuge_text"><em style="width: 23px; height: 12px;" class="fa-solid pe-2">&nbsp;</em>Motor-Kategorie</span>
                                        <span>{{ $fahrzeug->fzd_motorkategorie }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fahrzeuge_text"><em style="width: 23px; height: 12px;" class="fa-solid pe-2">&nbsp;</em>Motor-Code</span>
                                        <span>{{ $fahrzeug->fzd_motorcode }}</span>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fahrzeuge_text"><em class="fa-solid fa-palette pe-2"></em>Farb-Code</span>
                                        <span><span class="fahrzeuge_text pe-3"> </span>{{ $fahrzeug->fzd_farbcode }}</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="fahrzeuge_text"><em class="fa-solid fa-star-of-life pe-2"></em>Polizzennummer</span>
                                        <span><span class="fahrzeuge_text pe-3"> </span>{{ $fahrzeug->fzd_polizzennummer }}</span>
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
                                    <a href="{{ route('backend.fahrzeugdaten.edit', $fahrzeug->id) }}" class="btn btn-secondary btn-sm"><em class="ps-1 fa-solid fa-plus pe-2"></em> Angebot</a>
                                    <a href="{{ route('backend.fahrzeugdaten.edit', $fahrzeug->id) }}" class="btn btn-secondary btn-sm"><em class="ps-1 fa-solid fa-plus pe-2"></em> Auftrag</a>
                                    <a href="{{ route('backend.fahrzeugdaten.edit', $fahrzeug->id) }}" class="btn btn-secondary btn-sm"><em class="ps-1 fa-solid fa-plus pe-2"></em> Rechnung</a>
                                </div>
                            </div>
                            @if(false)
                            <div class="fahrzeuge_border">
                                <div class="inner_text">
                                    Keine Aufträge / Rechnungen
                                </div>
                            </div>
                            @else
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
                            @endif
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
                                    <em class="fa-solid fa-folder-open pe-3"></em>
                                    <span class="pe-2" style="font-size: 20px; line-height: 24px; font-weight: 500;">Dateien</span>
                                    <span class="button_circle fahrzeuge_text">0</span>
                                </div>
                                <div>
                                    <a href="{{ route('backend.fahrzeugdaten.edit', $fahrzeug->id) }}" class="btn btn-secondary btn-sm"><em class="ps-1 fa-solid fa-plus pe-2"></em> Datei</a>
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
                    <div class="col-lg-12">
                        <div class="text-bg-light shadow-lg px-2 py-3 rounded">
                            <div class="d-flex justify-content-between align-items-center w-100 mb-3">
                                <div class="d-flex align-items-center">
                                    <em class="fa-solid fa-folder pe-3"></em>
                                    <span class="pe-2" style="font-size: 20px; line-height: 24px; font-weight: 500;">Reifenlager</span>
                                    <span class="button_circle fahrzeuge_text">0</span>
                                </div>
                                <div>
                                    <a href="{{ route('backend.fahrzeugdaten.edit', $fahrzeug->id) }}" class="btn btn-secondary btn-sm"><em class="ps-1 fa-solid fa-plus pe-2"></em> Reifen</a>
                                </div>
                            </div>
                            @if(false)
                                <div class="fahrzeuge_border">
                                    <div class="inner_text">
                                        Keine Reifen
                                    </div>
                                </div>
                            @else
                                <div class="d-block">
                                    <div style="padding: 12px 0; align-items: center;">
                                        <div class="d-inline-block h-100 w-100" style="vertical-align: top;">
                                            <div class="d-inline-flex pt-2 ps-3 align-items-center align-middle w-100">
                                                <div class="alert alert-success d-flex align-items-center rounded-5 mb-0 py-1 px-2" role="alert">
                                                    <em class="fa-solid fa-arrow-right-to-bracket pe-2"></em>
                                                    <div>Eingelagert</div>
                                                </div>
                                                <div class="ms-auto pe-3">
                                                    <div class="alert alert-slate d-flex align-items-center rounded-5 mb-0 py-1 px-2" role="alert">
                                                        <em class="fa-solid fa-dolly pe-2"></em>
                                                        <div>Lagerort</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-inline-flex pt-2 ps-3 align-items-center align-middle w-100">
                                                @if(false)
                                                <em class="fa-solid fa-sun pe-2"></em>
                                                <div>Reifenhersteller</div>
                                                @elseif(false)
                                                <em class="fa-solid fa-snowflake pe-2"></em>
                                                <div>Reifenhersteller</div>
                                                @elseif(false)
                                                <em class="fa-solid fa-rotate pe-2"></em>
                                                <div>Reifenhersteller</div>
                                                @elseif(true)
                                                <em class="fa-solid fa-road-spikes pe-2"></em>
                                                <div>Reifenhersteller</div>
                                                @endif
                                                <div class="ms-auto pe-3">
                                                    <div class="alert alert-orange d-flex align-items-center rounded-5 mb-0 py-1 px-2" role="alert">
                                                        <em class="fa-solid fa-info-circle pe-2"></em>
                                                        <div>Lagerort</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
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
                                    <a href="{{ route('backend.fahrzeugdaten.edit', $fahrzeug->id) }}" class="btn btn-secondary btn-sm"><em class="ps-1 fa-solid fa-plus pe-2"></em> Termin</a>
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
                                        <div>
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
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('backend.fahrzeugdaten.partials.modal')
@endsection
