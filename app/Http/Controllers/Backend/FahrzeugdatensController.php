<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: FahrzeugdatensController.php
 * User: ${USER}
 * Date: 8.${MONTH_NAME_FULL}.2023
 * Time: 8:8
 */

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Admin\fzklasse;
use App\Models\Backend\Admin\Hersteller;
use App\Models\Backend\Admin\Modell;
use App\Models\Backend\Fahrzeugdaten;
use App\Models\Backend\Laufleistung;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FahrzeugdatensController extends Controller
{
    public function index()
    {
        $page_title = 'Fahrzeugdaten';
        $fahrzeuges = Fahrzeugdaten::all();
        $herstellers = Hersteller::all();
        $modells = Modell::all();
        $laufleistungs = Laufleistung::all();

        return view('backend.fahrzeugdaten.index', compact('page_title', 'fahrzeuges', 'herstellers', 'laufleistungs', 'modells'));
    }

    public function create()
    {
        $page_title = 'Fahrzeug hinzufügen';
        $herstellers = Hersteller::all();
        $modells = Modell::all();
        $fzKlasses = fzklasse::all();
        $motorkats = Fahrzeugdaten::motorKategorie();
//        $fahrzeug = Fahrzeugdaten::first();

        return view('backend.fahrzeugdaten.create', compact('page_title',  'herstellers', 'modells', 'fzKlasses', 'motorkats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kunden_id' => 'nullable',
            'fzd_kennzeichen' => 'nullable',
            'fzd_laufleistung' => 'nullable',
            'fzd_hsn' => 'required',
            'fzd_tsn' => 'required',
            'fzd_id' => 'nullable',
            'fzd_hersteller' => 'nullable',
            'fzd_modell' => 'nullable',
            'fzd_type' => 'nullable',
            'fzd_fahrzeugklasse' => 'nullable',
            'fzd_getriebeart' => 'nullable',
            'fzd_eigengewicht' => 'nullable',
            'fzd_hoechstzul_gewicht' => 'nullable',
            'fzd_leistung' => 'nullable',
            'fzd_hubraum' => 'nullable',
            'fzd_tuev' => 'nullable|date',
            'fzd_letzte_zulassung' => 'nullable|date',
            'fzd_erstzulassung' => 'nullable|date',
            'fzd_genehmigungsdatum' => 'nullable|date',
            'fzd_motorkategorie' => 'nullable',
            'fzd_motorcode' => 'nullable',
            'fzd_farbcode' => 'nullable',
            'fzd_polizzennummer' => 'nullable',
            'fzd_zusatzinfo' => 'nullable',
        ]);

//        dd($request->all());

        Fahrzeugdaten::create(
            $request->all(),
        );

        return redirect(route('backend.fahrzeugdaten.index'))->with('success', 'Das Fahrzeug wurde erfolgreich angelegt.');
    }

    public function show(Fahrzeugdaten $fahrzeugdaten)
    {
        $page_title = $fahrzeugdaten->fzd_hersteller . ' - ' .  $fahrzeugdaten->fzd_modell . ' / ' . $fahrzeugdaten->fzd_kennzeichen;
        $fahrzeug = $fahrzeugdaten;
        $laufleistung = Laufleistung::where('fzd_fahrzeug_id', '=', $fahrzeugdaten->id)->latest()->first();
        $laufleistungs = Laufleistung::where('fzd_fahrzeug_id', '=', $fahrzeugdaten->id)->get();

        return view('backend.fahrzeugdaten.show', compact('fahrzeug', 'page_title', 'laufleistungs', 'laufleistung'));
    }

    public function edit(Fahrzeugdaten $fahrzeugdaten)
    {
        $page_title = $fahrzeugdaten->fzd_hersteller . ' - ' .  $fahrzeugdaten->fzd_modell . ' / ' . $fahrzeugdaten->fzd_kennzeichen;
        $herstellers = Hersteller::all();
        $modells = Modell::all();
        $fzKlasses = fzklasse::all();
        $motorkats = Fahrzeugdaten::motorKategorie();
        $fahrzeug = $fahrzeugdaten;
        $laufleistung = Laufleistung::where('fzd_fahrzeug_id', '=', $fahrzeugdaten->id)->latest()->first();
        $laufleistungs = Laufleistung::where('fzd_fahrzeug_id', '=', $fahrzeugdaten->id)->get();

        return view('backend.fahrzeugdaten.edit', compact('fahrzeug', 'page_title', 'herstellers', 'modells', 'fzKlasses', 'motorkats', 'laufleistung', 'laufleistungs'));
    }

    public function update(Request $request, Fahrzeugdaten $fahrzeugdaten)
    {
        $fahrzeugdaten->update($request->all());
        $fahrzeugdaten->save();

        return redirect(route('backend.fahrzeugdaten.index'))->with('success', 'Das Fahrzeug wurde erfolgreich geupdatet.');
    }

    public function destroy(Fahrzeugdaten $fahrzeugdaten)
    {
        $fahrzeugdaten->delete();

        return redirect(route('backend.fahrzeugdaten.index'))->with('error', 'Das Fahrzeug wurde erfolgreich gelöscht.');
    }
}
