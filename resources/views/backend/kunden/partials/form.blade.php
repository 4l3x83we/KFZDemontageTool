<div class="row g-2 px-3 py-2">
    <div class="col-lg-12">
        <div class="fw-bold fs-3">{{ $page_title }}</div>
    </div>
    <div class="row g-3">
        <div class="col-lg-4">
            <div class="d-flex flex-column gap-3">
                <div class="d-flex align-items-center gap-3">
                    <div class="w-50">
                        <label for="kd_anrede" class="form-label mb-0">Anrede</label>
                        <select id="kd_anrede" name="kd_anrede" class="form-select form-select-sm">
                            <option></option>
                            <option value="Herr" @isset($kunden) @if($kunden->kd_anrede === 'Herr' || old('kd_anrede')) selected @endif @else {{ (old('kd_anrede') === 'Herr') ? 'selected' : '' }} @endisset>Herr</option>
                            <option value="Frau" @isset($kunden) @if($kunden->kd_anrede === 'Frau' || old('kd_anrede')) selected @endif @else {{ (old('kd_anrede') === 'Frau') ? 'selected' : '' }} @endisset>Frau</option>
                            <option value="Firma" @isset($kunden) @if($kunden->kd_anrede === 'Firma' || old('kd_anrede')) selected @endif @else {{ (old('kd_anrede') === 'Firma') ? 'selected' : '' }} @endisset>Firma</option>
                            <option value="Familie" @isset($kunden) @if($kunden->kd_anrede === 'Familie' || old('kd_anrede')) selected @endif @else {{ (old('kd_anrede') === 'Familie') ? 'selected' : '' }} @endisset>Familie</option>
                        </select>
                    </div>
                    <div class="w-50">
                        <label for="kd_title" class="form-label mb-0">Title</label>
                        <input type="text" class="form-control form-control-sm" id="kd_title" name="kd_title" value="{{ old('kd_title') }}@isset($kunden){{ $kunden->kd_title }}@endisset">
                    </div>
                </div>
                <div class="w-100">
                    <label for="kd_vorname" class="form-label mb-0">Vorname</label>
                    <input type="text" class="form-control form-control-sm" id="kd_vorname" name="kd_vorname" value="{{ old('kd_vorname') }}@isset($kunden){{ $kunden->kd_vorname }}@endisset">
                </div>
                <div class="w-100">
                    <label for="kd_nachname" class="form-label mb-0">Nachname <strong class="text-danger">*</strong></label>
                    <input type="text" class="form-control form-control-sm" id="kd_nachname" name="kd_nachname" value="{{ old('kd_nachname') }}@isset($kunden){{ $kunden->kd_nachname }}@endisset">
                </div>
                <div class="w-100">
                    <label for="kd_ex_address" class="form-label mb-0">Extra Adresszeile (wird unter Namen gedruckt)</label>
                    <input type="text" class="form-control form-control-sm" id="kd_ex_address" name="kd_ex_address" value="{{ old('kd_ex_address') }}@isset($kunden){{ $kunden->kd_ex_address }}@endisset">
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="d-flex flex-column gap-3">
                <div class="w-100">
                    <label for="kd_strasse_hausnr" class="form-label mb-0">Straße und Hausnummer</label>
                    <input type="text" class="form-control form-control-sm" id="kd_strasse_hausnr" name="kd_strasse_hausnr" value="{{ old('kd_strasse_hausnr') }}@isset($kunden){{ $kunden->kd_strasse_hausnr }}@endisset">
                </div>
                <div class="d-flex align-items-center gap-3">
                    <div class="w-25">
                        <label for="kd_plz" class="form-label mb-0">PLZ</label>
                        <input type="text" class="form-control form-control-sm" id="kd_plz" name="kd_plz" maxlength="5" value="{{ old('kd_plz') }}@isset($kunden){{ $kunden->kd_plz }}@endisset">
                    </div>
                    <div class="w-75">
                        <label for="kd_ort" class="form-label mb-0">Ort</label>
                        <input type="text" class="form-control form-control-sm" id="kd_ort" name="kd_ort" value="{{ old('kd_ort') }}@isset($kunden){{ $kunden->kd_ort }}@endisset">
                    </div>
                </div>
                <div class="w-100">
                    <label for="kd_land" class="form-label mb-0">Land <strong class="text-danger">*</strong></label>
                    <input type="text" class="form-control form-control-sm" id="kd_land" name="kd_land" value="{{ old('kd_land') }}@isset($kunden){{ $kunden->kd_land }}@endisset">
                </div>
                <div class="w-100">
                    <label for="kd_handy" class="form-label mb-0">Handy</label>
                    <input type="tel" class="form-control form-control-sm" id="kd_handy" name="kd_handy" value="{{ old('kd_handy') }}@isset($kunden){{ $kunden->kd_handy }}@endisset">
                </div>
                <div class="w-100">
                    <label for="kd_telefon" class="form-label mb-0">Telefon</label>
                    <input type="tel" class="form-control form-control-sm" id="kd_telefon" name="kd_telefon" value="{{ old('kd_telefon') }}@isset($kunden){{ $kunden->kd_telefon }}@endisset">
                </div>
                <div class="w-100">
                    <label for="kd_email" class="form-label mb-0">E-Mail Adresse</label>
                    <input type="email" class="form-control form-control-sm" id="kd_email" name="kd_email" value="{{ old('kd_email') }}@isset($kunden){{ $kunden->kd_email }}@endisset">
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="d-flex  flex-column gap-3">
                <div class="w-100">
                    <label for="kd_geburtstag" class="form-label mb-0">Geburtstag</label>
                    <input type="date" class="form-control form-control-sm" id="kd_geburtstag" name="kd_geburtstag" value="{{ old('kd_geburtstag') }}@isset($kunden){{ $kunden->kd_geburtstag }}@endisset">
                </div>
                <div class="w-100">
                    <label for="kd_uid" class="form-label mb-0">UID</label>
                    <input type="text" class="form-control form-control-sm" id="kd_uid" name="kd_uid" value="{{ old('kd_uid') }}@isset($kunden){{ $kunden->kd_uid }}@endisset">
                </div>
                <div class="w-100">
                    <label for="kd_zusatzinfo" class="form-label mb-0">Zusatzinfo</label>
                    <textarea class="form-control form-control-sm" id="kd_zusatzinfo" name="kd_zusatzinfo" rows="8">{{ old('kd_zusatzinfo') }}@isset($kunden){{ $kunden->kd_zusatzinfo }}@endisset</textarea>
                </div>
                <div class="w-100">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="kd_zusatzinfo_check" name="kd_zusatzinfo_check" value="{{ old('kd_zusatzinfo_check') }}@isset($kunden){{ $kunden->kd_zusatzinfo_check }}@endisset">
                        <label for="kd_zusatzinfo_check" class="form-check-label mb-0">Zusatzinfo auf Angebote und Rechnungen drucken</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-3">
            <button type="submit" class="btn btn-success"><em class="fa-solid fa-plus pe-2"></em> Kunden speichern</button>
            <a href="{{ route('backend.kunden.index') }}" class="btn btn-danger">Verwerfen</a>
        </div>
    </div>
</div>
