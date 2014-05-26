<?php

class CardTableSeeder extends Seeder {
	public function run()
	{
		DB::table('cards')->delete();
		// MAGE
		Card::create(array(
			'name' => ''
			'rarity' => ''
				// 'COMMON',
				// 'RARE',
				// 'EPIC',
				// 'LEGENDARY'
			'image1' => '',
			'image2' => '',
			'cost' => '',
			'attack' => '',
			'life' => '',
			'description' => '',
			'type' => ''
				// 'DRAGON',
				// 'BEAST',
				// 'MURLOC',
				// 'PIRATE',
				// 'NONE'
			'hero' => ''
				// 'MAGE',
				// 'WARLOCK',
				// 'HUNTER',
				// 'WARRIOR',
				// 'PALADIN',
				// 'SHAMAN',
				// 'DRUID',
				// 'PRIEST',
				// 'ROGUE',
				// 'NEUTRAL'
		));
	}
}