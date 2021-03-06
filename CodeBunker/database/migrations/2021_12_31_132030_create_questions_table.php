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
            $table->timestamps();
            $table->string('question')->nullable();  
            // $table->unsignedBigInteger('option_id');
            $table->unsignedBigInteger('exam_id')->nullable();
;
            $table->string('OptionFour')->nullable();
            $table->string('answer')->nullable();

         
           $table->foreign("exam_id")
              ->references('id')
              ->on("exams")
              ->onDelete("cascade");

            // $table->foreign("option_id")
            // ->references("id")
            // ->on("options")
            // ->onDelete('cascade');
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
