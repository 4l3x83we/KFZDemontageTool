<!-- Modal Laufleistung -->
<div class="modal fade" id="laufleistungModal" tabindex="-1" aria-labelledby="laufleistungModalLabel" aria-hidden="true">
    <div class="modal-dialog @isset($laufleistung->fzd_fahrzeug_id) modal-lg @endisset">
        <div class="modal-content text-bg-light">
                <div class="modal-header border-bottom-0">
                    <h1 class="modal-title fs-5" id="laufleistungModalLabel">Laufleistung</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex">
                        <div class="d-flex flex-column pe-2 w-100">
                            <form action="{{ route('backend.laufleistung.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="fahrzeug_id" value="@isset($fahrzeug){{ $fahrzeug->id }}@endisset">
                                <div class="btn-group d-inline-flex w-100" role="group">
                                    <button type="button" class="btn btn-success" data-bs-toggle="collapse" data-bs-target="#collapseKMStand" aria-expanded="true" aria-controls="collapseKMStand">
                                        KM-Stand
                                    </button>
                                    <button type="button" class="btn btn-secondary collapsed" data-bs-toggle="collapse" data-bs-target="#collapseKMStand" aria-expanded="false" aria-controls="collapseKMStand">
                                        Betriebstunden
                                    </button>
                                </div>
                                <div class="collapse show mt-2" id="collapseKMStand">
                                    <div class="mb-2">
                                        <label class="form-label mb-0" for="fzd_km_stand">KM-Stand
                                            <span class="text-danger">*</span></label>
                                        <input type="number" name="fzd_km_stand" id="fzd_km_stand" class="form-control" value="{{ old('fzd_km_stand') }}@isset($laufleistung){{ $laufleistung->fzd_km_stand }}@endisset">
                                    </div>
                                    <div class="mb-0">
                                        <label class="form-label mb-0" for="fzd_datum">Datum</label>
                                        <input type="date" name="fzd_datum" id="fzd_datum" class="form-control" value="{{ old('fzd_datum') }}@isset($laufleistung){{ $laufleistung->fzd_datum }}@endisset">
                                    </div>
                                </div>
                                <div class="collapse mt-2" id="collapseKMStand">
                                    <div class="mb-2">
                                        <label class="form-label mb-0" for="fzd_betriebsstunden">Betriebsstunden
                                            <span class="text-danger">*</span></label>
                                        <input type="number" name="fzd_betriebsstunden" id="fzd_betriebsstunden" class="form-control" value="{{ old('fzd_betriebsstunden') }}@isset($laufleistung){{ $laufleistung->fzd_betriebsstunden }}@endisset">
                                    </div>
                                    <div class="mb-0">
                                        <label class="form-label mb-0" for="fzd_datum">Datum</label>
                                        <input type="date" name="fzd_datum" id="fzd_datum" class="form-control" value="{{ old('fzd_datum') }}@isset($laufleistung){{ $laufleistung->fzd_datum }}@endisset">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center border-top-0 mt-3 w-100">
                                    <button type="submit" class="btn btn-success me-2">Hinzufügen</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Abbrechen</button>
                                </div>
                            </form>
                        </div>
                        @isset($laufleistung->fzd_fahrzeug_id)
                            <div class="d-flex flex-column ps-2 w-100">
                                <table class="table table-light table-borderless table-striped">
                                    <thead>
                                    <tr>
                                        <th>Datum</th>
                                        <th>Laufleistung</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($laufleistungs as $laufleistung)
                                        <tr>
                                            <td>{{ \Carbon\Carbon::parse($laufleistung->fzd_datum)->format('d.m.Y') }}</td>
                                            @if($laufleistung->fzd_km_stand)
                                                <td>{{ number_format($laufleistung->fzd_km_stand, 0, ' ', ' ') . ' km' }}</td>
                                            @elseif($laufleistung->fzd_betriebsstunden)
                                                <td>{{ number_format($laufleistung->fzd_betriebsstunden, 0, ' ', ' ') . ' h' }}</td>
                                            @endif
                                            <td>
                                                <form action="{{ route('backend.laufleistung.destroy', $laufleistung->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn p-0 border-0 link-secondary"><em class="fa-solid fa-trash"></em></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endisset
                    </div>
                </div>
        </div>
    </div>
</div>
