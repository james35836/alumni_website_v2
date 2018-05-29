<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblUserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user_info', function (Blueprint $table) {
            $table->increments('user_info_id');
            $table->string('user_number');
            $table->string('user_profile');
            $table->string('user_first_name');
            $table->string('user_middle_name');
            $table->string('user_last_name');
            $table->string('user_gender');
            $table->string('user_birthdate');
            $table->string('user_contact_number');
            $table->string('user_address');
            $table->string('user_course');
            $table->string('user_current_work');
            $table->string('user_year_graduate');
            $table->string('user_date_added');
            $table->text('user_about_me');
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
        Schema::dropIfExists('tbl_user_info');
    }
}
