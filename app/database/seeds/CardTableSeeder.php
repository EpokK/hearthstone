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
			// DRUID BASIC
			Card::create(array(
			'name' => 'Moonfire',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '0',
			'attack' => '',
			'life' => '',
			'description' => 'Deal 1 damage.',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			Card::create(array(
			'name' => 'Innervate',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '0',
			'attack' => '',
			'life' => '',
			'description' => 'Gain 2 Mana Crystals this turn only.',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			Card::create(array(
			'name' => 'Claw',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '1',
			'attack' => '',
			'life' => '',
			'description' => 'Give your hero +2 Attack this turn and 2 Armor.',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			Card::create(array(
			'name' => 'Wild Gromth',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '2',
			'attack' => '',
			'life' => '',
			'description' => 'Gain an empty Mana Crystal.',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			Card::create(array(
			'name' => 'Mark of the Wild',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '2',
			'attack' => '',
			'life' => '',
			'description' => 'Give a minion Taunt and +2/+2 (+2 Attack/ +2 Health).',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			Card::create(array(
			'name' => 'Savage Roar',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '3',
			'attack' => '',
			'life' => '',
			'description' => 'Give your characters +2 Attacks this turn.',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			Card::create(array(
			'name' => 'Healing Touch',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '3',
			'attack' => '',
			'life' => '',
			'description' => 'Restore 8 Health.',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			Card::create(array(
			'name' => 'Swipe',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '4',
			'attack' => '',
			'life' => '',
			'description' => 'Deal 4 damage to an anemy and 1 damage to all other enemies.',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			Card::create(array(
			'name' => 'Starfire',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '6',
			'attack' => '',
			'life' => '',
			'description' => 'Deal 5 damage. Draw a card.',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			Card::create(array(
			'name' => 'Ironbark protector',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '8',
			'attack' => '8',
			'life' => '8',
			'description' => 'Taunt',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			// DRUID COMMON
			Card::create(array(
			'name' => 'Naturalize',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '1',
			'attack' => '',
			'life' => '',
			'description' => 'Destroy a minion. Your opponent draws 2 cards.',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			Card::create(array(
			'name' => 'Wrath',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '2',
			'attack' => '',
			'life' => '',
			'description' => 'Choose One - Deal 3 damage to a minion; or 1 damage and draw a card.',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			Card::create(array(
			'name' => 'Power of the Wild',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '2',
			'attack' => '',
			'life' => '',
			'description' => 'Choose One - Give your minions +1/+1; or Summon a 3/2 Panther.',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			Card::create(array(
			'name' => 'Mark of Nature',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '3',
			'attack' => '',
			'life' => '',
			'description' => 'Choose One - Give a minion +4 Attacks; or +4 Health and Taunt.',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			Card::create(array(
			'name' => 'Soul of the Forest',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '4',
			'attack' => '',
			'life' => '',
			'description' => 'Give your minions " Deathrattle: Summon a 2/2 treant.',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			Card::create(array(
			'name' => 'Druid of the Claw',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '4',
			'attack' => '4',
			'life' => '4',
			'description' => 'Choose One - Charge; or +2 Health and Taunt.',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			// DRUID RARE
			Card::create(array(
			'name' => 'Savagery',
			'rarity' => 'RARE',
			'image1' => '',
			'image2' => '',
			'cost' => '1',
			'attack' => '',
			'life' => '',
			'description' => 'Deal damage equal to your hero\'s Attack to a minion.',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			Card::create(array(
			'name' => 'Bite',
			'rarity' => 'RARE',
			'image1' => '',
			'image2' => '',
			'cost' => '4',
			'attack' => '',
			'life' => '',
			'description' => 'Give your hero +4 Attack this turn and 4 Armor.',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			Card::create(array(
			'name' => 'Keeper of the Grove',
			'rarity' => 'RARE',
			'image1' => '',
			'image2' => '',
			'cost' => '4',
			'attack' => '2',
			'life' => '4',
			'description' => 'Choose One - Deal 2 damage; or Silence a minion.',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			Card::create(array(
			'name' => 'Nourish',
			'rarity' => 'RARE',
			'image1' => '',
			'image2' => '',
			'cost' => '5',
			'attack' => '',
			'life' => '',
			'description' => 'Choose One - Gain 2 Mana Crystals; or Draw 3 cards.',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			Card::create(array(
			'name' => 'Starfall',
			'rarity' => 'RARE',
			'image1' => '',
			'image2' => '',
			'cost' => '5',
			'attack' => '',
			'life' => '',
			'description' => 'Choose One - Deal 5 damage to a minion; or 2 damage to all enemy minions.',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			// DRUID EPIC
			Card::create(array(
			'name' => 'Force of Nature',
			'rarity' => 'EPIC',
			'image1' => '',
			'image2' => '',
			'cost' => '6',
			'attack' => '',
			'life' => '',
			'description' => 'Summon three 2/2 Treants with Charge that die at the end of the turn.',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			Card::create(array(
			'name' => 'Ancient of Lore',
			'rarity' => 'EPIC',
			'image1' => '',
			'image2' => '',
			'cost' => '7',
			'attack' => '',
			'life' => '',
			'description' => 'Choose One - Draw 2 cards; or Restore 5 Health.',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			Card::create(array(
			'name' => 'Ancient of War',
			'rarity' => 'EPIC',
			'image1' => '',
			'image2' => '',
			'cost' => '7',
			'attack' => '5',
			'life' => '5',
			'description' => 'Choose One - +5 Attacks; or +5 Health and Taunt.',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			// DRUID LEGENDARY
			Card::create(array(
			'name' => 'Cenarius',
			'rarity' => 'LEGENDARY',
			'image1' => '',
			'image2' => '',
			'cost' => '9',
			'attack' => '5',
			'life' => '8',
			'description' => 'Choose One - Give your other minions +2/+2; or Summon two 2/2 Treants with Taunt.',
			'type' => 'NONE',
			'hero' => 'DRUID'
		));
			// Hunter basic
			Card::create(array(
			'name' => 'Hunter\'s Mark',
			'rarity' => 'Basic',
			'image1' => '',
			'image2' => '',
			'cost' => '0',
			'attack' => '',
			'life' => '',
			'description' => 'Change a minion\'s Health to 1.',
			'type' => 'NONE',
			'hero' => 'HUNTER'
		));
			Card::create(array(
			'name' => 'Timber Wolf',
			'rarity' => 'Basic',
			'image1' => '',
			'image2' => '',
			'cost' => '1',
			'attack' => '1',
			'life' => '1',
			'description' => 'Your other Beasts have +1 Attack.',
			'type' => 'BEAST',
			'hero' => 'HUNTER'
		));
			Card::create(array(
			'name' => 'Arcane Shot',
			'rarity' => 'Basic',
			'image1' => '',
			'image2' => '',
			'cost' => '1',
			'attack' => '',
			'life' => '',
			'description' => 'Deal 2 damage.',
			'type' => 'NONE',
			'hero' => 'HUNTER'
		));
			Card::create(array(
			'name' => 'Tracking',
			'rarity' => 'Basic',
			'image1' => '',
			'image2' => '',
			'cost' => '1',
			'attack' => '',
			'life' => '',
			'description' => 'Look at the top three cards of your deck. Draw one and discard the others.',
			'type' => 'NONE',
			'hero' => 'HUNTER'
		));
			Card::create(array(
			'name' => 'Starving Buzzard',
			'rarity' => 'Basic',
			'image1' => '',
			'image2' => '',
			'cost' => '2',
			'attack' => '2',
			'life' => '1',
			'description' => 'Whenever you summon a Beast, draw a card.',
			'type' => 'BEAST',
			'hero' => 'HUNTER'
		));
			Card::create(array(
			'name' => 'Animal Companion',
			'rarity' => 'Basic',
			'image1' => '',
			'image2' => '',
			'cost' => '3',
			'attack' => '',
			'life' => '',
			'description' => 'Summon a random Beast Companion.',
			'type' => 'NONE',
			'hero' => 'HUNTER'
		));
			Card::create(array(
			'name' => 'Kill Command',
			'rarity' => 'Basic',
			'image1' => '',
			'image2' => '',
			'cost' => '3',
			'attack' => '',
			'life' => '',
			'description' => 'Deal 3 damage. If you have a Beast, deal 5 damage instead.',
			'type' => 'NONE',
			'hero' => 'HUNTER'
		));
			Card::create(array(
			'name' => 'Houndmaster',
			'rarity' => 'Basic',
			'image1' => '',
			'image2' => '',
			'cost' => '4',
			'attack' => '4',
			'life' => '3',
			'description' => 'Battlecry: Give a frindly Beast +2/+2 and Taunt.',
			'type' => 'NONE',
			'hero' => 'HUNTER'
		));
			Card::create(array(
			'name' => 'Multi-Shot',
			'rarity' => 'Basic',
			'image1' => '',
			'image2' => '',
			'cost' => '4',
			'attack' => '',
			'life' => '',
			'description' => 'Deal 3 damage to two random enemy minions.',
			'type' => 'NONE',
			'hero' => 'HUNTER'
		));
			Card::create(array(
			'name' => 'Tundra Rhino',
			'rarity' => 'Basic',
			'image1' => '',
			'image2' => '',
			'cost' => '5',
			'attack' => '2',
			'life' => '5',
			'description' => 'Your Beasts have Charge.',
			'type' => 'BEAST',
			'hero' => 'HUNTER'
		));
			//Hunter Common
			Card::create(array(
			'name' => 'Explosive Trap',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '2',
			'attack' => '',
			'life' => '',
			'description' => 'Secret: When your hero is attacked, deal 2 damage to all enemies.',
			'type' => 'NONE',
			'hero' => 'HUNTER'
		));
			Card::create(array(
			'name' => 'Freezing Trap',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '2',
			'attack' => '',
			'life' => '',
			'description' => 'Secret: When an enemy minions attacks, return it to its owner\'s hand and it costs (2) more.',
			'type' => 'NONE',
			'hero' => 'HUNTER'
		));
			Card::create(array(
			'name' => 'Snipe',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '2',
			'attack' => '',
			'life' => '',
			'description' => 'Secret: When your opponent plays a minion, deal 4 damage to it.',
			'type' => 'NONE',
			'hero' => 'HUNTER'
		));
			Card::create(array(
			'name' => 'Scavenging Hyena',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '2',
			'attack' => '',
			'life' => '',
			'description' => 'Whenever a friendly Beast dies, gain +2/+1.',
			'type' => 'NONE',
			'hero' => 'HUNTER'
		));
			Card::create(array(
			'name' => 'Deadly Shot',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '3',
			'attack' => '',
			'life' => '',
			'description' => 'Destroy a random enemy minion.',
			'type' => 'NONE',
			'hero' => 'HUNTER'
		));
			Card::create(array(
			'name' => 'Unleash the Hounds',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '3',
			'attack' => '',
			'life' => '',
			'description' => 'For each enemy minion, summon a 1/1 Hound with Charge',
			'type' => 'NONE',
			'hero' => 'HUNTER'
		));
			// Hunter Rare
			Card::create(array(
			'name' => 'Flare',
			'rarity' => 'RARE',
			'image1' => '',
			'image2' => '',
			'cost' => '1',
			'attack' => '',
			'life' => '',
			'description' => 'All minions lose Stealth. Destroy all enemy Secrets. Draw a card.',
			'type' => 'NONE',
			'hero' => 'HUNTER'
		));
			Card::create(array(
			'name' => 'Misdirection',
			'rarity' => 'RARE',
			'image1' => '',
			'image2' => '',
			'cost' => '2',
			'attack' => '',
			'life' => '',
			'description' => 'Secret: When a charcater attacks your hero, instead he attacks another random charcater.',
			'type' => 'NONE',
			'hero' => 'HUNTER'
		));
			Card::create(array(
			'name' => 'Eaglehorn Bow',
			'rarity' => 'RARE',
			'image1' => '',
			'image2' => '',
			'cost' => '3',
			'attack' => '3',
			'life' => '2',
			'description' => 'Whenever a Secret is revealed, gain +1 Durability.',
			'type' => 'WEAPON',
			'hero' => 'HUNTER'
		));
			Card::create(array(
			'name' => 'Explosive Shot',
			'rarity' => 'RARE',
			'image1' => '',
			'image2' => '',
			'cost' => '5',
			'attack' => '',
			'life' => '',
			'description' => 'Deal 5 demage to a minion and 2 damage to adjacent ones.',
			'type' => 'NONE',
			'hero' => 'HUNTER'
		));
			Card::create(array(
			'name' => 'Savannah Highmane',
			'rarity' => 'RARE',
			'image1' => '',
			'image2' => '',
			'cost' => '6',
			'attack' => '6',
			'life' => '5',
			'description' => 'Deathrattle: Summon two 2/2 Hyenas.',
			'type' => 'BEAST',
			'hero' => 'HUNTER'
		));
			// Hunter Epic
			Card::create(array(
			'name' => 'Bestial Wrath',
			'rarity' => 'EPIC',
			'image1' => '',
			'image2' => '',
			'cost' => '1',
			'attack' => '',
			'life' => '',
			'description' => 'Give a Beast +2 Attack and Immune this turn.',
			'type' => 'NONE',
			'hero' => 'HUNTER'
		));
			Card::create(array(
			'name' => 'Snake Trap',
			'rarity' => 'EPIC',
			'image1' => '',
			'image2' => '',
			'cost' => '2',
			'attack' => '',
			'life' => '',
			'description' => 'Secret: When one of your minions is attacked, summon three 1/1 Snakes.',
			'type' => 'NONE',
			'hero' => 'HUNTER'
		));
			Card::create(array(
			'name' => 'Gladiator\'s Longbow',
			'rarity' => 'EPIC',
			'image1' => '',
			'image2' => '',
			'cost' => '7',
			'attack' => '5',
			'life' => '2',
			'description' => 'Your hero is Immune while attacking.',
			'type' => 'WEAPON',
			'hero' => 'HUNTER'
		));
			// Hunter Legendary
			Card::create(array(
			'name' => 'King Kruch',
			'rarity' => 'LEGENDARY',
			'image1' => '',
			'image2' => '',
			'cost' => '9',
			'attack' => '8',
			'life' => '8',
			'description' => 'Charge.',
			'type' => 'BEAST',
			'hero' => 'HUNTER'
		));
			// Paladin Basic
			Card::create(array(
			'name' => 'Blessing of Might',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '1',
			'attack' => '',
			'life' => '',
			'description' => 'Give a minion +3 Attack.',
			'type' => 'NONE',
			'hero' => 'PALADIN'
		));
			Card::create(array(
			'name' => 'Hand of Protection',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '1',
			'attack' => '',
			'life' => '',
			'description' => 'Give a minion Divine Shield.',
			'type' => 'NONE',
			'hero' => 'PALADIN'
		));
			Card::create(array(
			'name' => 'Humility',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '1',
			'attack' => '',
			'life' => '',
			'description' => 'Change a minion\'s Attack to 1.',
			'type' => 'NONE',
			'hero' => 'PALADIN'
		));
			Card::create(array(
			'name' => 'Light\'s Justice',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '1',
			'attack' => '1',
			'life' => '4',
			'description' => 'Give a minion +3 Attack.',
			'type' => 'WEAPON',
			'hero' => 'PALADIN'
		));
			Card::create(array(
			'name' => 'Holy Light',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '2',
			'attack' => '',
			'life' => '',
			'description' => 'Restore 6 Health.',
			'type' => 'NONE',
			'hero' => 'PALADIN'
		));
			Card::create(array(
			'name' => 'Blessing of Kings',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '4',
			'attack' => '',
			'life' => '',
			'description' => 'Give a minion +4/+4. (+4 Attack/ +4 Health).',
			'type' => 'NONE',
			'hero' => 'PALADIN'
		));
			Card::create(array(
			'name' => 'Consecration',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '4',
			'attack' => '',
			'life' => '',
			'description' => 'Deal 2 damage to all enemies.',
			'type' => 'NONE',
			'hero' => 'PALADIN'
		));
			Card::create(array(
			'name' => 'Hammer of Wrath',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '4',
			'attack' => '',
			'life' => '',
			'description' => 'Deal 3 damage. Draw a crad.',
			'type' => 'NONE',
			'hero' => 'PALADIN'
		));
			Card::create(array(
			'name' => 'Truesilver Champion',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '4',
			'attack' => '4',
			'life' => '2',
			'description' => 'Whenever your hero attacks, restore 2 Health to it.',
			'type' => 'WEAPON',
			'hero' => 'PALADIN'
		));
			Card::create(array(
			'name' => 'Guardien of Kings',
			'rarity' => 'BASIC',
			'image1' => '',
			'image2' => '',
			'cost' => '7',
			'attack' => '5',
			'life' => '6',
			'description' => 'Battlecry: Restore 6 Health to your hero.',
			'type' => 'NONE',
			'hero' => 'PALADIN'
		));
			// Paladin Common
			Card::create(array(
			'name' => 'Blessing of Wisdom',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '1',
			'attack' => '',
			'life' => '',
			'description' => 'Choose a minion. Whenever it attacks, draw a card.',
			'type' => 'NONE',
			'hero' => 'PALADIN'
		));
			Card::create(array(
			'name' => 'Eye for an Eye',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '1',
			'attack' => '',
			'life' => '',
			'description' => 'Secret: When your hero takes damage, deals that much damage to the enemy hero.',
			'type' => 'NONE',
			'hero' => 'PALADIN'
		));
			Card::create(array(
			'name' => 'Noble Sacrifice',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '1',
			'attack' => '',
			'life' => '',
			'description' => 'Secret: When an enemy attacks, summon a 2/1 Defender as the new target.',
			'type' => 'NONE',
			'hero' => 'PALADIN'
		));
			Card::create(array(
			'name' => 'Redemption',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '1',
			'attack' => '',
			'life' => '',
			'description' => 'Secret: When one of your minions dies, return it to life with 1 Health.',
			'type' => 'NONE',
			'hero' => 'PALADIN'
		));
			Card::create(array(
			'name' => 'Repentance',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '1',
			'attack' => '',
			'life' => '',
			'description' => 'Secret: When your opponent plays a minion, reduce its Health to 1.',
			'type' => 'NONE',
			'hero' => 'PALADIN'
		));
			Card::create(array(
			'name' => 'Argent Protector',
			'rarity' => 'COMMON',
			'image1' => '',
			'image2' => '',
			'cost' => '2',
			'attack' => '2',
			'life' => '2',
			'description' => 'Battlecry: Give a frindly minion Divine Shield.',
			'type' => 'NONE',
			'hero' => 'PALADIN'
		));
			// Paladin Rare
			Card::create(array(
			'name' => 'Equality',
			'rarity' => 'RARE',
			'image1' => '',
			'image2' => '',
			'cost' => '2',
			'attack' => '',
			'life' => '',
			'description' => 'Change the Health of ALL minions to 1.',
			'type' => 'NONE',
			'hero' => 'PALADIN'
		));
			Card::create(array(
			'name' => 'Aldor Peacekeeper',
			'rarity' => 'RARE',
			'image1' => '',
			'image2' => '',
			'cost' => '3',
			'attack' => '3',
			'life' => '3',
			'description' => 'Battlecry: Change an ennemy minion\'s Attack to 1.',
			'type' => 'NONE',
			'hero' => 'PALADIN'
		));
			Card::create(array(
			'name' => 'Divine Favor',
			'rarity' => 'RARE',
			'image1' => '',
			'image2' => '',
			'cost' => '3',
			'attack' => '',
			'life' => '',
			'description' => 'Draw cards until you have as many in hand as your opponent.',
			'type' => 'NONE',
			'hero' => 'PALADIN'
		));
			Card::create(array(
			'name' => 'Blessed Champion',
			'rarity' => 'RARE',
			'image1' => '',
			'image2' => '',
			'cost' => '5',
			'attack' => '',
			'life' => '',
			'description' => 'Double a minion\'s Attack.',
			'type' => 'NONE',
			'hero' => 'PALADIN'
		));
			Card::create(array(
			'name' => 'Holy Wrath',
			'rarity' => 'RARE',
			'image1' => '',
			'image2' => '',
			'cost' => '5',
			'attack' => '',
			'life' => '',
			'description' => 'Draw a card and deal damage equal to its cost.',
			'type' => 'NONE',
			'hero' => 'PALADIN'
		));
			// Paladin Epic
			Card::create(array(
			'name' => 'Sword of Justice',
			'rarity' => 'EPIC',
			'image1' => '',
			'image2' => '',
			'cost' => '3',
			'attack' => '1',
			'life' => '5',
			'description' => 'Whenever you summon a minion, give it +1/+1 and this loses 1 Durability.',
			'type' => 'WEAPON',
			'hero' => 'PALADIN'
		));
			Card::create(array(
			'name' => 'Avenging Wrath',
			'rarity' => 'EPIC',
			'image1' => '',
			'image2' => '',
			'cost' => '6',
			'attack' => '',
			'life' => '',
			'description' => 'Deal 8 damage randomly split among enemy characters.',
			'type' => 'NONE',
			'hero' => 'PALADIN'
		));
			Card::create(array(
			'name' => 'Lay on Hands',
			'rarity' => 'EPIC',
			'image1' => '',
			'image2' => '',
			'cost' => '8',
			'attack' => '',
			'life' => '',
			'description' => 'Restore 8 Health. Draw 3 cards.',
			'type' => 'NONE',
			'hero' => 'PALADIN'
		));
			// Paladin Legendary
			Card::create(array(
			'name' => 'Tirion Fordring',
			'rarity' => 'LEGENDARY',
			'image1' => '',
			'image2' => '',
			'cost' => '8',
			'attack' => '6',
			'life' => '6',
			'description' => 'Divine Shield. Taunt. Deathrattle: Equip a 5/3 Ashbringer.',
			'type' => 'NONE',
			'hero' => 'PALADIN'
		));
	}
}