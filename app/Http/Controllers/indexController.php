<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: indexController.php
 * User: ${USER}
 * Date: 4.${MONTH_NAME_FULL}.2023
 * Time: 4:17
 */

namespace App\Http\Controllers;

class indexController extends Controller
{
    public function index()
    {
        $page_title = 'Home';

        return view('index', compact('page_title'));
    }
    public function account()
    {
        $page_title = 'Anmelden / Registrierung';

        return view('frontend.account', compact('page_title'));
    }
}
