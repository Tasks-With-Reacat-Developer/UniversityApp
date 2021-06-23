<!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>
	
 <ul class="nav navbar-nav mr-auto top-nav">    
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          مرحباً ، <?php echo e(Auth::guard('admin')->user()->firstName); ?>

        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">تعديل الملف الشخصي</a>
          <a class="dropdown-item" href="<?php echo e(route('admin.logout')); ?>">خروج</a>
        </div>
      </li>
        </ul>
  </nav>
  <!-- /.navbar --><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/ar/inc/navbar.blade.php ENDPATH**/ ?>