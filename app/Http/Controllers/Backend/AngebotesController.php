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
use Illuminate\Http\Request;

class AngebotesController extends Controller
{
    public function index()
    {
        $page_title = 'Angebote';

        return view('backend.angebote.index', compact('page_title'));
    }

    public function create()
    {
        $page_title = 'Angebote';

        return view('backend.angebote.create', compact('page_title'));
    }

    public function store(Request $request)
    {
    }

    public function show(Angebote $angebote)
    {
        $page_title = 'Angebote';

        return view('backend.angebote.show', compact('page_title'));
    }

    public function edit(Angebote $angebote)
    {
        $page_title = 'Angebote';

        return view('backend.angebote.edit', compact('page_title'));
    }

    public function update(Request $request, Angebote $angebote)
    {
    }

    public function destroy(Angebote $angebote)
    {
    }
}
