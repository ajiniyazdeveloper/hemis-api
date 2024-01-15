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
        Schema::create('curricula', function (Blueprint $table) {
            $table->id();
            $table->integer('curriculumId');
            $table->string('curriculumName');
            $table->integer('specialtyId');
            $table->string('specialtyCode');
            $table->string('specialtyName');
            $table->integer('educationYearCode');
            $table->string('educationYearName');
            $table->string('educationYearCurrent');
            $table->integer('educationTypeCode');
            $table->string('educationTypeName');
            $table->integer('educationFormCode');
            $table->string('educationFormName');
            $table->string('facultyName');
            $table->integer('facultyId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curricula');
    }
};
