<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2>Edit Goals</h2>
  <div class="card">
 <div class="card-body">
  <?php echo Form::open(['action'=>['Admin\AdminAppearanceController@updateGoals', $goals->id],'method' => 'PUT', 'enctype' => 'multipart/form-data']); ?>

   <br>
    <?php echo e(Form::textarea('content', $goals->content ,['class' => 'form-control', 'placeholder' => 'Content'])); ?>

     <input type="hidden" name="language" value="ar">
         <br>
                 <div class="float-right">
				<?php echo e(Form::submit('Update',['name' => 'update','class' => 'btn btn-primary'])); ?>

                <br> <br> <br>
            
                </div>
				<?php echo Form::close(); ?>

                </div>
                </div>
                </div>
			    </div>	
                </div>	 

	 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/appearance/others/goals/ar/edit.blade.php ENDPATH**/ ?>