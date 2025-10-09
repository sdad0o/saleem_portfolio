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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('primary_color')->default('#56DFCF');
            $table->string('secondary_color')->default('#FDFAF6');
            $table->string('dark_color')->default('#1a1a1a');
            $table->string('gray_color')->default('#666');
            $table->string('light_gray_color')->default('#f5f5f5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
