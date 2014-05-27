<?php

class CardTableSeeder extends Seeder {
	public function run()
	{
		DB::table('cards')->delete();
		// MAGE Basic
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
		// MAGE COMMON
			Card::create(array(
			'name' => 'Ice Lance',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '1',
			'attack' => '',
			'life' => '',
			'description' => 'Freeze a character. If it was already Frozen, deal 4 damage instead.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
			Card::create(array(
			'name' => 'Mana Wyrm',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '1',
			'attack' => '1',
			'life' => '3',
			'description' => 'Whenever you cast a spell, gain +1 Attack.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
			Card::create(array(
			'name' => 'Sorcerer\'s Apprentice',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '2',
			'attack' => '3',
			'life' => '2',
			'description' => 'Your spells cost (1) less.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
			Card::create(array(
			'name' => 'Ice Barrier',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '3',
			'attack' => '',
			'life' => '',
			'description' => 'Secret: As soon as your hero is attacked, gain 8 Armor.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));		
			Card::create(array(
			'name' => 'Mirror Entity',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '3',
			'attack' => '',
			'life' => '',
			'description' => 'Secret: When your opponent plays a minion, summon a copy of it.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
			Card::create(array(
			'name' => 'Cone of Cold',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '4',
			'attack' => '',
			'life' => '',
			'description' => 'Freeze a minion and the minions next to it, and deal 1 damage to them.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
			// MAGE RARE
			Card::create(array(
			'name' => 'Counterspell',
			'rarity' => 'RARE',
			'image1' => '',
			'image2' => '',
			'cost' => '3',
			'attack' => '',
			'life' => '',
			'description' => 'Secret: When your opponent casts a spell, Counter it.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
			Card::create(array(
			'name' => 'Kirin Tor Mage',
			'rarity' => 'RARE',
			'image1' => '',
			'image2' => '',
			'cost' => '3',
			'attack' => '4',
			'life' => '3',
			'description' => 'Battlecry: The next Secret you play this turn costs (0).',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
			Card::create(array(
			'name' => 'Vaporize',
			'rarity' => 'RARE',
			'image1' => '',
			'image2' => '',
			'cost' => '3',
			'attack' => '',
			'life' => '',
			'description' => 'Secret: When a minion attacks your hero, destroy it.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
			Card::create(array(
			'name' => 'Ethereal Arcanist',
			'rarity' => 'RARE',
			'image1' => '',
			'image2' => '',
			'cost' => '4',
			'attack' => '3',
			'life' => '3',
			'description' => 'If you control a Secret at the end of your turn, gain +2/+2.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
			Card::create(array(
			'name' => 'Blizzard',
			'rarity' => 'RARE',
			'image1' => '',
			'image2' => '',
			'cost' => '6',
			'attack' => '',
			'life' => '',
			'description' => 'Deal 2 damage to all enemy minions and Freeze them.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
			// MAGE EPIC
			Card::create(array(
			'name' => 'Ice Block',
			'rarity' => 'EPIC',
			'image1' => '',
			'image2' => '',
			'cost' => '3',
			'attack' => '',
			'life' => '',
			'description' => 'Secret: When your hero takes fatal damage, prevent it and become Immune this turn.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
			Card::create(array(
			'name' => 'Spellbender',
			'rarity' => 'EPIC',
			'image1' => '',
			'image2' => '',
			'cost' => '3',
			'attack' => '',
			'life' => '',
			'description' => 'Secret: When an enemy casts a spell on a minion, summon a 1/3 as the new target.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
			Card::create(array(
			'name' => 'Pyroblast',
			'rarity' => 'EPIC',
			'image1' => '',
			'image2' => '',
			'cost' => '10',
			'attack' => '',
			'life' => '',
			'description' => 'Deal 10 damage.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
			// MAGE LEGENDARY
			Card::create(array(
			'name' => 'Arechmage Antonidas',
			'rarity' => 'LEGENDARY',
			'image1' => '',
			'image2' => '',
			'cost' => '7',
			'attack' => '5',
			'life' => '7',
			'description' => 'Whenever you cast a spell, put a \'Fireball \' spell into your hand.',
			'type' => 'NONE',
			'hero' => 'MAGE'
		));
	}
}