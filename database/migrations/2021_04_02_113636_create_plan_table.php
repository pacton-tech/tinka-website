<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('description');
            $table->string('category');
            $table->integer('is_active');
            $table->double('price');
            $table->double('signup_fee');
            $table->string('currency');
            $table->integer('trial_period');
            $table->string('trial_interval');
            $table->integer('invoice_period');
            $table->string('invoice_interval');
            $table->integer('sort_order');
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
        Schema::dropIfExists('plans');
    }
}
