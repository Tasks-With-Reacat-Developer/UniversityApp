<?php $__env->startSection('content'); ?>
<?php echo $__env->make('lang.en.inc.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Change Password</div>

                <div class="card-body">
        <?php echo Form::open(['action'=> ['StudentController@update_password',$student->id] ,'method' => 'PUT']); ?>

   <?php echo e(Form::password('old_password',['class' => 'form-control', 'placeholder' => 'old Password'])); ?>

    <br>
   <?php echo e(Form::password('new_password',['class' => 'form-control', 'placeholder' => 'New Password'])); ?>

  <br>
   <?php echo e(Form::password('confirm_password',['class' => 'form-control', 'placeholder' => 'Confirm Password'])); ?>

                <br>
                <div class="float-right">
				<?php echo e(Form::submit('Update',['name' => 'add','class' => 'btn btn-primary'])); ?>

                </div>
				<?php echo Form::close(); ?>

               
               
                </div>
            </div>
        </div>
    </div>

</div>
<br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/lang/en/student/change_password.blade.php ENDPATH**/ ?>