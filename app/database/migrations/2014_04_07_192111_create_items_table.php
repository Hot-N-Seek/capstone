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
            $table->double('latitude', 15, 8);
            $table->double('longitude', 15, 8);
            $table->integer('create_id')->unsigned();
		    $table->foreign('create_id')->references('id')->on('users');
		    $table->integer('found_id')->unsigned()->nullable();
		    $table->foreign('found_id')->references('id')->on('users');
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
