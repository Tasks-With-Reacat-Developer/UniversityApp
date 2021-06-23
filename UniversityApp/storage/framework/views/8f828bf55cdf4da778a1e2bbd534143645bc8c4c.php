<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-left">
	 <div class="col-lg-11">
<h2 class="heading-ltr">Language</h2>
<?php echo Form::open(['action' => 'Admin\AdminLangController@store','method' => 'POST']); ?>

<div class="form-group" style="margin: 10px 0px 0px 10px;">
<?php echo e(Form::label('language','Choose Language:')); ?>

<?php echo e(Form::select('language', ['en' => 'English', 'ar' => 'العربية'], 'en', ['class' => 'form-control'])); ?>

<br>
<?php echo e(Form::submit('Save',['class' => 'btn btn-primary'])); ?>

</div>
 <?php echo Form::close(); ?> 
 </div>
 </div>
 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/pages/language.blade.php ENDPATH**/ ?>