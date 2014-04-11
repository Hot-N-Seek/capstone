@extends('layouts.master')

@section('tab-title')
	<title>User Info</title>

@stop

@section('content')
    <!-- HEADER -->
    <header id="header">
        <div class="container">

            <!-- LOGO -->
            <a href="#home" class="pull-left scrollTo"><img src="/assets/images/logo.png" height="60" alt="welcome" /></a>

            <!-- MOBILE MENU -->
            <button id="mobileMenu" class="fa fa-bars" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"></button>

            <!-- NAV MENU -->
            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                <ul id="onepageNav" class="nav navbar-nav navbar-right"><!-- id="onepageNav" for homepage only -->
                    <li><a href="/" class='external'>HOME</a></li>
                </ul>
            </nav>
            <!-- /NAV MENU -->

        </div>
    </header>
    <!-- /HEADER -->
    <div id ="UserBg">
	    <div class='container login-container inner-container'>
			@if ($edit)
				<h1>Update User Info</h1>
	    		{{ Form::open(array('action' => array('UsersController@update', $user->id), 'class' => 'form-horizontal', 'method' => 'put')) }}
	    	@else
	    		<h1>Sign Up User</h1>
	    		{{ Form::open(array('action' => 'UsersController@store', 'class' => 'form-horizontal')) }}
	    	@endif


	    	@if (Session::has('successMessage'))
			    <div class="alert alert-success dif-col">{{{ Session::get('successMessage') }}}</div>
			@endif
			@if (Session::has('errorMessage'))
			    <div class="alert alert-danger dif-col">{{{ Session::get('errorMessage') }}}</div>
			@endif

	    	<div class='form-group'>
	    		{{ $errors->has('email') ? $errors->first('email', '<p><span class="help-block">:message</span></p>') : '' }}
		    	{{ Form::label('email', 'Email', array('class' => 'col-sm-2 control-label')) }}
		    	<div class='col-sm-10'>
		    		@if ($edit)
						{{ Form::text('email', $user->email, array('class' => 'form-control', 'placeholder' => 'Email')) }}
					@else
						{{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) }}
					@endif
				</div>
			</div>
			@if ($edit)
				<div class='form-group'>
					{{ $errors->has('old_password') ? $errors->first('old_password', '<p><span class="help-block">:message</span></p>') : '' }}
					{{ Form::label('old_password', 'Old Password', array('class' => 'col-sm-2 control-label')) }}
					<div class='col-sm-10'>
						@if ($edit)
							{{ Form::password('old_password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
						@else
							{{ Form::password('old_password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
						@endif
					</div>
				</div>
			@endif
			<div class='form-group'>
				{{ $errors->has('password') ? $errors->first('password', '<p><span class="help-block">:message</span></p>') : '' }}
				{{ Form::label('password', 'Password', array('class' => 'col-sm-2 control-label')) }}
				<div class='col-sm-10'>
					@if ($edit)
						{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
					@else
						{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
					@endif
				</div>
			</div>
			<div class='form-group'>
				{{ $errors->has('password2') ? $errors->first('password2', '<p><span class="help-block">:message</span></p>') : '' }}
				{{ Form::label('password2', 'Confirm Password', array('class' => 'col-sm-2 control-label')) }}
				<div class='col-sm-10'>
					@if ($edit)
						{{ Form::password('password2', array('class' => 'form-control', 'placeholder' => 'Password')) }}
					@else
						{{ Form::password('password2', array('class' => 'form-control', 'placeholder' => 'Password')) }}
					@endif
				</div>
			</div>
			<div class='form-group'>
	    		{{ $errors->has('username') ? $errors->first('username', '<p><span class="help-block">:message</span></p>') : '' }}
		    	{{ Form::label('username', 'Username', array('class' => 'col-sm-2 control-label')) }}
		    	<div class='col-sm-10'>
		    		@if ($edit)
						{{ Form::text('username', $user->username, array('class' => 'form-control', 'placeholder' => 'Username')) }}
					@else
						{{ Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'Username')) }}
					@endif
				</div>
			</div>
			<div class='form-group'>
	    		{{ $errors->has('first_name') ? $errors->first('first_name', '<p><span class="help-block">:message</span></p>') : '' }}
		    	{{ Form::label('first_name', 'First Name', array('class' => 'col-sm-2 control-label')) }}
		    	<div class='col-sm-10'>
		    		@if ($edit)
						{{ Form::text('first_name', $user->first_name, array('class' => 'form-control', 'placeholder' => 'First Name')) }}
					@else
						{{ Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'First Name')) }}
					@endif
				</div>
			</div>
			<div class='form-group'>
	    		{{ $errors->has('last_name') ? $errors->first('last_name', '<p><span class="help-block">:message</span></p>') : '' }}
		    	{{ Form::label('last_name', 'Last Name', array('class' => 'col-sm-2 control-label')) }}
		    	<div class='col-sm-10'>
		    		@if ($edit)
						{{ Form::text('last_name', $user->last_name, array('class' => 'form-control', 'placeholder' => 'Last Name')) }}
					@else
						{{ Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'Last Name')) }}
					@endif
				</div>
			</div>
			<div class='col-sm-10'>
				{{ Form::submit('Save User Info', array('class' => 'btn btn-default')); }}
			</div>
			{{ Form::close() }}
	    </div>
	</div>

@stop