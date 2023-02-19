<div class="row g-2 px-3 py-2">
    <div class="col-lg-12 pb-2">
        <div class="fw-bold fs-3">{{ $page_title }}</div>
    </div>
    <div class="col-lg-12 pb-2">
        @isset($fahrzeug)
            @if(Request::is('backend/stammdaten/fahrzeugdaten/'.$fahrzeug->id.'/edit'))
                <a href="#" class="btn btn-secondary me-2"><em class="fa-solid fa-arrow-up-right-from-square flip me-1 text-primary"></em> Kundename</a>
            @else
                <a href="#" class="btn btn-secondary me-2"><em class="fa-solid fa-user me-1"></em> Kunde wählen</a>
            @endif
        @endisset
    </div>
    <div class="col-lg-6 pb-2">
        <div class="row g-2">

            <div class="col-lg-6 mb-2">
                <label for="fzd_kennzeichen" class="form-label mb-0">Kennzeichen A</label>
                <input type="text" name="fzd_kennzeichen" id="fzd_kennzeichen" class="form-control @error('fzd_kennzeichen') is-invalid @enderror" value="{{ old('fzd_kennzeichen') }}@isset($fahrzeug){{ $fahrzeug->fzd_kennzeichen }}@endisset">
            </div>
            <div class="col-lg-6 mb-2">
                <label for="fzd_laufleistung" class="form-label mb-0">Laufleistung</label>
                <div class="input-group">
                    <input type="text" name="fzd_laufleistung" id="fzd_laufleistung" class="form-control border-end-0 @error('fzd_laufleistung') is-invalid @enderror" placeholder="Hinzufügen" @isset($fahrzeug) value="{{ $fahrzeug->fzd_laufleistung }}" disabled @else disabled @endisset >
                    <span class="input-group-text" id="fzd_laufleistung" aria-describedby="fzd_laufleistung" data-bs-toggle="modal" data-bs-target="#laufleistungModal"><em class="fa-solid fa-pen"></em></span>
                </div>
            </div>

            <div class="col-lg-6 mb-2">
                <label for="fzd_hsn" class="form-label mb-0">HSN 2.1</label>
                <input type="text" name="fzd_hsn" id="fzd_hsn" class="form-control @error('fzd_hsn') is-invalid @enderror" value="{{ old('fzd_hsn') }}@isset($fahrzeug){{ $fahrzeug->fzd_hsn }}@endisset">
                @error('fzd_hsn')
                    <small class="form-text text-danger">Bitte gib deine HSN ein.</small>
                @enderror
            </div>
            <div class="col-lg-6 mb-2">
                <label for="fzd_tsn" class="form-label mb-0">TSN 2.2</label>
                <input type="text" name="fzd_tsn" id="fzd_tsn" class="form-control @error('fzd_tsn') is-invalid @enderror" value="{{ old('fzd_tsn') }}@isset($fahrzeug){{ $fahrzeug->fzd_tsn }}@endisset">
                @error('fzd_tsn')
                    <small class="form-text text-danger">Bitte gib deine TSN ein.</small>
                @enderror
            </div>

            <div class="col-lg-12 mb-2">
                <label for="fzd_id" class="form-label mb-0">Fahrzeugidentifikationsnummer E</label>
                <div class="input-group">
                    <input type="text" name="fzd_id" id="fzd_id" class="form-control border-end-0 @error('fzd_id') is-invalid @enderror" value="{{ old('fzd_id') }}@isset($fahrzeug){{ $fahrzeug->fzd_id }}@endisset" maxlength="17">
                    <span class="input-group-text bg-white" id="finChars">0</span>
                </div>
            </div>

            <div class="col-lg-12 mb-2">
                <label for="fzd_hersteller" class="form-label mb-0">Hersteller D.1
                    <span class="text-danger">*</span></label>
                <select id="fzd_hersteller" name="fzd_hersteller" class="form-select @error('fzd_hersteller') is-invalid @enderror">
                    @isset($fahrzeug)
                        @if(Request::is('backend/stammdaten/fahrzeugdaten/'.$fahrzeug->id.'/edit'))
                            <option value="{{ $fahrzeug->fzd_hersteller }}" @isset($fahrzeug) @if($fahrzeug->fzd_hersteller) selected @endif @endisset>{{ $fahrzeug->fzd_hersteller }}</option>
                        @endif
                    @endisset
                    @foreach($herstellers as $hersteller)
                        <option value="{{ $hersteller->hersteller_name }}" @isset($fahrzeug) @if($fahrzeug->fzd_hersteller === $hersteller->hersteller || old('fzd_hersteller')) selected @endif @else {{ (old('fzd_hersteller') == $hersteller->hersteller_name) ? 'selected' : '' }} @endisset>{{ $hersteller->hersteller_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-lg-12 mb-2">
                <label for="fzd_modell" class="form-label mb-0">Modell / Handelsbezeichnung D.3
                    <span class="text-danger">*</span></label>
                <select id="fzd_modell" name="fzd_modell" class="form-select @error('fzd_modell') is-invalid @enderror">
                    @isset($fahrzeug)
                        @if(Request::is('backend/stammdaten/fahrzeugdaten/'.$fahrzeug->id.'/edit'))
                            <option value="{{ $fahrzeug->fzd_modell }}" @isset($fahrzeug) @if($fahrzeug->fzd_modell) selected @endif @endisset>{{ $fahrzeug->fzd_modell }}</option>
                        @endif
                    @else
                        <option value="0" @if (old('fzd_modell') == false){{'selected=selected'}}@endif></option>
                    @endisset
                </select>
            </div>

            <div class="col-lg-12 mb-2">
                <label for="fzd_type" class="form-label mb-0">Type / Variante / Version D.2</label>
                <select id="fzd_type" name="fzd_type" class="form-select @error('fzd_type') is-invalid @enderror">
                    <option {{ old('fzd_type' == '') ?: 'selected' }}></option>
                    <option value=""></option>
                </select>
            </div>

            <div class="col-lg-12 mb-2">
                <label for="fzd_fahrzeugklasse" class="form-label mb-0">Fahrzeugklasse J</label>
                <select id="fzd_fahrzeugklasse" name="fzd_fahrzeugklasse" class="form-select @error('fzd_fahrzeugklasse') is-invalid @enderror">
                    <option {{ old('fzd_fahrzeugklasse' == '') ?: 'selected' }}></option>
                    @foreach($fzKlasses as $fzKlasse)
                        <option value="{{ $fzKlasse->fzk_name }}" @isset($fahrzeug) @if($fahrzeug->fzd_fahrzeugklasse === $fzKlasse->fzk_name || old('fzd_fahrzeugklasse')) selected @endif @else {{ (old('fzd_fahrzeugklasse') == $fzKlasse->fzk_name) ? 'selected' : '' }} @endisset>
                            {{ $fzKlasse->fzk_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-lg-12 mb-2">
                <label for="fzd_getriebeart" class="form-label mb-0">Getriebeart</label>
                <select id="fzd_getriebeart" name="fzd_getriebeart" class="form-select @error('fzd_getriebeart') is-invalid @enderror">
                    <option {{ old('fzd_getriebeart' == '') ?: 'selected' }}></option>
                    <option value="automatisch" @isset($fahrzeug) @if($fahrzeug->fzd_getriebeart === 'automatisch' || old('fzd_getriebeart')) selected @endif @else {{ (old('fzd_getriebeart') == 'automatisch') ? 'selected' : '' }} @endisset>automatish</option>
                    <option value="manuell" @isset($fahrzeug) @if($fahrzeug->fzd_getriebeart === 'manuell' || old('fzd_getriebeart')) selected @endif @else {{ (old('fzd_getriebeart') == 'manuell') ? 'selected' : '' }} @endisset>manuell</option>
                </select>
            </div>

        </div>
    </div>
    <div class="col-lg-6 pb-2">
        <div class="row g-2">

            <div class="col-lg-6 mb-2">
                <label for="fzd_eigengewicht" class="form-label mb-0">Eigengewicht G</label>
                <input type="text" name="fzd_eigengewicht" id="fzd_eigengewicht" class="form-control @error('fzd_eigengewicht') is-invalid @enderror" value="{{ old('fzd_eigengewicht') }}@isset($fahrzeug){{ $fahrzeug->fzd_eigengewicht }}@endisset">
            </div>

            <div class="col-lg-6 mb-2">
                <label for="fzd_hoechstzul_gewicht" class="form-label mb-0">höchstzul. Gesamtgewicht F.1</label>
                <input type="text" name="fzd_hoechstzul_gewicht" id="fzd_hoechstzul_gewicht" class="form-control @error('fzd_hoechstzul_gewicht') is-invalid @enderror" value="{{ old('fzd_hoechstzul_gewicht') }}@isset($fahrzeug){{ $fahrzeug->fzd_hoechstzul_gewicht }}@endisset">
            </div>

            <div class="col-lg-6 mb-2">
                <label for="fzd_leistung" class="form-label mb-0">Leistung P.2</label>
                <input type="text" name="fzd_leistung" id="fzd_leistung" class="form-control @error('fzd_leistung') is-invalid @enderror" value="{{ old('fzd_leistung') }}@isset($fahrzeug){{ $fahrzeug->fzd_leistung }}@endisset">
            </div>

            <div class="col-lg-6 mb-2">
                <label for="fzd_hubraum" class="form-label mb-0">Hubraum P.1</label>
                <input type="text" name="fzd_hubraum" id="fzd_hubraum" class="form-control @error('fzd_hubraum') is-invalid @enderror" value="{{ old('fzd_hubraum') }}@isset($fahrzeug){{ $fahrzeug->fzd_hubraum }}@endisset">
            </div>

            <div class="col-lg-12 my-3"></div>

            <div class="col-lg-6 mb-2">
                <label for="fzd_tuev" class="form-label mb-0">Nächste Überprüfung</label>
                <input type="date" name="fzd_tuev" id="fzd_tuev" class="form-control @error('fzd_tuev') is-invalid @enderror" value="{{ old('fzd_tuev') }}@isset($fahrzeug){{ \Carbon\Carbon::parse($fahrzeug->fzd_tuev)->format('Y-m-d') }}@endisset">
            </div>

            <div class="col-lg-6 mb-2">
                <label for="fzd_letzte_zulassung" class="form-label mb-0">Letzte Zulassung</label>
                <input type="date" name="fzd_letzte_zulassung" id="fzd_letzte_zulassung" class="form-control @error('fzd_letzte_zulassung') is-invalid @enderror" value="{{ old('fzd_letzte_zulassung') }}@isset($fahrzeug){{ \Carbon\Carbon::parse($fahrzeug->fzd_letzte_zulassung)->format('Y-m-d') }}@endisset">
            </div>

            <div class="col-lg-6 mb-2">
                <label for="fzd_erstzulassung" class="form-label mb-0">Erstzulassung B</label>
                <input type="date" name="fzd_erstzulassung" id="fzd_erstzulassung" class="form-control @error('fzd_erstzulassung') is-invalid @enderror" value="{{ old('fzd_erstzulassung') }}@isset($fahrzeug){{ \Carbon\Carbon::parse($fahrzeug->fzd_erstzulassung)->format('Y-m-d') }}@endisset">
            </div>

            <div class="col-lg-6 mb-2">
                <label for="fzd_genehmigungsdatum" class="form-label mb-0">Genehmigungsdatum 6</label>
                <input type="date" name="fzd_genehmigungsdatum" id="fzd_genehmigungsdatum" class="form-control @error('fzd_genehmigungsdatum') is-invalid @enderror" value="{{ old('fzd_genehmigungsdatum') }}@isset($fahrzeug){{ \Carbon\Carbon::parse($fahrzeug->fzd_genehmigungsdatum)->format('Y-m-d') }}@endisset">
            </div>

            <div class="col-lg-12 my-3"></div>

            <div class="col-lg-12 mb-2">
                <label for="fzd_motorkategorie" class="form-label mt-2 pt-1 mb-0">Motor-Kategorie</label>
                <select id="fzd_motorkategorie" name="fzd_motorkategorie" class="form-select @error('fzd_motorkategorie') is-invalid @enderror">
                    <option {{ old('fzd_motorkategorie' == '') ?: 'selected' }}></option>
                    @foreach($motorkats as $motorkat)
                        <option value="{{ $motorkat }}" @isset($fahrzeug) @if($fahrzeug->fzd_motorkategorie === $motorkat || old('fzd_motorkategorie')) selected @endif @else {{ (old('fzd_motorkategorie') == $motorkat) ? 'selected' : '' }} @endisset>{{ $motorkat }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-lg-6 mb-2">
                <label for="fzd_motorcode" class="form-label mb-0">Motor-Code 10</label>
                <input type="text" name="fzd_motorcode" id="fzd_motorcode" class="form-control @error('fzd_motorcode') is-invalid @enderror" value="{{ old('fzd_motorcode') }}@isset($fahrzeug){{ $fahrzeug->fzd_motorcode }}@endisset">
            </div>

            <div class="col-lg-6 mb-2">
                <label for="fzd_farbcode" class="form-label mb-0">Farb-Code R</label>
                <input type="text" name="fzd_farbcode" id="fzd_farbcode" class="form-control @error('fzd_farbcode') is-invalid @enderror" value="{{ old('fzd_farbcode') }}@isset($fahrzeug){{ $fahrzeug->fzd_farbcode }}@endisset">
            </div>

            <div class="col-lg-12 mb-2">
                <label for="fzd_polizzennummer" class="form-label mb-0">Polizzennummer</label>
                <input type="text" name="fzd_polizzennummer" id="fzd_polizzennummer" class="form-control @error('fzd_polizzennummer') is-invalid @enderror" value="{{ old('fzd_polizzennummer') }}@isset($fahrzeug){{ $fahrzeug->fzd_polizzennummer }}@endisset">
            </div>

        </div>
    </div>
    <div class="col-lg-12 pb-2">
        <label for="fzd_zusatzinfo" class="form-label mb-0">Zusatzinfo</label>
        <textarea class="form-control @error('fzd_zusatzinfo') is-invalid @enderror" name="fzd_zusatzinfo" id="fzd_zusatzinfo" rows="3">{{ old('fzd_zusatzinfo') }}@isset($fahrzeug){!! $fahrzeug->fzd_zusatzinfo !!}@endisset</textarea>
    </div>
    <div class="col-lg-12 pb-2">
        <button type="submit" class="btn btn-success me-2"><em class="fa-solid fa-save me-1"></em>
            Speichern
        </button>
        <a href="{{ route('backend.fahrzeugdaten.index') }}" class="btn btn-danger me-2"><em class="fa-solid fa-cancel me-1"></em> Abbrechen</a>
    </div>
</div>
