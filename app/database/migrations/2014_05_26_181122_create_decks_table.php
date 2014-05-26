<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDecksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('decks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->boolean('public');
			$table->string('name', 32);
			$table->enum('type', array(
				'NONE',
				'AGGRO',
				'COMBO',
				'CONTROL',
				'MIDRANGE'
			));
			$table->enum('hero', array(
				'MAGE',
				'WARLOCK',
				'HUNTER',
				'WARRIOR',
				'PALADIN',
				'SHAMAN',
				'DRUID',
				'PRIEST',
				'ROGUE'
			));
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
		Schema::drop('decks');
	}

}
