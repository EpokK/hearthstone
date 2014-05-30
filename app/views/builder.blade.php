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
	<div id="deck">
		<div class="form-group">
		<label for="card">Card</label>
		<select id="card" class="form-control" v-model="card">
			@foreach (Card::all() as $card)
				<option value="{{ $card->id }}">{{ $card->name }}</option>
			@endforeach
		</select>
		<a v-on="click: add" class="glyphicon glyphicon-plus"></a>
		<ul>
			<li v-repeat="cards">[[number]] [[name]] <a v-on="click: remove(this)" class="glyphicon glyphicon-remove"></a></li>
		</ul>
	</div>
</form>
<script type="text/javascript">
Vue.config('delimiters', ['[', ']']);
var deck = new Vue({
	el: '#deck',
	data: {
		count: 2,
		title: 'cards',
		cards: [
			{
				id: 1,
				number: 1,
				name: 'test1 card'
			},
			{
				id: 2,
				number: 1,
				name: 'test2 card'
			}
		]
	},
	methods: {
		add: function(event) {

		},
		remove: function(card) {
			this.cards.$remove(card.$index);
		}
	}
});
</script>
@stop