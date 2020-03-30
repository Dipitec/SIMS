<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantRelativeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_relative_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("user_id")->unique();
            $table->text("first_name");
            $table->text("last_name");
            $table->text("p_o_box");
            $table->text("email");
            $table->binary("application_status");
            $table->text("mobile_number");
            $table->text("mobile_number_alt")->nullable();
            $table->text("relationship");
            $table->text("region");
            $table->text("district");
            $table->text("national_id");
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
        Schema::dropIfExists('applicant_relative_details');
    }
}
