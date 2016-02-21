<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('question');
            $table->string('clarification');
            $table->integer('order')->nullable();
            $table->integer('template_id')->unsigned()->nullable();
            $table->foreign('template_id')->references('id')->on('questions')->onDelete('cascade');
            $table->integer('answertype_id')->unsigned();
            $table->foreign('answertype_id')->references('id')->on('answertypes')->onDelete('cascade');
            $table->integer('questionable_id')->unsigned();
            $table->string('questionable_type');

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
        Schema::drop('questions');
    }
}
