<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hall_id');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('has_image')->nullable();
            $table->string('has_bg_image')->nullable();
            $table->string('private')->nullable();
            $table->string('username')->nullable();
            $table->integer('follower_num')->nullable();
            $table->integer('content_num')->nullable();
            $table->string('version')->nullable();
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
        Schema::dropIfExists('halls');
    }
}
