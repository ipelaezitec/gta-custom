<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customimages', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('custom_id')->nullable();
            $table->foreign('custom_id')->references('id')->on('customizations');
            
            $table->string('url')->nullable();
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
        Schema::table('customimages', function (Blueprint $table) {
            $table->dropForeign('customimages_custom_id_foreign');
            $table->dropColumn('custom_id');

        });

        Schema::dropIfExists('customimages');
    }
}
