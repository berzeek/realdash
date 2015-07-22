<!doctype html>
<html>
<head>

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
  <div class="wrapper">
{{ Form::open(array('url' => 'login', 'class' => 'form-signin')) }}
<h2 class="form-signin-heading">Please login</h2>
@if(Session::has('error'))
<div class="alert-box success">
  <h2>{{ Session::get('error') }}</h2>
</div>
@endif
<div class="controls">
{{ Form::text('email','',array('id'=>'','class'=>'form-control span6','placeholder' => 'Please Enter your Email')) }}
<p class="errors">{{$errors->first('email')}}</p>
</div>
<div class="controls">
{{ Form::password('password',array('class'=>'form-control span6', 'placeholder' => 'Please Enter your Password')) }}
<p class="errors">{{$errors->first('password')}}</p>
</div>
<p>{{ Form::submit('Login', array('class'=>'btn btn-lg btn-primary btn-block')) }}</p>
{{ Form::close() }}

</div>
<style>
body {
	background: #eee !important;
}
.wrapper {
  margin-top: 80px;
  margin-bottom: 80px;
}
.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);

  .form-signin-heading,
	.checkbox {
	  margin-bottom: 30px;
	}

	.form-control span6 {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
	}

  input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	}

	input[type="password"] {
	  margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
</style>
</body>
</html>
