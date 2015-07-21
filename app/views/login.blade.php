<!-- app/views/login.blade.php -->
<!doctype html>
<html>
<head>
<title>RealDash Login</title>
</head>
<body>

{{ Form::open(array('url' => 'login')) }}
<h1>Login</h1>

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('username') }}
    {{ $errors->first('password') }}
</p>

<p>
    {{ Form::label('username', 'Username') }}
    {{ Form::text('username', Input::old('username')) }}
</p>

<p>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
</p>

<p>{{ Form::submit('Login') }}</p>
{{ Form::close() }}
