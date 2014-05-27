@section('content')
<a href="{{ action('HomeController@showDeckbuilder') }}">Creer un nouveau deck</a>
<h3>Decklist</h3>
<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Hero</th>
			<th>Type</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($decks as $deck)
			<tr>
				<td>{{ $deck->name }}</td>
				<td>{{ $deck->hero }}</td>
				<td>{{ $deck->type }}</td>
				<td>
					<a href="{{ action('HomeController@showDeck', $deck->id) }}" title="Voir">Voir</a>
					<a href="{{ action('HomeController@deleteDeck', $deck->id) }}" title="Supprimer">Supprimer</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
@stop
