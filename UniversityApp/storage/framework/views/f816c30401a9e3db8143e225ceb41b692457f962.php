<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2>Add Message</h2>
 <div class="card">
 <div class="card-body">
  <?php echo Form::open(['action'=>'Admin\AdminAppearanceController@storeMessage','method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

    <br>
    <?php echo e(Form::textarea('content','',['class' => 'form-control', 'placeholder' => 'Content'])); ?>

     <input type="hidden" name="language" value="en">
         <br>
                 <div class="float-right">
				<?php echo e(Form::submit('Add',['name' => 'add','class' => 'btn btn-primary'])); ?>

                <br> <br> <br>
            
                </div>
				<?php echo Form::close(); ?>

                </div>
			    </div>	
                </div>
			    </div>	
                </div>	 

	 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/appearance/others/message/en/create.blade.php ENDPATH**/ ?>