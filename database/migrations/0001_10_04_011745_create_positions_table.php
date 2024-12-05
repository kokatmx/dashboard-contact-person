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
        Schema::create('positions', function (Blueprint $table) {
            $table->id('position_id');
            $table->string('position_code')->unique();
            $table->string('position_name');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('grade_id');
            // $table->unsignedBigInteger('parent_position_id')->nullable();
            $table->timestamps();

            // $table->foreign('parent_position_id')->references('position_id')->on('positions')->onDelete('cascade');
            $table->foreign('department_id')->references('department_id')->on('departments')->onDelete('cascade');
            $table->foreign('grade_id')->references('grade_id')->on('grades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('positions');
    }
};
