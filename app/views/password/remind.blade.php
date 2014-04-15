@extends('layouts.master')

@section('tab-title')
	<title>Reset Password</title>

@stop

@section('content')
	<div id ="UserBg">
	    <div class='container login-container inner-container'>
	    	<h1>Reset Password</h1>
			{{ Form::open(array('action' => 'RemindersController@postRemind', 'class' => 'form-horizontal')) }}
				<div class='form-group'>
					{{ Form::label('email', 'Email', array('class' => 'col-sm-2 control-label')) }}
					<div class='col-sm-10'>
						{{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) }}
					</div>
				</div>
				<div class='col-sm-10'>
					{{ Form::submit('Send Reminder', array('class' => 'btn btn-default')); }}
				</div>
			{{ Form::close() }}
		</div>
	</div>

@stop