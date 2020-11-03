<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerRegistryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_registry', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registry_id')->references('id')->on('registry');
            $table->foreignId('question_id')->references('id')->on('question');
            $table->foreignId('answer_id')->references('id')->on('answer');
            $table->integer('response_time')->unsigned();
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
        Schema::dropIfExists('answer_registry');
    }
}
