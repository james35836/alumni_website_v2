<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_event', function (Blueprint $table) {
            $table->increments('event_id');
            $table->string('event_image');
            $table->string('event_name');
            $table->text('event_description');
            $table->string('event_date');
            $table->string('event_created');
            $table->integer('user_id');
            $table->tinyInteger('archived')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_event');
    }
}
