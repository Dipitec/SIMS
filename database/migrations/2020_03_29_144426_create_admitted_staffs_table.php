<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmittedStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admitted_staffs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("staff_id");
            $table->text("first_name");
            $table->text("middle_name");
            $table->text("last_name");
            $table->unsignedInteger("department_id");
            $table->char("gender");
            $table->date("dob");
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
        Schema::dropIfExists('admitted_staffs');
    }
}
