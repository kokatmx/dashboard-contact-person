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
        Schema::create('tokos', function (Blueprint $table) {
            $table->id('toko_id');
            $table->string('toko_code')->default('2MZ1')->unique();
            $table->string('toko_name')->default('DC MADIUN [MDU]');
            $table->string('no_hp');
            // $table->unsignedBigInteger('position_id');
            $table->timestamps();

            // $table->foreign('position_id')->references('position_id')->on('positions')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tokos');
    }
};
