<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: SearchController.php
 * User: ${USER}
 * Date: 16.${MONTH_NAME_FULL}.2023
 * Time: 3:4
 */

namespace App\Http\Controllers;

use App\Models\Backend\Admin\Modell;
use App\Models\Backend\Fahrzeugdaten;
use App\Models\Backend\Kunden;

class SearchController extends Controller
{
    public function getModell($fahrzeugdaten)
    {
        if ($fahrzeugdaten != '') {
            $modells = Modell::where('hersteller_name', '=', $fahrzeugdaten)->select('modell_name')->distinct()->get();
        }
        return response()->json($modells);
    }

    public function getFahrzeuges($fahrzeugdaten)
    {
        if ($fahrzeugdaten != '') {
            $fahrzeuges = Fahrzeugdaten::where('id', '=', $fahrzeugdaten)->distinct()->get();
        }
        return response()->json($fahrzeuges);
    }

    public function getKundens($kunden)
    {
        if ($kunden != '') {
            $kundens = Kunden::where('id', '=', $kunden)->distinct()->get();
        }
        return response()->json($kundens);
    }
}
