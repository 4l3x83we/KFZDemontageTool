<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: AngebotesController.php
 * User: ${USER}
 * Date: 19.${MONTH_NAME_FULL}.2023
 * Time: 5:47
 */

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Angebote;
use App\Models\Backend\Fahrzeugdaten;
use App\Models\Backend\Kunden;
use Illuminate\Http\Request;

class AngebotesController extends Controller
{
    public function index()
    {
        $page_title = 'Angebote';
        $angebotes = Angebote::all();

        return view('backend.angebote.index', compact('page_title', 'angebotes'));
    }

    public function create()
    {
        $page_title = 'Angebot erstellen';

        return view('backend.angebote.create', compact('page_title'));
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function show(Angebote $angebote)
    {
        $page_title = 'Angebot #' . $angebote->id;
        $fahrzeug = Fahrzeugdaten::where('id', $angebote->an_fahrzeug_id)->first();
        $kunden = Kunden::where('id', $angebote->an_kunden_id)->first();

        return view('backend.angebote.show', compact('page_title', 'angebote', 'fahrzeug', 'kunden'));
    }

    public function edit(Angebote $angebote)
    {
        $page_title = 'Angebot bearbeiten #' . $angebote->id;

        return view('backend.angebote.edit', compact('page_title'));
    }

    public function update(Request $request, Angebote $angebote)
    {
    }

    public function destroy(Angebote $angebote)
    {
    }
}
