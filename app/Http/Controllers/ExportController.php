<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: ExportController.php
 * User: ${USER}
 * Date: 15.${MONTH_NAME_FULL}.2023
 * Time: 14:13
 */

namespace App\Http\Controllers;

use App\Exports\ExportAngebote;
use App\Exports\ExportFahrzeuge;
use App\Exports\ExportKunden;
use Maatwebsite\Excel\Excel;

class ExportController extends Controller
{
    public function exportFahrzeugCSVFile()
    {
        return (new ExportFahrzeuge)->download('fahrzeuge.csv', Excel::CSV);
    }

    public function exportKundenCSVFile()
    {
        return (new ExportKunden)->download('kunden.csv', Excel::CSV);
    }

    public function exportAngeboteCSVFile()
    {
        return (new ExportAngebote)->download('angebote.csv', Excel::CSV);
    }
}
