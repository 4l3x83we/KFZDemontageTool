<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: LaufleistungController.php
 * User: ${USER}
 * Date: 17.${MONTH_NAME_FULL}.2023
 * Time: 11:43
 */

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Admin\Fahrzeuge;
use App\Models\Backend\Fahrzeugdaten;
use App\Models\Backend\Laufleistung;
use Illuminate\Http\Request;

class LaufleistungController extends Controller
{
    public function store(Request $request)
    {
        $laufleistung = new Laufleistung();
        $laufleistung->fzd_fahrzeug_id = $request->fahrzeug_id;
        $laufleistung->fzd_km_stand = $request->fzd_km_stand;
        $laufleistung->fzd_betriebsstunden = $request->fzd_betriebsstunden;
        $laufleistung->fzd_datum = $request->fzd_datum;
        $laufleistung->save();

        $fahrzeug = Fahrzeugdaten::where('id', '=', $request->fahrzeug_id)->first();
        if ($request->fzd_km_stand !== null) {
            $fahrzeug->fzd_laufleistung = $request->fzd_km_stand;
        }
        if ($request->fzd_betriebsstunden !== null) {
            $fahrzeug->fzd_laufleistung = $request->fzd_betriebsstunden;
        }
        $fahrzeug->save();

        return back()->with('success', 'Laufleistung wurde erfolgreich gespeichert.');
    }

    public function destroy(Laufleistung $laufleistung)
    {
        $laufleistung->delete();

        return back()->with('error', 'Laufleistung wurde erfolgreich gelöscht.');
    }
}
