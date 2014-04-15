@extends('layouts.master')

@section('tab-title')
	<title>Reset Password</title>

@stop

@section('content')
	<div id ="UserBg">
	    <div class='container login-container inner-container'>
	    	<h1>Reset Password</h1>
			{{ Form::open(array('action' => 'RemindersController@postReset', 'class' => 'form-horizontal')) }}
				{{ Form::hidden('token', $token) }}
				<div class='form-group'>
					{{ Form::label('email', 'Email', array('class' => 'col-sm-2 control-label')) }}
					<div class='col-sm-10'>
						{{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) }}
					</div>
				</div>
				<div class='form-group'>
					{{ Form::label('password', 'Password', array('class' => 'col-sm-2 control-label')) }}
					<div class='col-sm-10'>
						{{ Form::password('password', null, array('class' => 'form-control', 'placeholder' => 'Password')) }}
					</div>
				</div>
				<div class='form-group'>
					{{ Form::label('password_confirmation', 'Confirm Password', array('class' => 'col-sm-2 control-label')) }}
					<div class='col-sm-10'>
						{{ Form::password('password_confirmation', null, array('class' => 'form-control', 'placeholder' => 'Confrim Password')) }}
					</div>
				</div>
				<div class='col-sm-10'>
					{{ Form::submit('Reset Password', array('class' => 'btn btn-default')); }}
				</div>
			{{ Form::close() }}
		</div>
	</div>

@stop