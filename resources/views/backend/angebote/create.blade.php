@extends('layouts.appBackend')

@section('title', $page_title)

@push('css') @endpush
@push('js') @endpush
@push('script')
    <script type="module">
        let counter = (function () {
            let counter = 1;
            return function () {
                return counter++;
            }
        })();

        $('#add').on('click', function () {
            let clone = $('#duplicates tr.duplicate:eq(0)').clone();
            clone.find("input,select").each(function () {
                $(this).attr({
                    id: $(this).attr("id") + counter()
                });
            });
            $('#duplicates').append(clone);
        });

        $('#remove').on('click', function () {
            if ($('#duplicates tr.duplicate').length != 1)
                $('#duplicates tr.duplicate:last').remove();
        });


    </script>
@endpush

@section('content')
    <div class="container-fluid">
        <form action="{{ route('backend.angebote.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="angebote-tab" data-bs-toggle="tab" data-bs-target="#angebote-tab-pane" type="button" role="tab" aria-controls="angebote-tab-pane" aria-selected="true">{{ $page_title }}</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="angebote-tab-pane" role="tabpanel" aria-labelledby="angebote-tab" tabindex="0">
                            @include('backend.angebote.partials.form')
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-lg-12">
                    <div class="text-bg-light px-2 py-3">
                        <div class="d-flex justify-content-between align-items-center pb-2">
                            <button type="button" class="btn btn-success"><em class="fa-solid fa-search"></em> Position hinzufügen</button>
                            <div>
                                <button id="add" type="button" class="btn btn-secondary"><em class="fa-solid fa-plus"></em></button>
                                <button id="remove" type="button" class="btn btn-danger"><em class="fa-solid fa-minus"></em></button>
                            </div>
                        </div>
                        <div class="table-responsive" style="font-size: 14px;">
                            <table class="table table-light table-striped table-borderless">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Artikelnummer</th>
                                    <th></th>
                                    <th>Menge</th>
                                    <th>Einheit</th>
                                    <th>Bezeichnung</th>
                                    <th>Einzelpreis exkl.</th>
                                    <th>Rabatt %</th>
                                    <th>Rabattpreis exkl.</th>
                                    <th>Steuersatz</th>
                                </tr>
                                </thead>
                                <tbody id="duplicates">
                                <tr class="duplicate">
                                    <td></td>
                                    <td></td>
                                    <td style="min-width: 100px; max-width: 112px;">
                                        <input type="text" class="form-control form-control-sm" name="an_artikelnummer[]" id="an_artikelnummer" aria-label="Artikelnummer">
                                    </td>
                                    <td style="min-width: 75px; max-width: 80px;">
                                        <select class="form-select form-select-sm" name="an_typ[]" aria-label="Positionsart">
                                            <option value="M" selected>Material</option>
                                            <option value="A">Arbeit</option>
                                            <option value="S">Sonstiges</option>
                                        </select>
                                    </td>
                                    <td style="min-width: 66px; max-width: 80px">
                                        <input type="number" class="form-control form-control-sm" name="an_menge[]" id="an_menge" aria-label="Menge">
                                    </td>
                                    <td style="min-width: 76px; max-width: 80px">
                                        <select class="form-select form-select-sm" name="an_einheit[]" aria-label="Einheit">
                                            <option value="Stk." selected>Stk.</option>
                                            <option value="m">m</option>
                                            <option value="l">l</option>
                                            <option value="kg">kg</option>
                                            <option value="g">g</option>
                                            <option value="PA">PA</option>
                                            <option value="Satz">Satz</option>
                                        </select>
                                    </td>
                                    <td style="min-width: 135px;">
                                        <input type="text" class="form-control form-control-sm" name="an_bezeichnung[]" id="an_bezeichnung" aria-label="Bezeichnung">
                                    </td>
                                    <td style="min-width: 90px; max-width: 97px">
                                        <input type="number" class="form-control form-control-sm" name="an_einzelpreis_exkl_mwst[]" id="an_einzelpreis_exkl_mwst" aria-label="Einzelpreis exkl.">
                                    </td>
                                    <td style="min-width: 90px; max-width: 97px">
                                        <input type="number" class="form-control form-control-sm" name="an_rabatt[]" id="an_rabatt" aria-label="Rabatt" maxlength="3">
                                    </td>
                                    <td style="min-width: 90px; max-width: 97px">
                                        <input type="number" class="form-control form-control-sm" name="an_rabattpreis[]" id="an_rabattpreis" aria-label="Rabattpreis exkl.">
                                    </td>
                                    <td style="min-width: 123px; max-width: 125px;">
                                        <select class="form-select form-select-sm" name="an_steuersatz[]" aria-label="Steuersatz">
                                            <option value="19% Standard" selected>19% Standard</option>
                                            <option value="20,9% Altteile">20,9% Altteile</option>
                                        </select>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-success">Speichern</button>
                            <a href="{{ route('backend.angebote.index') }}" class="btn btn-danger">Abbrechen</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
