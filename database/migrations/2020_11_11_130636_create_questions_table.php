<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->foreignId("category_id");
            $table->string("title");
            $table->integer("type");
            $table->integer("difficulty");
            $table->integer("subcategory");
            $table->string("choice_1")->nullable();
            $table->string("choice_2")->nullable();
            $table->string("choice_3")->nullable();
            $table->string("choice_4")->nullable();
            $table->integer("correct_choice")->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
