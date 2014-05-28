@section('content')
<a href="{{ action('HomeController@showDeckbuilder') }}" class="btn btn-primary" title="Creer un nouveau deck">Nouveau deck</a>
<h3>Decklist</h3>
<table class="table">
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
				<td><span class="label label-default">{{ $deck->type }}</span></td>
				<td>
					<a class="glyphicon glyphicon-eye-open" href="{{ action('HomeController@showDeck', $deck->id) }}" title="Voir"></a>
					<a class="glyphicon glyphicon-remove" href="{{ action('HomeController@deleteDeck', $deck->id) }}" title="Supprimer"></a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
@stop
