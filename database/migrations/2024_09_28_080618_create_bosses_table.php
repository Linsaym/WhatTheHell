<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('bosses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->time('respawn');
            $table->dateTime('time_to_death');
            $table->string('location_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bosses');
    }
};
