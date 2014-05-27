<?php

class Card extends Eloquent {
	protected $table = 'cards';

	public function decks() {
		return $this->belongsToMany('Deck');
	}
}