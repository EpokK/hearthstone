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
		$this->call('DeckTableSeeder');
		$this->call('CardTableSeeder');
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

// class CardDeckTableSeeder extends Seeder {
// 	public function run() {
// 		DB::table('card_deck')->delete();
// 		User::create(array(
// 			'id' => 'EpokK',
// 			'email'    => 'richard.tetaz@gmail.com',
// 			'password' => Hash::make('password')
// 		));
// 	}
// }

class DeckTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('decks')->delete();
		Deck::create(array(
			'user_id' => 2,
			'public' => true,
			'name' => 'Zoo',
			'type' => 'AGGRO',
			'hero' => 'WARLOCK'
		));
		Deck::create(array(
			'user_id' => 2,
			'public' => false,
			'name' => 'Huntard',
			'type' => 'AGGRO',
			'hero' => 'HUNTER'
		));
		Deck::create(array(
			'user_id' => 2,
			'public' => false,
			'name' => 'ancient watcher',
			'type' => 'CONTROL',
			'hero' => 'DRUID'
		));
		Deck::create(array(
			'user_id' => 2,
			'public' => true,
			'name' => 'miracle',
			'type' => 'COMBO',
			'hero' => 'ROGUE'
		));
		Deck::create(array(
			'user_id' => 2,
			'public' => true,
			'name' => 'Bloodlust Teacher',
			'type' => 'MIDRANGE',
			'hero' => 'SHAMAN'
		));
		Deck::create(array(
			'user_id' => 2,
			'public' => false,
			'name' => 'Amaz',
			'type' => 'MIDRANGE',
			'hero' => 'PRIEST'
		));
		Deck::create(array(
			'user_id' => 2,
			'public' => false,
			'name' => 'Weapon master',
			'type' => 'AGGRO',
			'hero' => 'WARRIOR'
		));
		Deck::create(array(
			'user_id' => 2,
			'public' => true,
			'name' => 'Frost',
			'type' => 'COMBO',
			'hero' => 'MAGE'
		));
		Deck::create(array(
			'user_id' => 2,
			'public' => true,
			'name' => 'palaheal',
			'type' => 'CONTROL',
			'hero' => 'PALADIN'
		));
	}
}
