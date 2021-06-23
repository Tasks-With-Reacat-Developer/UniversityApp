<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2 class="heading-ltr">Edit Student</h2>
 <div class="card">	
<div class="card-header"><?php echo e(__('Edit Student')); ?></div>
  <?php echo Form::open(['action'=>['Admin\AdminStudentsController@update',$student->id],'method' => 'PUT']); ?>


    <?php echo e(Form::number('student_id',$student->student_id,['class' => 'form-control', 'placeholder' => 'Student ID'])); ?>

     <br>
     <?php echo e(Form::text('name',$student->name,['class' => 'form-control', 'placeholder' => 'Name'])); ?>

    <br>
    <?php echo e(Form::text('email',$student->email,['class' => 'form-control', 'placeholder' => 'email@email.com'])); ?>

  <br>
   <?php echo e(Form::password('password',['class' => 'form-control', 'placeholder' => 'Password'])); ?>

                <div class="card-body">
                <div class="float-right">
				<?php echo e(Form::submit('Update',['name' => 'add','class' => 'btn btn-primary'])); ?>

                </div>
                </div>
				<?php echo Form::close(); ?>

            
    </div>
    </div>	
    </div>
    </div> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/students/edit.blade.php ENDPATH**/ ?>