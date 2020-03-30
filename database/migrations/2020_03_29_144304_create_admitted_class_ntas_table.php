<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmittedClassNtasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admitted_class_ntas', function (Blueprint $table) {
            $table->bigIncrements('id');
           $table->text("class_code");
           $table->text("year_of_study");
           $table->text("nta_level");
           $table->text("academic_year");
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
        Schema::dropIfExists('admitted_class_ntas');
    }
}
