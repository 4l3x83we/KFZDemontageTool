@extends('layouts.appBackend')

@section('title', $page_title)

@push('css') @endpush
@push('js') @endpush
@push('script')

@endpush

@section('content')
    <div class="container-fluid">
        <div class="row my-3">
            <div class="col-lg-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="angebote-tab" data-bs-toggle="tab" data-bs-target="#angebote-tab-pane" type="button" role="tab" aria-controls="angebote-tab-pane" aria-selected="true">Angebot {{ '#'. $angebote->id }}</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="angebote-tab-pane" role="tabpanel" aria-labelledby="angebote-tab" tabindex="0">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-column py-2 w-100">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="text-secondary">Fahrzeug</div>
                                        <button type="button" class="btn btn-link p-0 link-dark"><em class="fa-solid fa-pen pe-2"></em>{{ $fahrzeug->fzd_kennzeichen . ' | ' . $fahrzeug->fzd_hersteller . ' ' . $fahrzeug->fzd_modell }}</button>
                                    </div>
                                    <div>
                                        <div class="text-secondary">Laufleistung</div>
                                        <div class="link-dark">{{ number_format($fahrzeug->fzd_laufleistung, 0, ' ', ' ') . ' km' }}</div>
                                    </div>
                                    <div>
                                        <div class="text-secondary">Nächster TÜV</div>
                                        <div class="link-dark">{{ \Carbon\Carbon::parse($fahrzeug->fzd_tuev)->format('d.m.Y') }}</div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-4">
                                    <div>
                                        <div class="text-secondary">Besitzer</div>
                                        <button type="button" class="btn btn-link p-0 link-dark"><em class="fa-solid fa-pen pe-2"></em>{{ $kunden->kd_nachname . ' ' . $kunden->kd_vorname }}</button>
                                    </div>
                                    <div>
                                        <div class="text-secondary">Rechnungsadresse</div>
                                        <button type="button" class="btn btn-link p-0 link-dark"><em class="fa-solid fa-pen pe-2"></em>{{ $kunden->kd_anrede . '; ' . $kunden->kd_nachname . ' ' . $kunden->kd_vorname }}@isset($kunden->kd_ex_address) {{ '; ' . $kunden->kd_ex_address  }} @endisset{{  '; ' . $kunden->kd_strasse_hausnr . '; ' . $kunden->kd_plz . ' ' . $kunden->kd_ort . '; ' . $kunden->kd_land }}</button>
                                    </div>
                                    <div>
                                        <div class="text-secondary">&nbsp;</div>
                                        <div>&nbsp;</div>
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-lg-3">
                                        <label for="an_auftragstext" class="form-label mb-0">Auftragstext</label>
                                        <textarea class="form-control" name="an_auftragstext" id="an_auftragstext"></textarea>
                                        <label for="an_leistungszeitraum" class="form-label mb-0">Leistungszeitraum</label>
                                        <input type="text" class="form-control" name="an_leistungszeitraum" id="an_leistungszeitraum" value="entspricht Rechnungsdatum">
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="an_angebotstext" class="form-label mb-0">Angebotstext</label>
                                        <textarea class="form-control" name="an_angebotstext" id="an_angebotstext"></textarea>
                                        <label for="an_bearbeiter" class="form-label mb-0">Bearbeiter</label>
                                        <select class="form-select" id="an_bearbeiter" name="an_bearbeiter">
                                            <option value="3">Guthmann Alexander</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-3"></div>
                                </div>
                            </div>
                            <div class="p-3" style="width: 250px;">
                                <div class="d-flex flex-column">
                                    <a href="" class="btn btn-success" >Auftrag erstellen</a>
                                    <a href="" class="btn btn-dark my-3" >Rechnung erstellen</a>
                                    <a href="" class="btn btn-secondary" >Angebot löschen</a>
                                    <a href="" class="btn btn-dark mt-3" >Kopieren <em class="fa-solid fa-copy ps-2"></em></a>
                                </div>
                                <hr>
                                <div class="d-flex align-items-center">
                                    <a href="" class="btn btn-secondary" ><em class="fa-solid fa-print"></em></a>
                                    <a href="" class="btn btn-secondary ms-auto" ><em class="fa-solid fa-envelope"></em></a>
                                    <a href="" class="btn btn-secondary ms-auto" ><em class="fa-solid fa-download"></em></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-lg-12">
                <div class="text-bg-light px-2 py-3">
                    123
                </div>
            </div>
        </div>
    </div>
@endsection
