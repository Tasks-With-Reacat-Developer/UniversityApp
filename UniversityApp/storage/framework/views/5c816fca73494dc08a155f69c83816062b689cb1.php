<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2 class="heading-ltr">Edit Department</h2>
 <div class="card">	
<div class="card-header"><?php echo e(__('Edit Department')); ?></div>
  <?php echo Form::open(['action'=>['Admin\AdminDepartmentsController@update', $department->id],'method' => 'PUT']); ?>

<select id="college_id" name="college_id" class="form-control">
  <?php $__currentLoopData = $colleges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $college): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <option value="<?php echo e($college->id); ?>" <?php if($college->id == $department->college_id): ?> selected <?php endif; ?>><?php echo e($college->college_name); ?></option>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>        <br>
    <input type="text" name="department_name" value="<?php echo e($department->department_name); ?>" class="form-control" placeholder="Department Name">
                <div class="card-body">
                <div class="float-right">
        <input type="submit" name="update" value="Update" class="btn btn-primary">
                </div>
                </div>
        <?php echo Form::close(); ?>

            
    </div>
    </div>	
    </div>
    </div> 


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/departments/edit.blade.php ENDPATH**/ ?>