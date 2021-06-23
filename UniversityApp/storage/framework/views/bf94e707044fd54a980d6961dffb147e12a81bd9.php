<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2>Edit Page</h2>
  <?php echo Form::open(['action'=> ['Admin\AdminArticlesController@update', $page->id],'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>

   
    <?php echo e(Form::text('title', $page->title ,['class' => 'form-control', 'placeholder' => 'Article Name'])); ?>

    <label>Link</label>
    <input type="text" class="form-control" value="http://<?php echo e($host); ?>/pages/<?php echo e($page->id); ?>">
    <br>
   
    <?php echo e(Form::textarea('content', $page->content ,['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Content'])); ?>


                 <br>

            <div class="card">
				
                 <div class="card-header"><?php echo e(__('Publish')); ?></div>
				 
                <div class="card-body">
                <div class="form-group">
                <div class="float-right">
				<?php echo e(Form::submit('Update',['name' => 'publish','class' => 'btn btn-primary'])); ?>

                </div>
                <br>
            
                </div>
				<?php echo Form::close(); ?>

                </div>
		
			    </div>	
                </div>	 

	 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/nav_pages/edit.blade.php ENDPATH**/ ?>