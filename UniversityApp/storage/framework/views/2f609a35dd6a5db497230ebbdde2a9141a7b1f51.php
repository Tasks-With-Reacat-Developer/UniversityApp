<?php $__env->startSection('content'); ?>
<?php echo $__env->make('lang.ar.inc.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h6 class="float-right">المعدل التراكمي</h6></div>

                <div class="card-body">
               <?php if(!$student_data_check || $student_data->student_status == "New" || $student_data->student_status == "Enrol"): ?>
               <strong>لم يتم إيجاد اي بيانات!</strong>
               <?php else: ?>
                 <br><br>
                 <center>
                <h1><span style="color:darkblue">المعدل التراكمي</span> هو</h1>
                <?php if($student_data->gpa >= 3.0): ?>
                <h1 style="color:green"><?php echo e($student_data->gpa); ?></h1>
                <?php endif; ?>
                 <?php if($student_data->gpa >= 2.7 && $student_data->gpa < 3.0): ?>
                <h1 style="color:orange"><?php echo e($student_data->gpa); ?></h1>
                <?php endif; ?>
                <?php if($student_data->gpa >= 2.0 && $student_data->gpa < 2.7): ?>
                <h1 style="color:yellow"><?php echo e($student_data->gpa); ?></h1>
                <?php endif; ?>
                <?php if($student_data->gpa < 2.0): ?>
                <h1 style="color:red"><?php echo e($student_data->gpa); ?></h1>
                <?php endif; ?>
                </center>
                 <br><br>
                 <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php if(!$student_data_check || $student_data->student_status == "New" || $student_data->student_status == "Enrol"): ?>
<?php for($i=0; $i<=10; $i++): ?>
 <br>
<?php endfor; ?>
<?php endif; ?>
</div>
<br><br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('lang.ar.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/lang/ar/student/gpa.blade.php ENDPATH**/ ?>