<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: 2023_02_17_113809_create_laufleistungs_table.php
 * User: ${USER}
 * Date: 17.${MONTH_NAME_FULL}.2023
 * Time: 11:38
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('laufleistungs', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('fzd_fahrzeug_id')->nullable();
            $table->string('fzd_km_stand')->nullable();
            $table->string('fzd_betriebsstunden')->nullable();
            $table->date('fzd_datum')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('laufleistungs');
    }
};
