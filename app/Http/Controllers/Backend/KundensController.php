<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: KundensController.php
 * User: ${USER}
 * Date: 17.${MONTH_NAME_FULL}.2023
 * Time: 16:0
 */

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Fahrzeugdaten;
use App\Models\Backend\Kunden;
use Illuminate\Http\Request;

class KundensController extends Controller
{
    public function index()
    {
        $page_title = 'Kunden';
        $kundens = Kunden::all();

        return view('backend.kunden.index', compact('page_title', 'kundens'));
    }

    public function create()
    {
        $page_title = 'Kunden';

        return view('backend.kunden.create', compact('page_title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kd_nachname' => 'required',
            'kd_land' => 'required',
        ]);

        Kunden::create($request->all());

        return redirect(route('backend.kunden.index'))->with('success', 'Kunde wurde erfolgreich angelegt.');
    }

    public function show(Kunden $kunden)
    {
        $page_title = 'Kunden';
        $fahrzeugs = Fahrzeugdaten::where('kunden_id', $kunden->id)->get();

        return view('backend.kunden.show', compact('page_title', 'kunden', 'fahrzeugs'));
    }

    public function edit(Kunden $kunden)
    {
        $page_title = 'Kunden';

        return view('backend.kunden.edit', compact('page_title', 'kunden'));
    }

    public function update(Request $request, Kunden $kunden)
    {
        $request->validate([
            'kd_nachname' => 'required',
            'kd_land' => 'required',
        ]);

        $kunden->update($request->all());
        $kunden->save();

        return redirect(route('backend.kunden.index'))->with('success', 'Kunde wurde erfolgreich geändert.');
    }

    public function destroy(Kunden $kunden)
    {
        $kunden->delete();

        return redirect(route('backend.kunden.index'))->with('error', 'Kunde wurde erfolgreich gelöscht.');
    }
}
