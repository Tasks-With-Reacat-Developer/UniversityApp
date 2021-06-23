<?php $__env->startSection('content'); ?>
<?php echo $__env->make('lang.ar.inc.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">الدرجات</div>

                <div class="card-body">
               <?php if(!$student_data_check || $student_data_check->student_status == "New"): ?>
               <strong>لم يتم إيجاد أي بيانات!</strong>
               <?php else: ?>
                <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">أسم المادة</th>
      <th scope="col">درجة ال Mid-Term</th>
      <th scope="col">درجة ال Final</th>
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

<?php echo $__env->make('lang.ar.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/lang/ar/student/grades.blade.php ENDPATH**/ ?>