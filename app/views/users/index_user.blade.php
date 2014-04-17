@extends('layouts.master')

@section('tab-title')
	<title>User List</title>

@stop

@section('content')
   

<div id ="UserBg">
    <div class="container">
        <div class="col-sm-3 col-md-3">
            <table class="table">
                <h1 class="titleColor">User List</h1>
                <form class="navbar-form" method="GET" action="{{{ action('UsersController@index') }}}">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Users" name="user_search" value='{{ Input::get('user_search') }}'>
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
            </table>
        </div>
        @if (Session::has('successMessage'))
            <div class="alert alert-success dif-col">{{{ Session::get('successMessage') }}}</div>
        @endif
        @if (Session::has('errorMessage'))
            <div class="alert alert-danger dif-col">{{{ Session::get('errorMessage') }}}</div>
        @endif
        <div>
            <table class='table table-hover table-bordered inner-container'>
                <thead>
                    <tr> 
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Administrate</th>
                    </tr>
                </thead>
            @foreach ($users as $user)
                <tr class="Tcolor">
                    <td>{{{ $user->first_name }}}</td>
                    <td>{{{ $user->last_name }}}</td>
                    <td>{{{ $user->username }}}</td>
                    <td>{{{ $user->email }}}</td>
                    <td>
                        <a href="{{{ action('UsersController@edit', $user->id) }}}" class='btn edit-button'>Edit</a>
                        <a href="#" class='btnDeletePost btn btn-danger' data-userid="{{{$user->id}}}">Delete</a>
                    </td>
                </tr>
            @endforeach
            </table>
            {{ $users->appends(array('user_search' => Input::get('user_search')))->links() }} <br>
            @if (Auth::check())
               <a href="{{{ action('UsersController@create') }}}" class='btn button'>Create New User</a>
            @endif

            {{ Form::open(array('action' => array('UsersController@destroy'), 'method' => 'delete', 'id' => 'formDeletePost')) }}
            {{ Form::close() }}
        </div>
    </div>
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