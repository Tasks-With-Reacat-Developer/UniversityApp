 

<?php $__env->startSection('content'); ?>
<div class="container">
 <h2><br><?php echo e($article->title); ?></h2>
  <small>written on: <?php echo e($article->created_at->format('m/d/Y')); ?> by SVA</small>
  <hr>
  <div>
  <img height="500px" width="100%" src="/storage/cover_images/<?php echo e($article->cover_image); ?>">
  <br><br>
  <?php echo $article->content; ?>

  </div>
  <hr>
  <br>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/lang/en/articles/show.blade.php ENDPATH**/ ?>