<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurances', function (Blueprint $table) {
            $table->increments('id');
            $table->date('policy_expiry_date')->nullable();
            $table->string('name')->nullable();
            $table->text('address')->nullable();
            $table->string('contact1')->nullable();
            $table->string('contact2')->nullable();
            $table->string('email')->nullable();
            $table->string('cnglpg_kit')->nullable();
            $table->string('vehicle_brand')->nullable();
            $table->string('vehicle_model')->nullable();
            $table->string('vehicle_registration_number')->nullable();
            $table->string('vehicle_engine_number')->nullable();
            $table->string('vehicle_chassis_number')->nullable();
            $table->string('vehicle_rta_code')->nullable();
            $table->string('vehicle_cc')->nullable();
            $table->string('number_of_seats')->nullable();
            $table->string('year_of_manufacture')->nullable();
            $table->string('basic_idv')->nullable();
            $table->string('renewal_discount')->nullable();
            $table->string('renewal_idv')->nullable();
            $table->string('renewal_total_premium')->nullable();
            $table->string('renewal_ncb')->nullable();
            $table->string('hypothecation')->nullable();
            $table->string('addon_plan')->nullable();
            $table->text('feedback')->nullable();
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
        Schema::dropIfExists('insurances');
    }
}
