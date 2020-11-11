<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->foreignId("class_id");
            $table->foreignId("category_id");
            $table->string("title");
            $table->dateTime("start_date");
            $table->dateTime("end_date");
            $table->integer("questions");
            $table->integer("questions_type1_easy")->nullable();
            $table->integer("questions_type1_medium")->nullable();
            $table->integer("questions_type1_hard")->nullable();
            $table->integer("questions_type2_easy")->nullable();
            $table->integer("questions_type2_medium")->nullable();
            $table->integer("questions_type2_hard")->nullable();
            $table->integer("questions_type3_easy")->nullable();
            $table->integer("questions_type3_medium")->nullable();
            $table->integer("questions_type3_hard")->nullable();

            $table->foreign('class_id')->references('id')->on('school_classes');
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
        Schema::dropIfExists('tests');
    }
}
