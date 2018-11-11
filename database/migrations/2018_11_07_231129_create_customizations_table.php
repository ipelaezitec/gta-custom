<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customizations', function (Blueprint $table) {
            $table->increments('id');
            //$table->unsignedInteger('id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('videourl')->nullable();
            $table->string('backgroundurl')->nullable();
            $table->string('colorbtn')->nullable();
            $table->string('bgcolorbtn')->nullable();
            $table->string('logourl')->nullable();
            $table->string('hometext',2300)->nullable();
            $table->string('comtext')->nullable();

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
        Schema::table('customizations', function (Blueprint $table) {
            $table->dropForeign('customizations_user_id_foreign');
            $table->dropColumn('user_id');
            
  
        });

        Schema::dropIfExists('customizations');
    }
}
