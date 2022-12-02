<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientRevampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_revamps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appointment_patient_id')->constrained()->onDelete('cascade');
            $table->string('diagnosis');
            $table->string('prescription');
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
        Schema::dropIfExists('patient_revamps');
    }
}
