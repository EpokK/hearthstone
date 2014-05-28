@section('content')
<a href="{{ action('HomeController@showDecklist') }}">Retour aux decks</a>

<h3>Nouveau deck</h3>
<form role="form">
	<div class="form-group">
		<label for="hero">Hero</label>
		<select name="hero" id="hero" class="form-control">
		@foreach (Deck::heros() as $hero)
			<option value="{{ $hero }}">{{ $hero }}</option>
		@endforeach
		</select>
	</div>
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" id="name" name="name" placeholder="Name of deck" />
	</div>
</form>
<script type="text/javascript">

</script>
@stop