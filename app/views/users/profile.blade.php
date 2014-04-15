@extends('layouts.master')

@section('content')


<!-- Main Body -->
	<div class="wrapper">
		<div class="section-header">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<!-- Remove the .animated class if you don't want things to move -->
						<h1 class="animated slideInLeft"><span>Profile</span></h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<!-- Profile Menu -->
				<div class="col-sm-4 col-md-3">
					<div class="user-menu bottom-15">
						<ul>
							<li>
								<a href="{{ action('UsersController@show', $user->id) }}" class="active">
									<i class="sign fa fa-user bg-green"></i> My Profile <i class="fa fa-chevron-right pull-right"></i>
								</a>  
							</li>
							<li>
								<a href="{{ action('UsersController@edit', $user->id) }}">
									<i class="sign fa fa-edit bg-blue"></i> Edit Profile <i class="fa fa-chevron-right pull-right"></i>
								</a>  
							</li>
							<li>
								<a href="/logout">
									<i class="sign fa fa-sign-out bg-amethyst"></i> Sign Out <i class="fa fa-chevron-right pull-right"></i>
								</a>  
							</li>
						</ul>
					</div>
				</div>
				<!-- Avatar & social links -->
				<div class="col-sm-8 col-md-6">
					<div class="row">
						<div class="col-sm-4">
							<div class="thumbnail">
								<div class="avatar">
									<a href="#" class="thumbnail bottom-15" data-toggle="modal" data-target="#upload-avatar">
										<img src="/assets/images/profileAvatar.png" alt="Profile Picture">
									</a>
								</div>
							</div>
						</div>
						<!-- Main profile info -->
						<div class="col-sm-8">
							<h3 class="hl">{{ strtoupper($user->username) }} <small>{{ $user->role }} </small></h3>
							<hr>
						</div>
					</div>
					<!-- Amount Found -->
					<div class="row">
						<div class="col-sm-12">
							<h4 class="hl"><i class="fa fa-info-circle"></i> Number of Items Found</h4>
							<table class="table">
								<tbody>
									<tr>
										<td class="text-muted"> {{ $found_count }} </td>	
									</tr>
								</tbody>
							</table>
							<hr>
						</div>
					</div>
					<!-- Contact Information -->
					<div class="row">
						<div class="col-sm-12">
							<h4 class="hl"><i class="fa fa-map-marker"></i> Number of Hidden Items</h4>
							<table class="table">
								<tbody>
									<tr>
										<td class="text-muted">{{ $hidden_count }}</td>
									</tr>
								</tbody>
							</table>
							<hr>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>

@stop



