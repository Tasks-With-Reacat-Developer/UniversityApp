<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-left">
	 <div class="col-lg-11">
  <h2 class="heading-ltr">Colleges</h2>
  <p>
  <a href="/admin/colleges/create"><button type="button" class="btn btn-success" style="margin: 0 10px 5px 10px;">Add College</button></a>
  </p>
  
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"><?php echo e(Form::checkbox('checkall')); ?></th>
      <th scope="col">College Name</th>
      <th scope="col">Levels</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
   <?php $__currentLoopData = $colleges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $college): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e(Form::checkbox('check[]')); ?></th>
      <td><?php echo e($college->college_name); ?>

       <br>

<?php echo Form::open(['method' => 'DELETE', 'action' => ['Admin\AdminCollegesController@destroy', $college->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'college']); ?>

      <a href="colleges/<?php echo e($college->id); ?>/edit">Edit &nbsp;</a>
      <a href="#" onclick="$(this).closest('form').submit();">Delete</a>
<?php echo Form::close(); ?> 
</td>
      <td><?php echo e($college->levels); ?></td>
      <td><?php echo e($college->created_at->format('m/d/Y')); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <tr>
  </tbody>
</table>
</div>
  </div>
 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/colleges/index.blade.php ENDPATH**/ ?>