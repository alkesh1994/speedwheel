e<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_cars', function (Blueprint $table) {
            $table->increments('id');
            $table->date('enquiry_date')->nullable();
            $table->string('name')->nullable();
            $table->string('contact1')->nullable();
            $table->string('contact2')->nullable();
            $table->text('address')->nullable();
            $table->string('qualification')->nullable();
            $table->string('email')->nullable();
            $table->string('office_address')->nullable();
            $table->string('office_contact')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('spouse_occupation')->nullable();
            $table->string('spouse_contact')->nullable();
            $table->string('no_of_dependents')->nullable();
            $table->string('reference1_name')->nullable();
            $table->string('reference1_contact')->nullable();
            $table->string('reference1_address')->nullable();
            $table->string('reference2_name')->nullable();
            $table->string('reference2_contact')->nullable();
            $table->string('reference2_address')->nullable();
            $table->string('vehicle_brand')->nullable();
            $table->string('vehicle_model')->nullable();
            $table->string('vehicle_color')->nullable();
            $table->string('vehicle_dealer')->nullable();
            $table->string('vehicle_financer')->nullable();
            $table->string('vehicle_booking_amount')->nullable();
            $table->string('vehicle_ex_showroom')->nullable();
            $table->string('vehicle_1_tcs')->nullable();
            $table->string('vehicle_depot')->nullable();
            $table->string('vehicle_insurance')->nullable();
            $table->string('vehicle_rto')->nullable();
            $table->string('vehicle_warranty')->nullable();
            $table->string('vehicle_accessories')->nullable();
            $table->string('vehicle_onroad')->nullable();
            $table->string('vehicle_discount')->nullable();
            $table->string('vehicle_cost')->nullable();
            $table->string('vehicle_finance_approved')->nullable();
            $table->string('vehicle_emi')->nullable();
            $table->string('vehicle_stampduty')->nullable();
            $table->string('vehicle_downpayment')->nullable();
            $table->string('vehicle_part1')->nullable();
            $table->string('vehicle_part2')->nullable();
            $table->string('dealer_payment')->nullable();
            $table->string('dealer_disbursement')->nullable();
            $table->string('dealer_balance')->nullable();
            $table->string('emi_date')->nullable();
            $table->string('loan_account_number')->nullable();
            $table->string('post_delivery_documents')->nullable();
            $table->string('invoice_number')->nullable();
            $table->string('invoice_photo')->nullable();
            $table->string('insurance_number')->nullable();
            $table->string('insurance_photo')->nullable();
            $table->string('rcbook_number')->nullable();
            $table->string('rcbook_photo')->nullable();
            $table->string('fastag_number')->nullable();
            $table->string('fastag_photo')->nullable();
            $table->string('pancard_number')->nullable();
            $table->string('pancard_photo')->nullable();
            $table->string('lightbill_number')->nullable();
            $table->string('lightbill_photo')->nullable();
            $table->string('aadharcard_number')->nullable();
            $table->string('aadharcard_photo')->nullable();

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
        Schema::dropIfExists('new_cars');
    }
}
