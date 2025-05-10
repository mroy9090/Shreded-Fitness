<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->comment('1=anirban sir,2=admin2');;
            $table->string('applicant_name');
            $table->string('home_address');
            $table->string('applicant_email');
            $table->string('phone_number');
            $table->string('alternative_phone_number');
            $table->string('gender');
            $table->string('package_status');
            $table->string('current_weight');
            $table->string('nid_number');
            $table->string('rfid_number');
            $table->string('applicant_image');
            $table->softDeletes();
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
        Schema::dropIfExists('registrations');
    }
}
