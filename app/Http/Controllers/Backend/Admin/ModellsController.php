<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: ModellsController.php
 * User: ${USER}
 * Date: 10.${MONTH_NAME_FULL}.2023
 * Time: 5:32
 */

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Backend\Admin\Hersteller;
use App\Models\Backend\Admin\Modell;
use Illuminate\Http\Request;

class ModellsController extends Controller
{
    public function index()
    {
        $page_title = 'Modell';
        $herstellers = Hersteller::all();
        $modells = Modell::all();

        return view('backend.intern.modell.index', compact('page_title', 'modells', 'herstellers'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $modellID = Modell::count() + 1;
        $hersteller = Hersteller::where('hersteller_id', $request->hersteller_id)->first();

        Modell::create([
//            'hersteller_id' => $hersteller->hersteller_id,
            'hersteller_id' => 5,
//            'hersteller_name' => $hersteller->hersteller_name,
            'hersteller_name' => 'BMW',
            'modell_id' => $modellID,
            'modell_name' => $request->modell_name,
        ]);

        return redirect(route('backend.intern.modell.index'));
    }

    public function show(Modell $modell)
    {
    }

    public function edit(Modell $modell)
    {
    }

    public function update(Request $request, Modell $modell)
    {
    }

    public function destroy(Modell $modell)
    {
    }
}
