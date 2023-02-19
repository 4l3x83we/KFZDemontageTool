<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: 2023_02_08_080803_create_fahrzeugdatens_table.php
 * User: ${USER}
 * Date: 8.${MONTH_NAME_FULL}.2023
 * Time: 8:8
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('fahrzeugdatens', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('kunden_id')->nullable();
            $table->string('fzd_kennzeichen')->nullable();
            $table->unsignedBigInteger('fzd_laufleistung')->nullable();
            $table->string('fzd_hsn')->nullable();
            $table->string('fzd_tsn')->nullable();
            $table->string('fzd_id')->nullable();
            $table->string('fzd_hersteller')->nullable();
            $table->string('fzd_modell')->nullable();
            $table->string('fzd_type')->nullable();
            $table->string('fzd_fahrzeugklasse')->nullable();
            $table->string('fzd_getriebeart')->nullable();
            $table->string('fzd_eigengewicht')->nullable();
            $table->string('fzd_hoechstzul_gewicht')->nullable();
            $table->string('fzd_leistung')->nullable();
            $table->string('fzd_hubraum')->nullable();
            $table->date('fzd_tuev')->nullable();
            $table->date('fzd_letzte_zulassung')->nullable();
            $table->date('fzd_erstzulassung')->nullable();
            $table->date('fzd_genehmigungsdatum')->nullable();
            $table->string('fzd_motorkategorie')->nullable();
            $table->string('fzd_motorcode')->nullable();
            $table->string('fzd_farbcode')->nullable();
            $table->string('fzd_polizzennummer')->nullable();
            $table->text('fzd_zusatzinfo')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fahrzeugdatens');
    }
};
