<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('text');

            $table->integer('application_id')->unsigned()->nullable();
            $table->foreign('application_id')->references('id')->on('applications');

            $table->integer('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('questions');
            
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
        Schema::table('answers', function (Blueprint $table) {
            $table->dropForeign('asnwers_application_id_foreign');
            $table->dropColumn('application_id');
            
            $table->dropForeign('answers_question_id_foreign');
            $table->dropColumn('question_id');

        });

        Schema::dropIfExists('answers');
    }
}
