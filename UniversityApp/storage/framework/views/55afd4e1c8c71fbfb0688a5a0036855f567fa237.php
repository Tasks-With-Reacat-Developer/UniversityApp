<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2>Create Article</h2>
  <?php echo Form::open(['action'=>'Admin\AdminArticlesController@store','method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

   
    <?php echo e(Form::text('title','',['class' => 'form-control', 'placeholder' => 'Article Name'])); ?>

    <br>
   
    <?php echo e(Form::textarea('content','',['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Content'])); ?>


                 <br>

              <div class="card">
			
                <div class="card-header"><?php echo e(__('Cover Image')); ?></div>

                <div class="card-body">
                 <div class="form-group">
                  <?php echo e(Form::file('cover_image')); ?>

                   </div>

                </div>
                </div>

                <div class="card">
				
                 <div class="card-header"><?php echo e(__('Publish')); ?></div>
				 
                <div class="card-body">
                  <br>
                 <div class="float-right">
				<?php echo e(Form::submit('Publish',['name' => 'publish','class' => 'btn btn-primary'])); ?>

                </div>
                <br>
            
                </div>
                </div>
				<?php echo Form::close(); ?>

                </div>
		
			    </div>	
                </div>	 

	 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/articles/create.blade.php ENDPATH**/ ?>