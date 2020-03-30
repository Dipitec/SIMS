<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantBasicDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_basic_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unique();
            $table->text('first_name');
            $table->text('middle_name');
            $table->text('last_name');
            $table->char('gender');
            $table->text('nationality');
            $table->text('country_of_birth');
            $table->text('religion');
            $table->date('dob');
            $table->timestamp('application_year')->nullable();
            $table->text("place_of_birth");
            $table->binary("application_status");
            $table->text("email");
            $table->text("mobile_number");
            $table->text("mobile_number_alt")->nullable();
            $table->text("p_o_box");
            $table->text("region");
            $table->text("district");
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
        Schema::dropIfExists('applicant_basic_details');
    }
}
