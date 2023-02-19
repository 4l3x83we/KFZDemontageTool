@extends('layouts.appBackend')

@section('title', $page_title)

@push('css') @endpush
@push('js') @endpush
@push('script')
    <script type="module">
        let $dataTableKunden = $("#dataTableKunden #kunden")
        $dataTableKunden.css("cursor", "pointer");
        $dataTableKunden.click(function () {
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
                        <a class="nav-link active" id="kunden-tab" data-bs-toggle="tab" data-bs-target="#kunden-tab-pane" type="button" role="tab" aria-controls="kunden-tab-pane" aria-selected="true"><em class="fa-solid fa-users"></em> Alle Kunden</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="geburtstag-tab" data-bs-toggle="tab" data-bs-target="#geburtstag-tab-pane" type="button" role="tab" aria-controls="geburtstag-tab-pane" aria-selected="true"><em class="fa-solid fa-birthday-cake"></em> Geburtagsliste</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="kunden-tab-pane" role="tabpanel" aria-labelledby="kunden-tab" tabindex="0">
                        @include('backend.kunden.partials.kunden')
                    </div>
                    <div class="tab-pane fade" id="geburtstag-tab-pane" role="tabpanel" aria-labelledby="geburtstag-tab" tabindex="0">
                        @include('backend.kunden.partials.geburtstag')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
