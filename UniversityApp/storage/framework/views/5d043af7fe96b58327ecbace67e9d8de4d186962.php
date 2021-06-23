 <h2><?php echo e($article->title); ?></h2>
  <small>written on: <?php echo e($article->created_at->format('m/d/Y')); ?> by </small>
  <hr>
  <div>
  <img height="500px" width="100%" src="/storage/cover_images/<?php echo e($article->cover_image); ?>">
  <br><br>
  <?php echo $article->content; ?>

  </div>
  <hr><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/articles/show.blade.php ENDPATH**/ ?>