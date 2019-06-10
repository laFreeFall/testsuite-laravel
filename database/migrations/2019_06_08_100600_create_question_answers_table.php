<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('option_id')->nullable();
            $table->boolean('is_correct')->nullable();
            $table->unsignedInteger('order')->nullable();
            $table->unsignedBigInteger('match_option_id')->nullable();
            $table->timestamps();

            $table->foreign('question_id')
                ->references('id')
                ->on('quiz_questions')
                ->onDelete('cascade');
            $table->foreign('option_id')
                ->references('id')
                ->on('question_options')
                ->onDelete('cascade');
            $table->foreign('match_option_id')
                ->references('id')
                ->on('question_options')
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
        Schema::dropIfExists('question_answers');
    }
}
