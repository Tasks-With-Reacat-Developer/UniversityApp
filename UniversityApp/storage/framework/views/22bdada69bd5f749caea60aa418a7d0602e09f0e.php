 

<?php $__env->startSection('content'); ?>
<div class="container">
 <h2 class="float-right" style="clear:right;"><br><?php echo e($article->title); ?></h2>
  <small class="float-right" style="clear:right;">كتب في: <?php echo e($article->created_at->format('m/d/Y')); ?> بواسطة SVA</small>
  <hr style="clear:right">
  <div>
  <img height="500px" width="100%" src="/storage/cover_images/<?php echo e($article->cover_image); ?>">
  <br><br>
  <?php echo $article->content; ?>

  </div>
  <hr>
  <br>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('lang.ar.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/lang/ar/articles/show.blade.php ENDPATH**/ ?>