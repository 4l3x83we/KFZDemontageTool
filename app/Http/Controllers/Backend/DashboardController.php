<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: DashboardController.php
 * User: ${USER}
 * Date: 6.${MONTH_NAME_FULL}.2023
 * Time: 17:5
 */

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $page_title = 'Dashboard';

        return view('backend.dashboard', compact('page_title'));
    }
}
