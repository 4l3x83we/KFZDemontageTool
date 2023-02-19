<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: HerstellersController.php
 * User: ${USER}
 * Date: 10.${MONTH_NAME_FULL}.2023
 * Time: 5:32
 */

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Backend\Admin\Hersteller;
use Illuminate\Http\Request;

class HerstellersController extends Controller
{
    public function index()
    {
        $page_title = 'Hersteller';
        $herstellers = Hersteller::all();

        return view('backend.intern.hersteller.index', compact('page_title', 'herstellers'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $herstellerID = Hersteller::count() + 1;

        Hersteller::create([
            'hersteller_id' => $herstellerID,
            'hersteller_name' => $request->hersteller_name,
        ]);

        return redirect(route('backend.intern.hersteller.index'));
    }

    public function show(Hersteller $hersteller)
    {
    }

    public function edit(Hersteller $hersteller)
    {
    }

    public function update(Request $request, Hersteller $hersteller)
    {
    }

    public function destroy(Hersteller $hersteller)
    {
    }
}
