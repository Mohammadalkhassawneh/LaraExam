<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->string('option');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('exam_id');
            $table->timestamps();
            $table->foreign("exam_id")
            ->references('id')
            ->on("exams")
            ->onDelete("cascade");
       
            $table->foreign("question_id")
            ->references('id')
            ->on("questions")
            ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('options');
    }
}
