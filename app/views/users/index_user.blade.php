@extends('layouts.master')

@section('tab-title')
	<title>User List</title>

@stop

@section('content')
    <!-- HOME -->
    <section id="home" class="homeTop nofull imageOnly color">
        
        <img src="assets/images/preview/slider/MapGeoLocator.jpg" alt="Large Logo Image" id='large-logo'/>

    </section>
    <!-- /HOME -->

    <!-- HEADER -->
    <header id="header">
        <div class="container">

            <!-- LOGO -->
            <a href="#home" class="pull-left scrollTo"><img src="assets/images/HotnColdLogo.png" height="60" alt="welcome" /></a>

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
    <div class='container'>
    	<h1>User list</h1>
        <div class="col-sm-3 col-md-3">
            <form class="navbar-form" method="GET" action="{{{ action('UsersController@index') }}}">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Users" name="user_search" value='{{ Input::get('user_search') }}'>
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    	@if (Session::has('successMessage'))
		    <div class="alert alert-success dif-col">{{{ Session::get('successMessage') }}}</div>
		@endif
		@if (Session::has('errorMessage'))
		    <div class="alert alert-danger dif-col">{{{ Session::get('errorMessage') }}}</div>
		@endif
        <table class='table table-hover table-bordered'>
    	@foreach ($users as $user)
    		<tr>
                <td>{{{ $user->first_name }}}</td>
                <td>{{{ $user->last_name }}}</td>
                <td>{{{ $user->username }}}</td>
                <td>{{{ $user->email }}}</td>
                <td>
                    <a href="{{{ action('UsersController@edit', $user->id) }}}" class='btn btn-primary'>Edit</a>
                    <a href="#" class='btnDeletePost btn btn-danger' data-userid="{{{$user->id}}}">Delete</a>
                </td>
            </tr>
    	@endforeach
        </table>
        {{ $users->appends(array('user_search' => Input::get('user_search')))->links() }} <br>
        @if (Auth::check())
    	   <a href="{{{ action('UsersController@create') }}}" class='btn btn-success'>Create New User</a>
        @endif

        {{ Form::open(array('action' => array('UsersController@destroy'), 'method' => 'delete', 'id' => 'formDeletePost')) }}
        {{ Form::close() }}
    </div>
@stop

@section('bottom-script')
    <script>
        $('.btnDeletePost').on('click', function(e) {
            var user = $(this).data('userid');
            e.preventDefault();
            if (confirm('Are you sure you want to delete this user?')) {
                $("#formDeletePost").attr('action', '/users/' + user);
                $('#formDeletePost').submit();
            };
        });
    </script>

@stop