<?php $__env->startSection('content'); ?>
<br>
<div class="container">
  <h1><?php if($articles == NULL): ?> 0 <?php else: ?> <?php echo e(count($articles)); ?> <?php endif; ?> Search Results Found..</h1>
  <br>
  <?php if(count($articles) != 0): ?>
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="card card-body bg-light">
      <div class="row">
        <div class="col-md-4 col-sm-4">
         <img height="170px" width="290px" src="/storage/cover_images/<?php echo e($article->cover_image); ?>">
          </div>
          <div class="col-md-8 col-sm-8">
        <h3><a href="/news/<?php echo e($article->id); ?>"><?php echo e($article->title); ?></a></h3>
        <small>written on: <?php echo e($article->created_at); ?> by SVA</small>
      </div>
     </div>
     </div>
     <br>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php else: ?>
    <p>No Search Results Found.</p>
  <?php endif; ?>
  </div>
  <br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/lang/en/search/index.blade.php ENDPATH**/ ?>