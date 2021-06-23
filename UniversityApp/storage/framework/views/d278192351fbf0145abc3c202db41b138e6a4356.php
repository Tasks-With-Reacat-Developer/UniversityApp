<!DOCTYPE html>
<html lang="<?php echo e(Session::get('language')); ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>لوحة القيادة - SVA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <link rel="icon" type="image/png" href="<?php echo e(asset('logo/sva.png')); ?>"/>
  <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome-free/css/all.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('dist/css/adminlte.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('plugins/iCheck/flat/blue.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('plugins/morris/morris.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('plugins/datepicker/datepicker3.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('plugins/daterangepicker/daterangepicker-bs3.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')); ?>">
  <link href="<?php echo e(asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700')); ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(asset('dist/css/bootstrap-rtl.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('dist/css/custom-style.css')); ?>">
<script>
$(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $(".side-nav .collapse").on("hide.bs.collapse", function() {                   
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
    });
    $('.side-nav .collapse').on("show.bs.collapse", function() {                        
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
    });
})    
</script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php echo $__env->make('admin.lang.ar.inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.lang.ar.inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="content-wrapper">
<?php echo $__env->yieldContent('content'); ?>
</div>

<footer class="main-footer">
    <strong>جميع الحقوق محفوظة &copy; 2020</a>.</strong>
    طور بواسطة: محمد قرباوي.
  </footer>


  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>



<script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('https://code.jquery.com/ui/1.12.1/jquery-ui.min.js')); ?>"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/morris/morris.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/sparkline/jquery.sparkline.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/knob/jquery.knob.js')); ?>"></script>
<script src="<?php echo e(asset('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/daterangepicker/daterangepicker.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/datepicker/bootstrap-datepicker.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/slimScroll/jquery.slimscroll.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/fastclick/fastclick.js')); ?>"></script>
<script src="<?php echo e(asset('dist/js/adminlte.js')); ?>"></script>
<script src="<?php echo e(asset('dist/js/pages/dashboard.js')); ?>"></script>
<script src="<?php echo e(asset('dist/js/demo.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/ar/layouts/app.blade.php ENDPATH**/ ?>