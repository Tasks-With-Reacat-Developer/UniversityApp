<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <img src="{{asset('logo/University-logo.png')}}" alt="UniversityApp" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">UniversityApp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="/admin" class="nav-link {{--active--}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item has-treeview {{--menu-open--}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa fa-newspaper"></i>
              <p>
                Articles
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/articles" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Articles</p>
                </a>
              </li>
			  
		      <li class="nav-item">
              <a href="/admin/articles/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Article</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/pages" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Pages</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/pages/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                Students
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/students" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/students/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Student</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Courses
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/courses" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Courses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/courses/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Course</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/courses/create-group" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Course Group</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Departments
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/departments" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Departments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/departments/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Department</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="/admin/schedules" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Schedules
              </p>
            </a>
          </li>
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa fa-university"></i>
              <p>
                Colleges
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/colleges" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Colleges</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/colleges/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add College</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Messages</li>
          <li class="nav-item">
          <li class="nav-item has-treeview">
            <a href="/admin/messages" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Messages
              </p>
            </a>
          </li>
          <li class="nav-header">Others</li>
		  
		  <li class="nav-item">
            <a href="/admin/users" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>Users</p>
            </a>
          </li>
		  
          <li class="nav-item">
            <a href="/admin/appearance" class="nav-link">
              <i class="nav-icon fas fa-pen-fancy"></i>
              <p>Appearance</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>