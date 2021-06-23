<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-left">
	 <div class="col-lg-11">
  <h2 class="heading-ltr">Articles</h2>
  <p>
  <table>
  <tr>
  <th>
  <a href="/admin/articles/create"><button type="button" class="btn btn-success" style="margin: 0 10px 5px 10px;">Add New</button></a>
</th>
<th><?php for($i=0; $i<=39; $i++): ?> &nbsp; <?php endfor; ?></th>
<?php echo Form::open(['action' => 'Admin\AdminArticlesController@store','method' => 'POST' , 'class' => 'card card-sm float-right']); ?>

  <th>
  <?php echo e(Form::text('searchArticles','',['class' => 'form-control', 'placeholder' => 'search'])); ?>

  </th>
  <th>
<?php echo e(Form::submit('Search',['class' => 'btn btn-outline-secondary float-right'])); ?>

  </th>
  <?php echo Form::close(); ?>

</tr>
</table>
</p>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
   <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($article->title); ?>

       <br>
     <?php echo Form::open(['method' => 'DELETE', 'action' => ['Admin\AdminArticlesController@destroy', $article->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'article']); ?>

      <a href="articles/<?php echo e($article->id); ?>/edit">Edit &nbsp;</a>
      <a href="#" onclick="$(this).closest('form').submit();"> &nbsp;Delete</a>
      <?php echo Form::close(); ?> 
      </td>
      <td><?php echo e($article->created_at->format('m/d/Y')); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <tr>
  </tbody>
</table>
</div>
  </div>
 </div>
<div><?php echo e($articles->links()); ?></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/articles/index.blade.php ENDPATH**/ ?>