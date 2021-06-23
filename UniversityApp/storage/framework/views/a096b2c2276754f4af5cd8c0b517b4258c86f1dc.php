<?php $__env->startSection('content'); ?>
<?php echo $__env->make('lang.en.inc.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Exam Schedule</div>

                <div class="card-body">
               <?php if(!$student_data_check || count($exam_schedules) == NULL): ?>
               <strong>No data found!</strong>
               <?php else: ?>
 <?php
function is_exists($arg , $arr){
  for($s=0; $s<count($arr); $s++){
      if($arg == $arr[$s]){
         return true;
         }
      }
  return false;
  }

 $days = array('Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday');
 $temp = array();
 $count = 0;
 foreach($exam_schedule as $exSchedule){
  $temp[$count++] = $exSchedule->time_from;
 }

sort($temp);

$times = array();
$index = 0;

for($r=0; $r<count($temp); $r++){
if(!is_exists($temp[$r],$times)){
    $times[$index++] = $temp[$r];
}
}

 $t = 0;
 $d_courses = array();
 $counts = 0;

  ?>
        <?php if(count($exam_schedules) != NULL): ?>
        <?php if($exam_schedules[0]->semester_no == 1): ?>
       <p style="font-size:20px">Your First Semester Schedule</p>
        <?php else: ?>
       <p style="font-size:20px">Your Second Semester Schedule</p>
        <?php endif; ?>
        <?php endif; ?>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Day/Time</th>
      <?php for($i=0; $i<count($times); $i++): ?>
      <?php $__currentLoopData = $exam_schedule; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam_sh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($times[$i] == $exam_sh->time_from): ?>
      <th scope="col"><?php echo e($times[$i]); ?> To <?php echo e($exam_sh->time_to); ?></th>
      <?php break; ?>
      <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endfor; ?>
    </tr>
  </thead>
  <tbody>

 <?php for($i=0; $i<6; $i++): ?>
    <tr>
      <th scope="row"><?php echo e($days[$i]); ?></th>
    <?php for($y=0; $y<count($times); $y++): ?>
      <td>
    <?php $__currentLoopData = $student_course; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st_course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $exam_schedule; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam_sh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <?php if($st_course->course_status != 'Deactived'): ?>
    <?php if($st_course->grade == NULL): ?>
   <?php if($exam_sh->course_name == $st_course->course_name): ?>
      <?php if($exam_sh->day == $days[$i]): ?>
      <?php if($exam_sh->time_from == $times[$y]): ?>
      <?php echo e($exam_sh->course_name); ?>

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
<?php if(!$student_data_check || count($exam_schedules) == NULL): ?>
<?php for($i=0; $i<=10; $i++): ?>
 <br>
<?php endfor; ?>
<?php endif; ?>
</div>
<br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/lang/en/student/exam_schedule.blade.php ENDPATH**/ ?>