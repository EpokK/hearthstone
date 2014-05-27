<h3>{{ $deck->name }}</h3>

<ul>
@foreach ($cards as $card)
	<li>{{ $card->name }}</li>
@endforeach
</ul>