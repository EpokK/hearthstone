@section('content')
	<h3>Subscribe</h3>

	{{ Form::open(array('url' => 'subscribe')) }}
		<p>
			{{ $errors->first('email') }}
			{{ $errors->first('password') }}
		</p>

		<p>
			{{ Form::label('email', 'Email Address') }}
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
		</p>

		<p>
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}
		</p>

		<p>{{ Form::submit('Submit') }}</p>
	{{ Form::close() }}

	<a href="{{ action('AccountController@showLogin') }}">Login</a>
@stop