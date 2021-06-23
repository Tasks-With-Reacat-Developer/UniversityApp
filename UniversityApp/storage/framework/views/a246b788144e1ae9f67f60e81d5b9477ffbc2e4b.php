<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-left">
	 <div class="col-lg-11">
  <h2 class="heading-ltr">Schedules</h2>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Schedule Name</th>
    </tr>
  </thead>
  <tbody>
 <tr>
<td>Lectures Schedule
<br>
<?php if($lecSchedule): ?>
<a href="schedules/<?php echo e($lecSchedule->id); ?>/edit-lec-schedule">Edit &nbsp;</a>
<?php else: ?>
<a href="schedules/create-lec-schedule">Add &nbsp;</a>
<?php endif; ?>
</td>

 </tr>
 <tr>
<td>Exams Schedule
<br>
<?php if($examSchdule): ?>
<a href="schedules/<?php echo e($examSchdule->id); ?>/edit-exam-schedule">Edit &nbsp;</a>
<?php else: ?>
<a href="schedules/create-exam-schedule">Add &nbsp;</a>
<?php endif; ?>
</td>
 </tr>
  </tbody>
</table>
</div>
  </div>
 </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/schedules/index.blade.php ENDPATH**/ ?>