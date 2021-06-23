<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2 class="heading-ltr">Add Department</h2>
 <div class="card">	
<div class="card-header"><?php echo e(__('Add Department')); ?></div>
  <?php echo Form::open(['action'=>'Admin\AdminDepartmentsController@store','method' => 'POST']); ?>

    <?php echo Form::select('college_id', $select, null, ['class'=>'form-control']); ?>

        <br>
    <?php echo e(Form::text('department_name','',['class' => 'form-control', 'placeholder' => 'Department Name'])); ?>


                <div class="card-body">
                <div class="float-right">
				<?php echo e(Form::submit('Add',['name' => 'add','class' => 'btn btn-primary'])); ?>

                </div>
                </div>
				<?php echo Form::close(); ?>

            
    </div>
    </div>	
    </div>
    </div> 


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/departments/create.blade.php ENDPATH**/ ?>