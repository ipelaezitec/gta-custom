<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            
            // $table->integer('answer_id')->unsigned();
            // $table->foreign('answer_id')->references('id')->on('answers');
            
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states');
            
            $table->string('explanation');
            
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
        // Schema::table('applications', function (Blueprint $table) {
        //     $table->dropForeign('applications_user_id_foreign');
        //     $table->dropColumn('user_id');

        // });

        Schema::dropIfExists('applications');
    }
}
