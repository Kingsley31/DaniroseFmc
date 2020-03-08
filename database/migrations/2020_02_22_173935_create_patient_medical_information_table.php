<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientMedicalInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_medical_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('weight');
            $table->integer('height');
            $table->string('bmi')->nullable();
            $table->string('allergies')->nullable();
            $table->string('medications')->nullable();
            $table->string('long_term_conditions')->nullable();
            $table->string('vaccinations')->nullable();
            $table->string('diertary_restrictions')->nullable();
            $table->string('drink_alcohol')->nullable();
            $table->string('use_drugs')->nullable();
            $table->string('smokes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_medical_information');
    }
}
