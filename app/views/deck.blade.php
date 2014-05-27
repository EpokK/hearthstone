<a href="{{ action('HomeController@showDecklist') }}">Retour aux decks</a>

<h3>{{ $deck->name }}</h3>

<ul>
@foreach ($deck->cards as $card)
	<li>{{ $card->name }}</li>
@endforeach
</ul>