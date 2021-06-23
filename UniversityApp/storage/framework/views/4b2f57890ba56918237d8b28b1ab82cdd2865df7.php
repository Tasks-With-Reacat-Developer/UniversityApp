 

<?php $__env->startSection('content'); ?>
<div class="container">
 <h2><br><?php echo e($page->title); ?></h2>
  <hr>
  <div>
  <?php echo $page->content; ?>

  </div>
  <hr>
  <br>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/lang/en/nav_pages/show.blade.php ENDPATH**/ ?>