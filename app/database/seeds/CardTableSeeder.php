<?php

class CardTableSeeder extends Seeder {
	public function run()
	{
		DB::table('cards')->delete();
		// MAGE
		Card::create(array(
			'name' => 'Arcane Missiles',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '1',
			'attack' => '',
			'life' => '',
			'description' => 'Deal 3 damage randomly split among enemy characters.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
		Card::create(array(
			'name' => 'Mirror Image',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '1',
			'attack' => '',
			'life' => '',
			'description' => 'Summon two 0/2 minions with Taunt.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
		Card::create(array(
			'name' => 'Arcane Explosion',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '2',
			'attack' => '',
			'life' => '',
			'description' => 'Deal 1 damage to all enemy minions.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
		Card::create(array(
			'name' => 'Frostbolt',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '2',
			'attack' => '',
			'life' => '',
			'description' => 'Deal 3 damage to a character and Freeze it.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
		Card::create(array(
			'name' => 'Arcane Intellect',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '3',
			'attack' => '',
			'life' => '',
			'description' => 'Draw 2 cards.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
		Card::create(array(
			'name' => 'Frost Nova',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '3',
			'attack' => '',
			'life' => '',
			'description' => 'Freeze all enemy minions.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
		Card::create(array(
			'name' => 'Fireball',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '4',
			'attack' => '',
			'life' => '',
			'description' => 'Deal 6 damage.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
			Card::create(array(
			'name' => 'Polymorph',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '4',
			'attack' => '',
			'life' => '',
			'description' => 'Transform a minion into a 1/1 Sheep.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
				Card::create(array(
			'name' => 'Water Elemental',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '4',
			'attack' => '3',
			'life' => '6',
			'description' => 'Freeze any character damaged by this minion.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
			Card::create(array(
			'name' => 'Flamestrike',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '7',
			'attack' => '',
			'life' => '',
			'description' => 'Deal 4 damage to all enemy minions.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
	}
}