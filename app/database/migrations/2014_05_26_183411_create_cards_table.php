<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cards', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 32);
			$table->enum('rarity', array(
				'BASIC',
				'COMMON',
				'RARE',
				'EPIC',
				'LEGENDARY'
			))->default('BASIC');
			$table->string('image1', 128);
			$table->string('image2', 128);
			$table->integer('cost');
			$table->integer('attack')->nullable();
			$table->integer('life')->nullable();
			$table->mediumText('description');
			$table->enum('type', array(
				'DRAGON',
				'BEAST',
				'MURLOC',
				'PIRATE',
				'WEAPON',
				'NONE'
			))->default('NONE');
			$table->enum('hero', array(
				'MAGE',
				'WARLOCK',
				'HUNTER',
				'WARRIOR',
				'PALADIN',
				'SHAMAN',
				'DRUID',
				'PRIEST',
				'ROGUE',
				'NEUTRAL'
			))->default('NEUTRAL');
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
		Schema::drop('cards');
	}

}
