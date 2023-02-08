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
use App\Models\Backend\Fahrzeugdaten;
use Illuminate\Http\Request;

class FahrzeugdatensController extends Controller
{
    public function index()
    {
        $page_title = 'Fahrzeugdaten';

        return view('backend.fahrzeugdaten.index', compact('page_title'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Fahrzeugdaten $fahrzeugdaten)
    {
    }

    public function edit(Fahrzeugdaten $fahrzeugdaten)
    {
    }

    public function update(Request $request, Fahrzeugdaten $fahrzeugdaten)
    {
    }

    public function destroy(Fahrzeugdaten $fahrzeugdaten)
    {
    }
}
