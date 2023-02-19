<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: FahrzeugesController.php
 * User: ${USER}
 * Date: 10.${MONTH_NAME_FULL}.2023
 * Time: 5:33
 */

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Backend\Admin\Fahrzeuge;
use Illuminate\Http\Request;

class FahrzeugesController extends Controller
{
    public function index()
    {
        $page_title = 'Fahrzeuge';

        return view('backend.intern.fahrzeuge.index', compact('page_title'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Fahrzeuge $fahrzeuge)
    {
    }

    public function edit(Fahrzeuge $fahrzeuge)
    {
    }

    public function update(Request $request, Fahrzeuge $fahrzeuge)
    {
    }

    public function destroy(Fahrzeuge $fahrzeuge)
    {
    }
}
