<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-right">
	 <div class="col-lg-11">
<h2 class="heading-rtl">اللغة</h2>
<?php echo Form::open(['action' => 'Admin\AdminLangController@store','method' => 'POST']); ?>

<div class="form-group" style="margin: 0 10px 0 10px;">
<?php echo e(Form::label('language','أختر اللغة:')); ?>

<?php echo e(Form::select('language', ['ar' => 'العربية', 'en' => 'English'], 'ar' , ['class' => 'form-control'])); ?>

<br>
<?php echo e(Form::submit('حفظ',['class' => 'btn btn-primary'])); ?>

</div>
 <?php echo Form::close(); ?> 
 </div>
 </div>
 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lang.ar.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/ar/pages/language.blade.php ENDPATH**/ ?>