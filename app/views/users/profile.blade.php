@extends('layouts.master')

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

<!-- Main Body -->
  <div class="wrapper">
    <div class="section-header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <!-- Remove the .animated class if you don't want things to move -->
            <h1 class="animated slideInLeft"><span>Profiles</span></h1>
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
                <a href="/profile" class="active">
                  <i class="sign fa fa-user bg-green"></i> My Profile <i class="fa fa-chevron-right pull-right"></i>
                </a>  
              </li>
              <li>
                <a href="/edit">
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
                    <img src="assets/images/profileAvatar.png" alt="...">
                  </a>
                  <!-- Upload new avatar bubble -->
                  <div class="avatar-bubble">
                    <a href="#" data-toggle="modal" data-target="#upload-avatar"><i class="fa fa-plus"></i> New avatar</a>
                  </div>
                </div>
              </div>
              <!-- Modal window: Send a private message -->
                <div class="modal fade" id="upload-avatar" tabindex="-1" role="dialog" aria-labelledby="upload-avatar-title" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        	<h4 class="modal-title" id="upload-avatar-title">Upload new avatar</h4>
                      </div>
                      <div class="modal-body">
                      	<p>Please choose a file to upload. JPG, PNG, GIF only.</p>
                        <form role="form">
                          <div class="form-group">
                            <label for="file">File input</label>
                            <input type="file" id="file">
                            <p class="help-block">Files up to 5Mb only.</p>
                          </div>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                          <button type="button" class="btn btn-green" data-dismiss="modal">Upload</button>
                        </form>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <!-- End of modal window -->
            </div>
            <!-- Main profile info -->
            <div class="col-sm-8">
              <h3 class="hl">Cameron Holland <small>Web Admin</small></h3>
              <hr>
              <!-- User status update form -->
              <div class="user-status">
                <p class="show"><a href="#" id="update-status">Your Status?</a></p>
                <form class="hidden" role="form">
                  <div class="row">
                    <div class="col-sm-10">
                      <div class="input-group">
                        <input type="text" class="form-control input-sm" id="status" placeholder="Update your status">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-sm btn-default">Save</button>
                        </span>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- About Me -->
          <div class="row">
            <div class="col-sm-12">
              <h4 class="hl"><i class="fa fa-user"></i> About Me</h4>
              <p class="bottom-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tortor nunc, dapibus a est sed, tempus bibendum arcu. Nullam pretium arcu in neque congue tempor. Quisque quis mauris sit amet magna fermentum tincidunt et a enim. Aliquam eu rhoncus libero, a pulvinar metus.</p>
              <hr>
            </div>
          </div>
          <!-- General Information -->
          <div class="row">
            <div class="col-sm-12">
              <h4 class="hl"><i class="fa fa-info-circle"></i> General Information</h4>
              <table class="table">
                <tbody>
                  <tr>
                    <td class="text-muted">Position</td>
                    <td>Administrator</td>
                  </tr>
                  <tr>
                    <td class="text-muted">Company Name</td>
                    <td>Highland Ltd.</td>
                  </tr>
                  <tr>
                    <td class="text-muted">Location</td>
                    <td>United States</td>
                  </tr>
                </tbody>
              </table>
              <hr>
            </div>
          </div>
          <!-- Contact Information -->
          <div class="row">
            <div class="col-sm-12">
              <h4 class="hl"><i class="fa fa-map-marker"></i> Contact Information</h4>
              <table class="table">
                <tbody>
                  <tr>
                    <td class="text-muted">Email</td>
                    <td>example@gmail.colm</td>
                  </tr>
                  <tr>
                    <td class="text-muted">Website</td>
                    <td>http://www.example.com</td>
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



