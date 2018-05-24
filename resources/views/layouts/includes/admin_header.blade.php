
  <header class="main-header">
    <!-- Logo -->
    <a href="{{route('dashboard')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>D</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Demo</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('/public/backend/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">Hello {{Auth::guard('admin')->user()->name}},</span>
            </a>

            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('/public/backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                <p>
                  {{Auth::guard('admin')->user()->name}}
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer" style="background:#222D32">
                <div class="pull-left">
                  <a href="" class="btn btn-default btn-flat">Change Password</a>
                </div>
                <div class="pull-right">
                  <center><a href="{{route('getAdminLogOutPage')}}" class="btn btn-default btn-flat">Sign out</a></center>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
      
    </nav>
  </header>
