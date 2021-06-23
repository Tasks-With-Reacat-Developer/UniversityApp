<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-left">
	 <div class="col-lg-11">
  <h2 class="heading-ltr">Users</h2>
  <p>
  <th><a href="/admin/users/create"><button type="button" class="btn btn-success" style="margin: 0 10px 5px 10px;">Add User</button></a></th>
  </p>
  
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"><?php echo e(Form::checkbox('checkall')); ?></th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
   <?php $__currentLoopData = $adminusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adminuser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e(Form::checkbox('check[]')); ?></th>
      <td><?php echo e($adminuser->userName); ?>

       <br>
    
<?php echo Form::open(['method' => 'DELETE', 'action' => ['Admin\AdminAuth\AdminRegisterController@destroy', $adminuser->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'course']); ?>

      <a href="users/<?php echo e($adminuser->id); ?>/edit">Edit &nbsp;</a>
      <a href="#" onclick="$(this).closest('form').submit();">Delete</a>
<?php echo Form::close(); ?> 
</td>

     <td><?php echo e($adminuser->email); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <tr>
  </tbody>
</table>
</div>
  </div>
 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/auth/index.blade.php ENDPATH**/ ?>