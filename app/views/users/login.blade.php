@extends('layouts.master')

@section('tab-title')
	<title>Reset Password</title>

@stop

@section('content')

	<div id ="UserBg">
	    <div class='container login-container inner-container'>
	    	<h1>User Login</h1>
	    	<br>
			@if (Session::has('errorMessage'))
		    	<div class="alert alert-danger dif-col">{{{ Session::get('errorMessage') }}}</div>
			@endif
			{{ Form::open(array('action' => 'UsersController@doLogin', 'class' => 'form-horizontal')) }}
				<div class="form-group">
					{{ $errors->has('email') ? $errors->first('email', '<p><span class="help-block">:message</span></p>') : '' }}
					{{ Form::label('email', 'Email',  array('class' => 'col-sm-2 control-label')) }}
					<div class='col-sm-10'>
						{{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email or Username')) }}
					</div>
				</div>
				<div class="form-group">
					{{ $errors->has('password') ? $errors->first('password', '<p><span class="help-block">:message</span></p>') : '' }}
					{{ Form::label('password', 'Password', array('class' => 'col-sm-2 control-label')) }}
					<div class='col-sm-10'>
						{{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
					</div>
				</div>
				<div class="col-sm-10">
					{{ Form::submit('Sign in', array('class' => 'btn btn-default')); }}
				</div>
			{{ Form::close() }}
			<br>
			<br>
			<button id='forgot_pass' class='btn btn-block btn-primary extrnal'>Forgot Password?</button>
		</div>

@stop