<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: 2023_02_17_160027_create_kundens_table.php
 * User: ${USER}
 * Date: 17.${MONTH_NAME_FULL}.2023
 * Time: 16:0
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('kundens', function (Blueprint $table) {
            $table->id();

            $table->string('kd_anrede')->nullable();
            $table->string('kd_title')->nullable();
            $table->string('kd_vorname')->nullable();
            $table->string('kd_nachname')->nullable();
            $table->string('kd_ex_address')->nullable();
            $table->string('kd_strasse_hausnr')->nullable();
            $table->string('kd_plz', 5)->nullable();
            $table->string('kd_ort')->nullable();
            $table->string('kd_land')->nullable();
            $table->string('kd_handy')->nullable();
            $table->string('kd_telefon')->nullable();
            $table->string('kd_email')->nullable();
            $table->date('kd_geburtstag')->nullable();
            $table->string('kd_uid')->nullable();
            $table->text('kd_zusatzinfo')->nullable();
            $table->tinyInteger('kd_zusatzinfo_check')->default(0)->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kundens');
    }
};
