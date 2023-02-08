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



            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fahrzeugdatens');
    }
};
