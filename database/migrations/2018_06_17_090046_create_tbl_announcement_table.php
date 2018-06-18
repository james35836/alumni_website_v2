<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAnnouncementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_announcement', function (Blueprint $table) {
            $table->increments('announcement_id');
            $table->string('announcement_name');
            $table->text('announcement_description');
            $table->string('announcement_date');
            $table->string('announcement_created');
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
        Schema::dropIfExists('tbl_announcement');
    }
}
