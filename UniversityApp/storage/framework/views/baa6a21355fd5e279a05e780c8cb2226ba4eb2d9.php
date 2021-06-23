<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2>Message</h2>
              <div class="card">
			
                <div class="card-header"><?php echo e(__('Message')); ?></div>

                <div class="card-body">
                 <div class="form-group">
                 <p>Name: <?php echo e($message->name); ?></p>
                 <p>Phone: <?php echo e($message->phone); ?></p>
                 <p>Email: <?php echo e($message->email); ?></p>
                   </div>
                   <hr>
                   <p> <?php echo e($message->content); ?> </p>
                </div>
                </div>

			    </div>	
                </div>	
                </div> 

	 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/messages/show.blade.php ENDPATH**/ ?>