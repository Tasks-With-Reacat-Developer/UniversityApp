<?php
if(Auth::check()){
$student_lang = DB::table('languages')->where('student_id',Auth::user()->id)->first();
?>
<?php if($student_lang && session('language') == NULL): ?>
<?php if($student_lang->language == 'en'): ?>
<?php echo $__env->make('lang.en.student.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif($student_lang->language == 'ar'): ?>
<?php echo $__env->make('lang.ar.student.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php endif; ?>
<?php
}
?>

<?php if(session('language') == 'en'): ?>
<?php echo $__env->make('lang.en.student.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
<?php echo $__env->make('lang.ar.student.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/home.blade.php ENDPATH**/ ?>