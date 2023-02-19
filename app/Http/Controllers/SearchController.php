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

class SearchController extends Controller
{
    public function getModell($fahrzeugdaten)
    {
        if ($fahrzeugdaten != '') {
            $modells = Modell::where('hersteller_name', '=', $fahrzeugdaten)->select('modell_name')->distinct()->get();
        }
        return response()->json($modells);
    }
}
