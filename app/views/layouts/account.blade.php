<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		{{ HTML::style('css/main.css') }}
		{{ HTML::style('css/flat-ui.css') }}
		<!-- Latest compiled and minified JavaScript -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		{{ HTML::script('javascript/vue.min.js') }}
		<div class="container">
			@yield('content')
		</div>
	</body>
</html>