<div class="d-flex align-items-center py-3">
    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#kundenModal">
        {{ \Carbon\Carbon::now()->isoFormat('MMMM') }}
    </button>
    <a href="" class="btn btn-secondary btn-sm ms-3"><em class="fa-solid fa-download pe-2"></em> Exportieren</a>
    <span class="ms-3">@if(count($kundens) == 1) {{ count($kundens) }} Kunde @else {{ count($kundens) }} Kunden @endif</span>
</div>

<div class="table-responsive py-3">
    <table class="table table-light table-striped table-borderless table-hover" id="dataTableKunden">
        <thead>
        <tr>
            <th>Alter</th>
            <th>Geburtstag</th>
            <th>Name</th>
            <th>Ort</th>
            <th>Straße</th>
            <th>Telefon</th>
            <th>E-Mail</th>
            <th class="text-end" style="min-width: 50px;"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($kundens as $kunden)
            @if(\Carbon\Carbon::parse($kunden->kd_geburtstag)->format('m') == date('m'))
            <tr class=align-middle>
                <td id="kunden" href="{{ route('backend.kunden.show', $kunden->id) }}">@if($kunden->kd_geburtstag) {{ \Carbon\Carbon::parse($kunden->kd_geburtstag)->age + 1 . ' Jahre' }} @endif</td>
                <td id="kunden" href="{{ route('backend.kunden.show', $kunden->id) }}">@if($kunden->kd_geburtstag) {{ \Carbon\Carbon::parse($kunden->kd_geburtstag)->format('d.m.Y') }} @endif</td>
                <td id="kunden" href="{{ route('backend.kunden.show', $kunden->id) }}">{{ $kunden->kd_vorname . ' ' . $kunden->kd_nachname }}</td>
                <td id="kunden" href="{{ route('backend.kunden.show', $kunden->id) }}">{{ $kunden->kd_plz . ' ' . $kunden->kd_ort }}</td>
                <td id="kunden" href="{{ route('backend.kunden.show', $kunden->id) }}">{{ $kunden->kd_strasse_hausnr }}</td>
                <td id="kunden" href="{{ route('backend.kunden.show', $kunden->id) }}">
                    {{ $kunden->kd_handy }}<br>
                    {{ $kunden->kd_telefon }}
                </td>
                <td id="kunden" href="{{ route('backend.kunden.show', $kunden->id) }}">{{ $kunden->kd_email }}</td>
                <td class="text-end" style="min-width: 50px;">
                    <form action="{{ route('backend.kunden.destroy', $kunden->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn link-secondary p-0 border-0"><em class="fa-solid fa-trash"></em></button>
                    </form>
                </td>
            </tr>
            @elseif(isset($kunden->kd_geburtstag))

            @endif
        @endforeach
        </tbody>
    </table>
</div>
