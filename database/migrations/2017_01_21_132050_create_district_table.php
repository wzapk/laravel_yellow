<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('district', function(Blueprint $table) {
            $table->increments('id');
            $table->string('p_id');
            $table->string('p_nm');
            $table->string('c_id');
            $table->string('c_nm');
            $table->string('a_id');
            $table->string('a_nm');
            $table->string('full_name');
            $table->string('disctrict_code');
            $table->string('zip_code');
            $table->string('phone_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('district');
    }
}
