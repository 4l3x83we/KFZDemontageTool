<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: Angebote.php
 * User: ${USER}
 * Date: 19.${MONTH_NAME_FULL}.2023
 * Time: 5:47
 */

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class Angebote extends Model
{
    protected $table = 'angebotes';

    public function kunden()
    {
        return $this->belongsTo(Kunden::class, 'id');
    }

    public function fahrzeuge()
    {
        return $this->belongsTo(Fahrzeugdaten::class, 'id');
    }
}
