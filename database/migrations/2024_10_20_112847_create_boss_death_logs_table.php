<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('bosses', function (Blueprint $table) {
            $table->string('comment')->nullable();
        });
        Schema::create('boss_death_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('boss_id')->constrained('bosses');
            $table->dateTime('old_time_to_death')->nullable(); // Предыдущее значение
            $table->dateTime('new_time_to_death'); // Новое значение
            $table->string('comment');
            $table->foreignId('user_id')->constrained('users'); // ID пользователя, который внес изменения
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boss_death_logs');
        Schema::table('bosses', function (Blueprint $table) {
            $table->dropColumn('comment');
        });
    }
};
