<?php

class Deck extends Eloquent {
	protected $table = 'decks';

	public function cards() {
		return $this->belongsToMany('Card');
	}
}