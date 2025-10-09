<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();   // main about text
            $table->string('stat_1_label')->nullable();
            $table->string('stat_1_value')->nullable();
            $table->string('stat_2_label')->nullable();
            $table->string('stat_2_value')->nullable();
            $table->string('stat_3_label')->nullable();
            $table->string('stat_3_value')->nullable();
            $table->string('stat_4_label')->nullable();
            $table->string('stat_4_value')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
