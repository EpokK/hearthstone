<table>
	<thead>
		<tr><th>Name</th></tr>
	</thead>
	<tbody>
		@foreach ($decks as $deck)
			<tr><td>{{ $deck->name }}</td></tr>
		@endforeach
	</tbody>
</table>
