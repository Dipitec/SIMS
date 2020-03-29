<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmittedStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admitted_students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text("admission_number");
            $table->text("first_name");
            $table->text("middle_name");
            $table->text("last_name");
            $table->char("gender");
            $table->text("dob");
            $table->text("birth_place");
            $table->text("religion");
            $table->text("nationality");
            $table->text("email");
            $table->unsignedInteger("class_id");
            $table->unsignedInteger("course_id");
            $table->unsignedInteger("department_id");
            $table->text("mobile_number");
            $table->text("mobile_number_alt");
            $table->text("p_o_box");
            $table->text("inserted_by");
            $table->text("form_four_index");
            $table->text("form_six_index")->nullable();
            $table->text("diploma_index")->nullable();
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
        Schema::dropIfExists('admitted_students');
    }
}
