<?php $__env->startSection('content'); ?>
<?php echo $__env->make('lang.en.inc.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Lectures Schedule</div>

                <div class="card-body">
               <?php if(!$student_data_check): ?>
               <strong>No data found!</strong>
               <?php else: ?>
        <?php if($lec_schedules[0]->semester_no == 1): ?>
       <p style="font-size:20px">Your First Semester Schedule</p>
        <?php else: ?>
       <p style="font-size:20px">Your Second Semester Schedule</p>
        <?php endif; ?>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Day/Time</th>
      <th scope="col">9:00 To 11:00</th>
      <th scope="col">11:30 To 1:30</th>
      <th scope="col">2:00 To 4:00</th>
    </tr>
  </thead>
  <tbody>
  <?php
 $days = array('Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday');
 $times = array('9:00','11:30','2:00');
 $t = 0;
  ?>
 <?php for($i=0; $i<6; $i++): ?>
    <tr>
      <th scope="row"><?php echo e($days[$i]); ?></th>
    <?php for($y=0; $y<3; $y++): ?>
      <td>
    <?php $__currentLoopData = $student_course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st_course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $lec_schedule; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lec_sh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($st_course->course_status != 'Deactived'): ?>
    <?php if($st_course->grade == NULL): ?>
   <?php if($lec_sh->course_name == $st_course->course_name): ?>
      <?php if($lec_sh->day == $days[$i]): ?>
      <?php if($lec_sh->time_from == $times[$y]): ?>
      <?php echo e($lec_sh->course_name); ?>

      <br>
      <?php if($lec_sh->professor_name != NULL): ?>
      <small>Ph.D/ <?php echo e($lec_sh->professor_name); ?><small>
      <?php else: ?>
      <small>INST/ <?php echo e($lec_sh->instructor_name); ?><small>
      <?php endif; ?>
      <?php endif; ?>
      <?php endif; ?>
      <?php endif; ?>
      <?php endif; ?>
      <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </td>
      <?php endfor; ?>
    </tr>
    <?php endfor; ?>
  </tbody>
</table>     
<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php if(!$student_data_check): ?>
<?php for($i=0; $i<=10; $i++): ?>
 <br>
<?php endfor; ?>
<?php endif; ?>
</div>
<br><br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/lang/en/student/lec_schedule.blade.php ENDPATH**/ ?>