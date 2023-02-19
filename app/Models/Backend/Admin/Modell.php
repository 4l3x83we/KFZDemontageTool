<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: Modell.php
 * User: ${USER}
 * Date: 10.${MONTH_NAME_FULL}.2023
 * Time: 5:32
 */

namespace App\Models\Backend\Admin;

use Illuminate\Database\Eloquent\Model;

class Modell extends Model
{
    protected $table = 'modelle';

    protected $fillable = [
        'hersteller_id',
        'hersteller_name',
        'modell_id',
        'modell_name'
    ];
}
