<?php $__env->startSection('content'); ?>
<br>
<div class="container">
  <h1 style="text-align:right"><?php if($articles == NULL): ?> <span>0</span> <?php else: ?> <?php echo e(count($articles)); ?> <?php endif; ?> نتائج بحث</h1>
  <br>
  <?php if(count($articles) != 0): ?>
  <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="card card-body bg-light">
  <div class="row">
    <div class="col-md-4 col-sm-4">
     <img height="170px" width="290px" src="/storage/cover_images/<?php echo e($article->cover_image); ?>">
      </div>
      <div class="col-md-8 col-sm-8">
    <h3 class="float-right" style="clear:right;"><a href="/news/<?php echo e($article->id); ?>"><?php echo e($article->title); ?></a></h3>
    <small class="float-right" style="clear:right;">كتب في: <?php echo e($article->created_at); ?> بواسطة SVA</small>
  </div>
 </div>
 </div>
 <br>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
  <?php else: ?>
    <p style="text-align:right">لا يوجد نتائج بحث.</p>
  <?php endif; ?>
  </div>
  <br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('lang.ar.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/lang/ar/search/index.blade.php ENDPATH**/ ?>