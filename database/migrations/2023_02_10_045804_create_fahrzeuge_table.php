<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: 2023_02_10_045804_create_fahrzeuge_table.php
 * User: ${USER}
 * Date: 10.${MONTH_NAME_FULL}.2023
 * Time: 4:58
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('fahrzeuge', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('hersteller_id')->nullable();
            $table->string('hersteller_name', 128)->nullable();
            $table->bigInteger('modell_id')->nullable();
            $table->string('modell_name', 128)->nullable();
            $table->bigInteger('fahrzeug_id')->nullable();
            $table->string('fahrzeug_name', 128)->nullable();
            $table->string('fahrzeug_typ', 128)->nullable();
            $table->string('fahrzeug_form', 128)->nullable();
            $table->string('fahrzeug_eg_nummer', 128)->nullable();
            $table->string('fahrzeug_antriebsachse', 128)->nullable();
            $table->string('fahrzeug_achslast_va', 128)->nullable();
            $table->string('fahrzeug_achslast_ha', 128)->nullable();
            $table->string('fahrzeug_zul_gesamtgewicht', 128)->nullable();
            $table->string('fahrzeug_laenge', 128)->nullable();
            $table->string('fahrzeug_breite', 128)->nullable();
            $table->string('fahrzeug_hoehe', 128)->nullable();
            $table->string('fahrzeug_stuetzlast', 128)->nullable();
            $table->string('fahrzeug_anhaengelast_gebremst', 128)->nullable();
            $table->string('fahrzeug_anhaengelast_ungebremst', 128)->nullable();
            $table->string('fahrzeug_treibstoff', 128)->nullable();
            $table->string('fahrzeug_motor', 128)->nullable();
            $table->string('fahrzeug_motorcode', 128)->nullable();
            $table->string('fahrzeug_motor_oelmenge', 128)->nullable();
            $table->string('fahrzeug_ps', 128)->nullable();
            $table->string('fahrzeug_kw', 128)->nullable();
            $table->string('fahrzeug_leistung_bei_umdrehungen', 128)->nullable();
            $table->string('fahrzeug_hubraum', 128)->nullable();
            $table->string('fahrzeug_co2_emissions_wert', 128)->nullable();
            $table->string('fahrzeug_leergewicht', 128)->nullable();
            $table->string('fahrzeug_max_kmh', 128)->nullable();
            $table->string('fahrzeug_sitzanzahl', 128)->nullable();
            $table->string('fahrzeug_tueranzahl', 128)->nullable();
            $table->string('fahrzeug_prod_monat_von', 128)->nullable();
            $table->string('fahrzeug_prod_monat_bis', 128)->nullable();
            $table->string('fahrzeug_prod_jahr_von', 128)->nullable();
            $table->string('fahrzeug_prod_jahr_bis', 128)->nullable();
            $table->string('fahrzeug_hsn', 128)->nullable();
            $table->string('fahrzeug_tsn', 128)->nullable();
            $table->string('fahrzeug_vsn', 128)->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fahrzeuge');
    }
};
