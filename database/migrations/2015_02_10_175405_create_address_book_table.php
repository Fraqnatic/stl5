<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressBookTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('address_book', function(Blueprint $table){
                $table->increments('id');
		$table->string('name', 30);
                $table->string('address', 60);
                $table->string('mail', 20);
                $table->string('appointment', 20);
                $table->string('phone', 16);
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
