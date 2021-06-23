<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
	 
    </ul>
	
	 <ul class="nav navbar-nav ml-auto">    
	 <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Welcome, {{ Auth::guard('admin')->user()->firstName }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/admin/users/{{Auth::guard('admin')->user()->id}}/edit">Profile Edit</a>
          <a class="dropdown-item" href="{{route('admin.logout')}}">Logout</a>
        </div>
      </li>
	  </ul>
  </nav>
  <!-- /.navbar -->