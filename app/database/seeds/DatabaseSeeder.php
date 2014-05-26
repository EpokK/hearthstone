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
		// DB::table('decks')->delete();
		// User::create(array(
		// 	'username' => 'EpokK',
		// 	'email'    => 'richard.tetaz@gmail.com',
		// 	'password' => Hash::make('password')
		// ));
		// User::create(array(
		// 	'username' => 'Zodd',
		// 	'email'    => 'guillaume.thomy@gmail.com',
		// 	'password' => Hash::make('password')
		// ));
	}
}
