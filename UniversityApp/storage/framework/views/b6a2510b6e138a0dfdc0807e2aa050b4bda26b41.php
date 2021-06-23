 

<?php $__env->startSection('content'); ?>
<div class="container">
 <h2 class="float-right" style="clear:right;"><br><?php echo e($page->title); ?></h2>
    <br>  <br>   <br>
  <hr style="clear:right;">
  <div>
  <?php echo $page->content; ?>

  </div>
  <hr>
  <br>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('lang.ar.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/lang/ar/nav_pages/show.blade.php ENDPATH**/ ?>