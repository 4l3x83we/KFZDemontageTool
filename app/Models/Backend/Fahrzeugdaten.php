<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: Fahrzeugdaten.php
 * User: ${USER}
 * Date: 8.${MONTH_NAME_FULL}.2023
 * Time: 8:8
 */

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fahrzeugdaten extends Model
{
    use HasFactory;

    protected $table = 'fahrzeugdatens';

    protected $fillable = [
        'kunden_id',
        'fzd_kennzeichen',
        'fzd_laufleistung',
        'fzd_hsn',
        'fzd_tsn',
        'fzd_id',
        'fzd_hersteller',
        'fzd_modell',
        'fzd_type',
        'fzd_fahrzeugklasse',
        'fzd_getriebeart',
        'fzd_eigengewicht',
        'fzd_hoechstzul_gewicht',
        'fzd_leistung',
        'fzd_hubraum',
        'fzd_tuev',
        'fzd_letzte_zulassung',
        'fzd_erstzulassung',
        'fzd_genehmigungsdatum',
        'fzd_motorkategorie',
        'fzd_motorcode',
        'fzd_farbcode',
        'fzd_polizzennummer',
        'fzd_zusatzinfo',
    ];

    public static function motorKategorie()
    {

        $motorkategorie = [
            'A | Andere',
            'D | Diesel-Motor S | Saug-Diesel',
            'D | Diesel-Motor TD | Turbo-Diesel',
            'E | Elektromotor',
            'HD | Hybrid Diesel',
            'HB | Hybrid Benzin',
            'O2 | Otto-Motor 2-Takt',
            'O4 | Otto-Motor 4-Takt Kat | mit Katalysator',
            'O4 | Otto-Motor 4-Takt OKat | ohne Katalysator'
        ];

        return $motorkategorie;
    }

    public function angebote()
    {
        return $this->hasMany(Angebote::class, 'an_fahrzeug_id');
    }
}
