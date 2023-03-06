@extends('layouts.appBackend')

@section('title', $page_title)

@push('css') @endpush
@push('js') @endpush
@push('script')
    <script type="module">
        let $dataTableAngebot = $("#dataTableAngebot #angebot")
        $dataTableAngebot.css("cursor", "pointer");
        $dataTableAngebot.click(function () {
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
                        <a class="nav-link active" id="angebote-tab" data-bs-toggle="tab" data-bs-target="#angebote-tab-pane" type="button" role="tab" aria-controls="angebote-tab-pane" aria-selected="true">Angebote</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="angebote-tab-pane" role="tabpanel" aria-labelledby="angebote-tab" tabindex="0">
                        @include('backend.angebote.partials.angebote')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
