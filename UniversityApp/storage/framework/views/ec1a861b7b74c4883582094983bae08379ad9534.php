<?php $__env->startSection('content'); ?>
<?php echo $__env->make('lang.en.inc.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">GPA</div>

                <div class="card-body">
               <?php if(!$student_data_check || $student_data->student_status == "New" || $student_data->student_status == "Enrol"): ?>
               <strong>No data found!</strong>
               <?php else: ?>
                 <br><br>
                 <center>
                <h1>Your <span style="color:darkblue">GPA</span> is</h1>
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

<?php echo $__env->make('lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/lang/en/student/gpa.blade.php ENDPATH**/ ?>