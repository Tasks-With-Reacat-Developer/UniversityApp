<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-left">
	 <div class="col-lg-11">
  <h2 class="heading-ltr">Pages</h2>
  <p>
  <table>
  <tr>
  <th>
  <a href="/admin/pages/create"><button type="button" class="btn btn-success" style="margin: 0 300px 5px 10px;">Add New</button></a>
</th>
<th><?php for($i=0; $i<=39; $i++): ?> &nbsp; <?php endfor; ?></th>
<form method="GET" action="<?php echo e(url('/admin/pages/search')); ?>" class="card card-sm">
<th>
<input type="text" name="query" class="form-control" placeholder="Search Articles"/>
</th>
<th>
<input type="submit" value="Search" class="btn btn-outline-secondary float-right"/>
</th>
</form>
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
   <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($page->title); ?>

       <br>
     <?php echo Form::open(['method' => 'DELETE', 'action' => ['Admin\AdminPagesController@destroy', $page->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'article']); ?>

      <a href="pages/<?php echo e($page->id); ?>/edit">Edit &nbsp;</a>
      <a href="#" onclick="$(this).closest('form').submit();"> &nbsp;Delete</a>
      <?php echo Form::close(); ?> 
      </td>
      <td><?php echo e($page->created_at->format('m/d/Y')); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <tr>
  </tbody>
</table>
</div>
  </div>
 </div>
<div><?php echo e($pages->links()); ?></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/nav_pages/index.blade.php ENDPATH**/ ?>