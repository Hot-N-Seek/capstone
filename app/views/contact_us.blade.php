@extends('layouts.master')

@section('email-from')
	{{ Form::open(array('action' => 'PostsController@store', 'class' => 'form-horizontal')) }}
		<div class='form-group'>
	    	{{ Form::label('from', 'From', array('class' => 'col-sm-2 control-label')) }}
	    	<div class='col-sm-10'>
				{{ Form::text('from', null, array('class' => 'form-control', 'placeholder' => 'From (username)')) }}
			</div>
		</div>
		<div class='form-group'>
			{{ Form::label('body', 'Body', array('class' => 'col-sm-2 control-label')) }}
			<div class='col-sm-10'>
				@if ($edit)
					{{ Form::textarea('body', $post->body, array('class' => 'form-control', 'placeholder' => 'Body')) }}
				@else
					{{ Form::textarea('body', null, array('class' => 'form-control', 'placeholder' => 'Body')) }}
				@endif
			</div>
		</div>
		<div class='form-group'>
			{{ Form::label('tags', 'Tags', array('class' => 'col-sm-2 control-label')) }}
			<div class='col-sm-10'>
				{{ Form::textarea('tags', null, array('class' => 'form-control', 'id' => 'tags')) }}
			</div>
		</div>
		<div class='form-group'>
			{{ Form::label('image', 'Upload Image', array('class' => 'col-sm-2 control-label')) }}
			<div class='col-sm-10')>
				{{ Form::file('image') }}
			</div>
		</div>
		<div class='col-sm-10'>
			{{ Form::submit('Save Post', array('class' => 'btn btn-default')); }}
		</div>
	{{ Form::close() }}

@stop