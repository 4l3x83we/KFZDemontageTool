@extends('layouts.appBackend')

@section('title', $page_title)

@push('css')
    <style>
    </style>
@endpush

@push('js')

@endpush

@push('script')
    <script type="module">
        let $dataTableFahrzeuge = $("#dataTableFahrzeuge #fahrzeug")
        $dataTableFahrzeuge.css("cursor", "pointer");
        $dataTableFahrzeuge.click(function () {
            let link = $(this).attr("href");
            open(link, '_self');
        });
    </script>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="row my-3">
            <div class="col-lg-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="fahrzeugliste-tab" data-bs-toggle="tab" data-bs-target="#fahrzeugliste-tab-pane" type="button" role="tab" aria-controls="fahrzeugliste-tab-pane" aria-selected="true">Fahrzeugliste</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pruefung-tab" data-bs-toggle="tab" data-bs-target="#pruefung-tab-pane" type="button" role="tab" aria-controls="pruefung-tab-pane" aria-selected="true">§57A Prüfung</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="tuev-pruefung-tab" data-bs-toggle="tab" data-bs-target="#tuev-pruefung-tab-pane" type="button" role="tab" aria-controls="tuev-pruefung-tab-pane" aria-selected="false">TÜV Prüfungen</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="reifenlager-tab" data-bs-toggle="tab" data-bs-target="#reifenlager-tab-pane" type="button" role="tab" aria-controls="reifenlager-tab-pane" aria-selected="false">Reifenlager</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="fahrzeugliste-tab-pane" role="tabpanel" aria-labelledby="fahrzeugliste-tab" tabindex="0">
                        @include('backend.fahrzeugdaten.partials.fahrzeugliste')
                    </div>
                    <div class="tab-pane fade" id="pruefung-tab-pane" role="tabpanel" aria-labelledby="pruefung-tab" tabindex="0">
                        @include('backend.fahrzeugdaten.partials.57a-pruefung')
                    </div>
                    <div class="tab-pane fade" id="tuev-pruefung-tab-pane" role="tabpanel" aria-labelledby="tuev-pruefung-tab" tabindex="0">
                        @include('backend.fahrzeugdaten.partials.tuev-pruefung')
                    </div>
                    <div class="tab-pane fade" id="reifenlager-tab-pane" role="tabpanel" aria-labelledby="reifenlager-tab" tabindex="0">
                        @include('backend.fahrzeugdaten.partials.reifenlager')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
