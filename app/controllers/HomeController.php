<?php

class HomeController extends BaseController {
	protected $layout = 'layouts.master';

	public function showDecklist() {
		$decks = DB::table('decks')->paginate(20);
		$this->layout->content = View::make('decklist')->with('decks', $decks);
	}

	public function showDeckbuilder() {
		$this->layout->content = View::make('builder');
	}

	public function showDeck($id) {
		$deck = Deck::find($id);
		$this->layout->content = View::make('deck')->with('deck', $deck);
	}

	public function deleteDeck($id) {
		Deck::find($id)->delete();
		return Redirect::to('deck');
	}

	public function addCard($deck_id, $card_id) {
		DB::table('card_deck')->insert(array(
			'deck_id' => $deck_id,
			'card_id' => $card_id
		));
	}

	public function deleteCard($deck_id, $card_id) {
		DB::table('card_deck')
			->where('deck_id', $deck_id)
			->where('card_id', $card_id)
			->delete();
	}
}
