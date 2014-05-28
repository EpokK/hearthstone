@section('content')
<a href="{{ action('HomeController@showDecklist') }}">Retour aux decks</a>

<h3>{{ $deck->name }}</h3>

<ul>
@foreach ($deck->cards as $card)
	<li>{{ $card->name }} <a class="glyphicon glyphicon-remove" href="{{ action('HomeController@deleteCard', $deck->id, $card->id) }}"></a></li>
@endforeach
</ul>
@stop