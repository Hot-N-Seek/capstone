<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function($table)
        {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('gps_location', 200);
            $table->integer('user_id')->unsigned();
		    $table->foreign('user_id')->references('id')->on('users');
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
		Schema::drop('items');
	}

}
