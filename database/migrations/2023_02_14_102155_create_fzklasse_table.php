<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: 2023_02_14_102155_create_fzklasse_table.php
 * User: ${USER}
 * Date: 14.${MONTH_NAME_FULL}.2023
 * Time: 10:21
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('fzklasse', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('fzk_id')->nullable();
            $table->string('fzk_name')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fzklasse');
    }
};
