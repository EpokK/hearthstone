<?php

class Deck extends Eloquent {
	protected $table = 'decks';

	public static function heros() {
		return array(
			'MAGE',
			'WARLOCK',
			'HUNTER',
			'WARRIOR',
			'PALADIN',
			'SHAMAN',
			'DRUID',
			'PRIEST',
			'ROGUE'
		);
	}

	public function cards() {
		return $this->belongsToMany('Card');
	}
}