<?php

class Card extends Eloquent {
	protected $table = 'cards';

	public function decks() {
		return $this->belongsToMany('Deck');
	}

	public function cardHero($hero) {
		return DB::table('cards')
			->where('hero', $hero)
			->whereOr('hero', 'NEUTRAL')
			->get();
	}
}