<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: 2023_02_10_045825_create_hersteller_table.php
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
        Schema::create('hersteller', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('hersteller_id')->nullable();
            $table->string('hersteller_name', 128)->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hersteller');
    }
};
