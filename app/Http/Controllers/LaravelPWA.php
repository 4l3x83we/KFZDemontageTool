<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelPWA extends Controller
{
    public function offline()
    {
        return view('laravelpwa::offline');
    }
}
