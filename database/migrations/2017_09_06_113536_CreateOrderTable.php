<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id');
            $table->integer('doctor_id');
            $table->integer('stockist_id');
            $table->string('surgery_date');
            $table->string('surgery_state');
            $table->string('surgery_hospital');
            $table->string('surgery_eyes');
            $table->string('surgery_procedure');
            $table->integer('product_brand');
            $table->integer('product_brand_type');
            $table->string('product_power');
            $table->string('product_option')->nullable();
            $table->integer('product_backup');
            $table->decimal('price', 10, 2);
            $table->string('billplz_id')->nullable();
            $table->string('billplz_url')->nullable();
            $table->string('billplz_amount')->nullable();
            $table->string('billplz_status')->nullable();
            $table->integer('sms_remind_1')->nullable();
            $table->integer('sms_remind_2')->nullable();
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
        Schema::dropIfExists('order');
    }
}
