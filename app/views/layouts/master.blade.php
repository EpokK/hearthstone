<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
		{{ HTML::style('css/main.css') }}
		<div class="container">
			@yield('content')
		</div>
	</body>
</html>