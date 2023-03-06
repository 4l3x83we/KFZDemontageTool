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

            $table->unsignedBigInteger('an_fahrzeug_id')->nullable();
            $table->unsignedBigInteger('an_kunden_id')->nullable();
            $table->string('an_laufleistung')->nullable();
            $table->string('an_tuev')->nullable();
            $table->text('an_rechnungsadresse')->nullable();
            $table->text('an_auftragstext')->nullable();
            $table->text('an_angebotstext')->nullable();
            $table->string('an_leistungszeitraum')->nullable();
            $table->unsignedBigInteger('an_bearbeiter_id')->nullable();
            $table->string('an_artikelnummer')->nullable();
            $table->string('an_menge')->nullable();
            $table->string('an_einheit')->nullable();
            $table->string('an_bezeichnung')->nullable();
            $table->string('an_einzelpreis_exkl_mwst')->nullable();
            $table->string('an_rabatt')->nullable();
            $table->string('an_rabattpreis')->nullable();
            $table->string('an_steuersatz')->nullable();
            $table->string('an_einkauf_exkl_mwst')->nullable();
            $table->text('an_beschreibung')->nullable();
            $table->string('an_rabatt_gesamt')->nullable();
            $table->string('an_gesamt_exkl_mwst')->nullable();
            $table->string('an_gesamt_mwst')->nullable();
            $table->string('an_gesamt_inkl_mwst')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('angebotes');
    }
};
