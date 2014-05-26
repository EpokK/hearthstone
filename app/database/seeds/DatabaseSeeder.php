<?php

class DatabaseSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
	}
}

class UserTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'username' => 'EpokK',
			'email'    => 'richard.tetaz@gmail.com',
			'password' => Hash::make('password')
		));
		User::create(array(
			'username' => 'Zodd',
			'email'    => 'guillaume.thomy@gmail.com',
			'password' => Hash::make('password')
		));
	}
}

class DeckTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('decks')->delete();
		User::create(array(
			'user_id' => 2,
			'public' => true,
			'name' => 'Zoo',
			'type' => 'AGGRO',
			'hero' => 'WARLOCK'
		));
		DB::table('decks')->delete();
		User::create(array(
			'user_id' => 2,
			'public' => false,
			'name' => 'Huntard',
			'type' => 'AGGRO',
			'hero' => 'HUNTER'
		));
		DB::table('decks')->delete();
		User::create(array(
			'user_id' => 2,
			'public' => false,
			'name' => 'ancient watcher',
			'type' => 'CONTROL',
			'hero' => 'DRUID'
		));
		DB::table('decks')->delete();
		User::create(array(
			'user_id' => 2,
			'public' => true,
			'name' => 'miracle',
			'type' => 'COMBO',
			'hero' => 'ROGUE'
		));
		DB::table('decks')->delete();
		User::create(array(
			'user_id' => 2,
			'public' => true,
			'name' => 'Bloodlust Teacher',
			'type' => 'MIDRANGE',
			'hero' => 'SHAMAN'
		));
		DB::table('decks')->delete();
		User::create(array(
			'user_id' => 2,
			'public' => false,
			'name' => 'Amaz',
			'type' => 'MIDRANGE',
			'hero' => 'PRIEST'
		));
		DB::table('decks')->delete();
		User::create(array(
			'user_id' => 2,
			'public' => false,
			'name' => 'Weapon master',
			'type' => 'AGGRO',
			'hero' => 'WARRIOR'
		));
		DB::table('decks')->delete();
		User::create(array(
			'user_id' => 2,
			'public' => true,
			'name' => 'Frost',
			'type' => 'COMBO',
			'hero' => 'MAGE'
		));
		DB::table('decks')->delete();
		User::create(array(
			'user_id' => 2,
			'public' => true,
			'name' => 'palaheal',
			'type' => 'CONTROL',
			'hero' => 'PALADIN'
		));
	}
}
