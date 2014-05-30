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
		<nav class="navbar navbar-inverse navbar-embossed" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
					<span class="sr-only">Toggle navigation</span>
				</button>
				<a class="navbar-brand" href="#">HS Analytics</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse-01">
				<ul class="nav navbar-nav navbar-left">
					<li><a href="{{ action('HomeController@showDecklist') }}">Decklist</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{ action('AccountController@doLogout') }}" class="glyphicon glyphicon-off"></a></li>
				</ul>
			</div>
		</nav>

		<div class="container">
			@yield('content')
		</div>
	</body>
</html>