<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-left">
	 <div class="col-lg-11">
  <h2 class="heading-ltr">Departments</h2>
  <p>
  <a href="/admin/departments/create"><button type="button" class="btn btn-success" style="margin: 0 10px 5px 10px;">Add Department</button></a>
  </p>
  
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"><?php echo e(Form::checkbox('checkall')); ?></th>
      <th scope="col">Department Name</th>
      <th scope="col">College</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
   <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e(Form::checkbox('check[]')); ?></th>
      <td><?php echo e($department->department_name); ?>

       <br>

<?php echo Form::open(['method' => 'DELETE', 'action' => ['Admin\AdminDepartmentsController@destroy', $department->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'department']); ?>

      <a href="departments/<?php echo e($department->id); ?>/edit">Edit &nbsp;</a>
      <a href="#" onclick="$(this).closest('form').submit();">Delete</a>
<?php echo Form::close(); ?> 
</td>
      <td><?php echo e($department->college->college_name); ?></td>
      <td><?php echo e($department->created_at->format('m/d/Y')); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    <tr>
  </tbody>
</table>
  <?php echo e($departments->links()); ?>

</div>
  </div>
 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/departments/index.blade.php ENDPATH**/ ?>