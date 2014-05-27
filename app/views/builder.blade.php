@section('content')
<a href="{{ action('HomeController@showDecklist') }}">Retour aux decks</a>

<h3>Nouveau deck</h3>

<label for="hero">Hero</label>
<select name="hero" id="hero">
@foreach (Deck::heros() as $hero)
	<option value="{{ $hero }}">{{ $hero }}</option>
@endforeach
</select>
<br>
<label for="name">Name</label>
<input type="text" id="name" name="name" />
<br>
<ul id="deck">
</ul>
<script type="text/javascript">
 // todo a completer
</script>

@stop