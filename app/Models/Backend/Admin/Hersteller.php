<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: Hersteller.php
 * User: ${USER}
 * Date: 10.${MONTH_NAME_FULL}.2023
 * Time: 5:32
 */

namespace App\Models\Backend\Admin;

use Illuminate\Database\Eloquent\Model;

class Hersteller extends Model
{
    protected $table = 'hersteller';

    protected $fillable = [
        'hersteller_id',
        'hersteller_name'
    ];
}
