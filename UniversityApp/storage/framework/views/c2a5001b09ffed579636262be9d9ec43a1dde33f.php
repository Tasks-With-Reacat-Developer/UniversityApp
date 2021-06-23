<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-left">
	 <div class="col-lg-11">
  <h2 class="heading-ltr">Courses</h2>
  <p>
  <table>
  <tr>
  <th><a href="/admin/courses/create"><button type="button" class="btn btn-success" style="margin: 0 10px 5px 10px;">Add Course</button></a></th>
 <th><a href="/admin/courses/create-group"><button type="button" class="btn btn-warning" style="margin: 0 10px 5px 10px;">Add Course Group</button></a></th>
 </tr>
 </table>
  </p>
  
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"><?php echo e(Form::checkbox('checkall')); ?></th>
      <th scope="col">Course Name</th>
      <th scope="col">Course Number</th>
      <th scope="col">Group</th>
      <th scope="col">Department</th>
      <th scope="col">College</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
   <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e(Form::checkbox('check[]')); ?></th>
      <td><?php echo e($course->course_name); ?>

       <br>
    
<?php echo Form::open(['method' => 'DELETE', 'action' => ['Admin\AdminCoursesController@destroy', $course->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'course']); ?>

      <?php if($course->course_group == NULL): ?>
      <a href="courses/<?php echo e($course->id); ?>/edit">Edit &nbsp;</a>
      <?php else: ?>
      <a href="courses/<?php echo e($course->id); ?>/edit-group">Edit &nbsp;</a>
      <?php endif; ?>
      <a href="#" onclick="$(this).closest('form').submit();">Delete</a>
<?php echo Form::close(); ?> 
</td>
     <td><?php echo e($course->course_number); ?></td>
     
     <?php $__currentLoopData = $courseGroup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <?php if($course->course_group == $cGroup->id): ?>
     <td><?php echo e($cGroup->name); ?></td>
     <?php endif; ?>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <?php if($course->course_group == NULL): ?>
     <td>-</td>
     <?php endif; ?>
     <td><?php echo e($course->department->department_name); ?></td>
     <td><?php echo e($course->department->college->college_name); ?></td>
     <td><?php echo e($course->created_at->format('m/d/Y')); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    <tr>
  </tbody>
</table>
<?php echo e($courses->links()); ?> 
</div>
  </div>
 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/courses/index.blade.php ENDPATH**/ ?>