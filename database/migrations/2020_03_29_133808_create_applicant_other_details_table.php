<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantOtherDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_other_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("user_id")->unique();
            $table->text("marital_status");
            $table->text("disability_status");
            $table->longText("disability_details");
            $table->text("preferred_session");
            $table->text("need_accommodation");
            $table->binary("application_status");
            $table->text("ward");
            $table->text("street");
            $table->text("house_number");
            $table->text("employment");
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
        Schema::dropIfExists('applicant_other_details');
    }
}
