<div class="d-flex align-items-center py-3">
    <a href="{{ route('backend.angebote.export-angebote-csvfile') }}" class="btn btn-secondary btn-sm ms-auto"><em class="fa-solid fa-download pe-2"></em> Exportieren</a>
    <a href="{{ route('backend.angebote.create') }}" class="btn btn-success btn-sm ms-3"><em class="fa-solid fa-plus pe-2"></em> Angebot erstellen</a>
</div>

<div class="table-responsive py-3">
    <table class="table table-light table-striped table-borderless table-hover" id="dataTableAngebot">
        <thead>
        <tr>
            <th></th>
            <th>Nummer</th>
            <th>Erstellt am</th>
            <th>Kunde</th>
            <th>Fahrzeug</th>
            <th>Ertrag</th>
            <th>Gesamt</th>
            <th class="text-end" style="min-width: 50px;"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($angebotes as $angebote)
            <tr class=align-middle>
                <td></td>
                <td id="angebot" href="{{ route('backend.angebote.show', $angebote->id) }}">{{ $angebote->id }}</td>
                <td id="angebot" href="{{ route('backend.angebote.show', $angebote->id) }}">{{ \Carbon\Carbon::parse($angebote->created_at)->format('d.m.Y') }}</td>
                <td id="angebot" href="{{ route('backend.angebote.show', $angebote->id) }}">{{ $angebote->kunden->kd_vorname . ' ' . $angebote->kunden->kd_nachname }}</td>
                <td id="angebot" href="{{ route('backend.angebote.show', $angebote->id) }}">{{ $angebote->fahrzeuge->fzd_kennzeichen . ' | ' . $angebote->fahrzeuge->fzd_hersteller . ' ' . $angebote->fahrzeuge->fzd_modell }}</td>
                <td id="angebot" href="{{ route('backend.angebote.show', $angebote->id) }}">
                    {{ $angebote->kd_handy }}<br>
                    {{ $angebote->kd_telefon }}
                </td>
                <td class="text-success" id="angebot" href="{{ route('backend.angebote.show', $angebote->id) }}">{{ number_format($angebote->an_gesamt_inkl_mwst, 2, ',', '.') . ' €' }}</td>
                <td class="text-end" style="min-width: 50px;">
                    <form action="{{ route('backend.angebote.destroy', $angebote->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn link-secondary p-0 border-0"><em class="fa-solid fa-trash"></em></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
