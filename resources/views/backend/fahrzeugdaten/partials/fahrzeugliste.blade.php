<div class="d-flex justify-content-between align-items-center py-3">
    <div class="clearfix d-none d-lg-inline-block"></div>
    <div class="ms-auto">
        <a href="#" class="btn btn-danger rounded-1 collapse" id="fahrzeugLoeschenCollapse">Fahrzeuge löschen</a>
        <a href="{{ route('backend.fahrzeugdaten.export-fahrzeug-csvfile') }}" class="btn btn-secondary rounded-1">Exportieren</a>
        <a href="{{ route('backend.fahrzeugdaten.create') }}" class="btn btn-success rounded-1">Fahrzeug hinzufügen</a>
    </div>
</div>

<div class="table-responsive py-2">
    <table class="table table-light table-striped table-hover table-borderless" id="dataTableFahrzeuge">
        <thead>
        <tr>
            <th></th>
            <th>Kunde</th>
            <th>Hersteller</th>
            <th>Modell</th>
            <th>Kennzeichen</th>
            <th>Erstzulassung</th>
            <th>Laufleistung</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($fahrzeuges as $fahrzeuge)
            <tr class="align-middle">
                <td>
                    <div class="form-check ps-0 mb-0 mt-1">
                        <input type="checkbox" name="" id="" class="form-check-label" aria-label="delete" data-bs-toggle="collapse" data-bs-target="#fahrzeugLoeschenCollapse" role="button" aria-expanded="false" aria-controls="fahrzeugLoeschenCollapse">
                    </div>
                </td>
                <td id="fahrzeug" href="{{ route('backend.fahrzeugdaten.show', $fahrzeuge->id) }}">{{ $fahrzeuge->kunden_id ?: '---' }}</td>
                <td id="fahrzeug" href="{{ route('backend.fahrzeugdaten.show', $fahrzeuge->id) }}">{{ $fahrzeuge->fzd_hersteller ?: '---' }}</td>
                <td id="fahrzeug" href="{{ route('backend.fahrzeugdaten.show', $fahrzeuge->id) }}">{{ $fahrzeuge->fzd_modell ?: '---' }}</td>
                <td id="fahrzeug" href="{{ route('backend.fahrzeugdaten.show', $fahrzeuge->id) }}">{{ $fahrzeuge->fzd_kennzeichen ?: '---' }}</td>
                <td id="fahrzeug" href="{{ route('backend.fahrzeugdaten.show', $fahrzeuge->id) }}">{{ $fahrzeuge->fzd_erstzulassung == null ? '---' : \Carbon\Carbon::parse($fahrzeuge->fzd_erstzulassung)->format('d.m.Y') }}</td>
                <td id="fahrzeug" href="{{ route('backend.fahrzeugdaten.show', $fahrzeuge->id) }}">{{ number_format($fahrzeuge->fzd_laufleistung, 0, ' ', ' ') ?: '---' }}</td>
                <td class="text-end">
                    <form id="fahrzeug-loeschen-form" action="{{ route('backend.fahrzeugdaten.destroy', $fahrzeuge->id) }}" method="post">
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
