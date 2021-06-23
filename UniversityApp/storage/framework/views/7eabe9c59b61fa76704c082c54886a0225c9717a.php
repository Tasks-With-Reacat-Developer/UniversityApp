<?php $__env->startSection('content'); ?>
<?php echo $__env->make('lang.ar.inc.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h6 class="float-right">جدول المحاضرات</h6></div>

                <div class="card-body">
               <?php if(!$student_data_check): ?>
               <strong>لم يتم إيجاد اي بيانات!</strong>
               <?php else: ?>
        <?php if($lec_schedules[0]->semester_no == 1): ?>
       <p style="font-size:20px; float:right;">جدول محاضرات الترم الاول</p>
        <?php else: ?>
       <p style="font-size:20px; float:right;">جدول محاضرات الترم الثاني</p>
        <?php endif; ?>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">اليوم/الساعة</th>
      <th scope="col">9:00 إلي 11:00</th>
      <th scope="col">11:30 إلي 1:30</th>
      <th scope="col">2:00 إلي 4:00</th>
    </tr>
  </thead>
  <tbody>
  <?php
 $days = array('Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday');
 $days_ar = array('السبت','الأحد','الأثنين','الثلاثاء','الاربعاء','الخميس');
 $times = array('9:00','11:30','2:00');
 $t = 0;
  ?>
 <?php for($i=0; $i<6; $i++): ?>
    <tr>
      <th scope="row"><?php echo e($days_ar[$i]); ?></th>
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
      <small>د/ <?php echo e($lec_sh->professor_name); ?><small>
      <?php else: ?>
      <small>أ/ <?php echo e($lec_sh->instructor_name); ?><small>
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

<?php echo $__env->make('lang.ar.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/lang/ar/student/lec_schedule.blade.php ENDPATH**/ ?>