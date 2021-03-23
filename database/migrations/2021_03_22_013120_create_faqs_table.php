<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->mediumText('question');
            $table->mediumText('answer');
            $table->unsignedBigInteger('categoryid');
            $table->unsignedBigInteger('subcategoryid');
            $table->timestamps();

            $table->foreign('categoryid')
                ->references('id')
                ->on('faqcategories')
                ->onDelete('cascade');

            $table->foreign('subcategoryid')
                ->references('id')
                ->on('faqsubcategories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faqs');
    }
}
