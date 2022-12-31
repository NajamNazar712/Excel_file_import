<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_data_dumps', function (Blueprint $table) {
            $table->id();
            $table->string('supervisor_code')->nullable();
            $table->string('supervisor_name')->nullable();
            $table->string('town_name')->nullable();
            $table->string('distributor_code_rd')->nullable();
            $table->string('distributor_code')->nullable();
            $table->string('distributor_name')->nullable();
            $table->string('invoice_number')->nullable();
            $table->bigInteger('cnic')->nullable();
            $table->bigInteger('strn')->nullable();
            $table->string('order_booker_code')->nullable();
            $table->string('order_booker_name')->nullable();
            $table->string('store_classification_one')->nullable();
            $table->string('store_classification_two')->nullable();
            $table->string('store_classification_three')->nullable();
            $table->string('store_perfect')->nullable();
            $table->string('outlet_code_rd')->nullable();
            $table->string('outlet_code')->nullable();
            $table->string('outlet_name')->nullable();
            $table->string('area_type')->nullable();
            $table->string('pjp_name')->nullable();
            $table->string('pjp_code')->nullable();
            $table->string('channel')->nullable();
            $table->string('sub_channel')->nullable();
            $table->string('asset')->nullable();
            $table->string('business_unit')->nullable();
            $table->string('category')->nullable();
            $table->string('brand')->nullable();
            $table->string('master_SKU')->nullable();
            $table->string('SKU_manufacturer_code')->nullable();
            $table->string('SKU_code')->nullable();
            $table->string('SKU_name')->nullable();
            $table->integer('year')->nullable();
            $table->string('month')->nullable();
            $table->date('date')->nullable();
            $table->string('foc_ctn')->nullable();
            $table->string('foc_boxes')->nullable();
            $table->string('foc_units')->nullable();
            $table->string('sales_ctn')->nullable();
            $table->string('sales_boxes')->nullable();
            $table->string('sales_units')->nullable();
            $table->string('volume_tons')->nullable();
            $table->string('ex_factory')->nullable();
            $table->string('TP_exc_GST')->nullable();
            $table->string('TP_inc_GST')->nullable();
            $table->string('advance_tax')->nullable();
            $table->string('unassigned_group')->nullable();
            $table->string('trade_offer')->nullable();
            $table->string('distributor_promotion')->nullable();
            $table->string('manual_discount')->nullable();
            $table->string('buy_get_free')->nullable();
            $table->string('special_discount')->nullable();
            $table->string('per_packet_discount')->nullable();
            $table->string('regular_discount')->nullable();
            $table->string('gst')->nullable();
            $table->string('net_sales')->nullable();
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
        Schema::dropIfExists('sales_data_dumps');
    }
};
