<?php $__env->startSection('content'); ?>
<?php echo $__env->make('lang.ar.inc.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h6 class="float-right">تغيير كلمة السر</h6></div>

                <div class="card-body">
        <?php echo Form::open(['action'=> ['StudentController@update_password',$student->id] ,'method' => 'PUT']); ?>

   <?php echo e(Form::password('old_password',['class' => 'form-control', 'placeholder' => 'كلمة السر القديمة'])); ?>

    <br>
   <?php echo e(Form::password('new_password',['class' => 'form-control', 'placeholder' => 'كلمة السر الجديدة'])); ?>

  <br>
   <?php echo e(Form::password('confirm_password',['class' => 'form-control', 'placeholder' => 'تأكيد كلمة السر'])); ?>

                <br>
                <div class="float-left">
				<?php echo e(Form::submit('تغيير',['name' => 'add','class' => 'btn btn-primary'])); ?>

                </div>
				<?php echo Form::close(); ?>

               
               
                </div>
            </div>
        </div>
    </div>

</div>
<br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('lang.ar.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/lang/ar/student/change_password.blade.php ENDPATH**/ ?>