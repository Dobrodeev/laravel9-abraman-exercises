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
        Schema::create('university_admission_applications', function (Blueprint $table) {
            $table->id();
            
            $table->string('full_name');
            $table->date('birth_date');
            $table->string('passport_adress');
            $table->string('real_adress');
            
            $table->boolean('is_driver_license_A');
            $table->boolean('is_driver_license_B');
            $table->boolean('is_driver_license_C');
            $table->boolean('is_driver_license_CE');
            $table->boolean('is_driver_license_D');
            
            $table->boolean('is_school_diploma');
            $table->boolean('is_college_diploma');
            $table->enum('university', ['КПІ', 'КНУ', 'НАУ']);
            $table->enum('payment', ['бюджет', 'контракт']);
            $table->enum('studing_form', ['денна', 'заочна']);
            $table->boolean('is_bachelor');
            $table->boolean('is_magister');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('university_admission_applications');
    }
};
