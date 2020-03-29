<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmittedClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admitted_classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text("class_code");
            $table->text("department_id");
            $table->text("course_level_id");
            $table->text("admit_year");
            $table->text("class_session");
            $table->text("deleted");
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
        Schema::dropIfExists('admitted_classes');
    }
}
