<?php $__env->startSection('content'); ?>
<?php echo $__env->make('lang.en.inc.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Grades</div>

                <div class="card-body">
               <?php if(!$student_data_check || $student_data_check->student_status == "New"): ?>
               <strong>No data found!</strong>
               <?php else: ?>
                <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Course Name</th>
      <th scope="col">Mid-Term Grade</th>
      <th scope="col">Grade</th>
    </tr>
  </thead>
  <tbody>
  <?php for($i=0; $i<count($student_cs_name); $i++): ?>
  <tr>
  <td><?php echo e($student_cs_name[$i]); ?></td>
  <td><?php echo e($student_courses[$i]->mid_term_grade); ?></td>
  <?php if(!$student_data_check->student_status == "Enrol"): ?>
  <td><?php echo e($student_gardes[$i]); ?></td>
  <?php endif; ?>
  </tr>
  <?php endfor; ?>
  </tbody>
</table>
<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php if(!$student_data_check || $student_data_check->student_status == "New"): ?>
<?php for($i=0; $i<=10; $i++): ?>
 <br>
<?php endfor; ?>
<?php endif; ?>
</div>
<br><br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/lang/en/student/grades.blade.php ENDPATH**/ ?>