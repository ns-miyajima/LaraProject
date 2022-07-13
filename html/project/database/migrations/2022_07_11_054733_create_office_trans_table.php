<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficeTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_trans', function (Blueprint $table) {
            $table->bigIncrements('commentid')->nullable(false);
            $table->bigInteger('id')->unsigned();
            $table->string('title');
            $table->string('comment');
            $table->foreign('id')->references('id')->on('office_masters')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('office_trans');
    }
}
