<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text("registration_number");
            $table->text("registration_year");
            $table->text("academic_year");
            $table->text("year_of_study");
            $table->text("registered_semester");
            $table->integer("registration_status");
            $table->text("nta_level_id");
            $table->text("registered_class_code");
            $table->text("new_class_code");
            $table->text("academic_remark");
            $table->text("inserted_by");
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
        Schema::dropIfExists('admission_registrations');
    }
}
