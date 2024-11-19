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
        Schema::create('departments', function (Blueprint $table) {
            $table->id('department_id');
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('division_id');
            $table->string('department_code')->unique();
            $table->string('department_name');
            $table->string('description');
            $table->timestamps();
            $table->foreign('area_id')->references('area_id')->on('areas')->onDelete('cascade');
            $table->foreign('division_id')->references('division_id')->on('divisions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
