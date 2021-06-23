<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2>Edit Brief</h2>
  <?php echo Form::open(['action'=>['Admin\AdminAppearanceController@updateBrief', $brief->id],'method' => 'PUT', 'enctype' => 'multipart/form-data']); ?>

   
    <?php echo e(Form::text('title', $brief->title ,['class' => 'form-control', 'placeholder' => 'Brief Title'])); ?>

    <br>
   
    <?php echo e(Form::textarea('content', $brief->content ,['class' => 'form-control', 'placeholder' => 'Content'])); ?>

     <input type="hidden" name="language" value="en">
         <br>
                 <div class="float-right">
				<?php echo e(Form::submit('Update',['name' => 'update','class' => 'btn btn-primary'])); ?>

                <br> <br> <br>
            
                </div>
				<?php echo Form::close(); ?>

                </div>
			    </div>	
                </div>	 

	 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/appearance/brief/en/edit.blade.php ENDPATH**/ ?>