<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Hero</th>
			<th>Type</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($decks as $deck)
			<tr>
				<td>{{ $deck->name }}</td>
				<td>{{ $deck->hero }}</td>
				<td>{{ $deck->type }}</td>
			</tr>
		@endforeach
	</tbody>
</table>
