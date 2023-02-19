<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: 2023_02_19_054727_create_angebotes_table.php
 * User: ${USER}
 * Date: 19.${MONTH_NAME_FULL}.2023
 * Time: 5:47
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('angebotes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('an_fahrzeug_id');
            $table->unsignedBigInteger('an_kunden_id');
            $table->string('an_laufleistung');
            $table->string('an_tuev');
            $table->text('an_rechnungsadresse');
            $table->text('an_auftragstext');
            $table->text('an_angebotstext');
            $table->string('an_leistungszeitraum');
            $table->unsignedBigInteger('an_bearbeiter_id');
            $table->string('an_artikelnummer');
            $table->string('an_menge');
            $table->string('an_einheit');
            $table->string('an_bezeichnung');
            $table->string('an_einzelpreis_exkl_mwst');
            $table->string('an_rabatt');
            $table->string('an_rabattpreis');
            $table->string('an_steuersatz');
            $table->string('an_einkauf_exkl_mwst');
            $table->text('an_beschreibung');
            $table->string('an_rabatt_gesamt');
            $table->string('an_gesamt_exkl_mwst');
            $table->string('an_gesamt_mwst');
            $table->string('an_gesamt_inkl_mwst');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('angebotes');
    }
};
