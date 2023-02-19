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
        <div class="row my-3">
            <div class="col-lg-12">
                <div class="text-bg-dark rounded p-2" style="border-top: 8px solid orangered">
                    <div class="table-responsive pb-2">
                        <table id="dataTableEmpty" class="table table-striped table-dark table-hover dt-responsive nowrap">
                            <thead>
                            <tr>
                                <th>Hersteller ID</th>
                                <th>Hersteller Name</th>
                                <th>Aktion</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($herstellers as $hersteller)
                            <tr>
                                <td>{{ $hersteller->hersteller_id }}</td>
                                <td>{{ $hersteller->hersteller_name }}</td>
                                <td>

                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="my-2">
                        <form action="{{ route('backend.intern.hersteller.store') }}" method="POST" class="d-flex flex-row justify-content-between align-items-center">
                            @csrf
                            <input type="text" class="form-control me-2" name="hersteller_name" placeholder="Hersteller Name" aria-label="Hersteller Name">
                            <button type="submit" class="btn btn-success">Speichern</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
