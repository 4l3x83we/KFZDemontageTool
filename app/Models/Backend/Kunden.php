<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: Kunden.php
 * User: ${USER}
 * Date: 17.${MONTH_NAME_FULL}.2023
 * Time: 16:0
 */

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class Kunden extends Model
{
    protected $table = 'kundens';

    protected $fillable = [
        'kd_anrede',
        'kd_title',
        'kd_vorname',
        'kd_nachname',
        'kd_ex_address',
        'kd_strasse_hausnr',
        'kd_plz',
        'kd_ort',
        'kd_land',
        'kd_handy',
        'kd_telefon',
        'kd_email',
        'kd_geburtstag',
        'kd_uid',
        'kd_zusatzinfo',
        'kd_zusatzinfo_check',
    ];
}
