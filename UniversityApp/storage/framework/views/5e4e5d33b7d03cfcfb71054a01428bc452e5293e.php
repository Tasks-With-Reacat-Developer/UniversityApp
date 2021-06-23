<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-left">
	 <div class="col-lg-11">
  <h2 class="heading-ltr">Students</h2>
  <p>
  <a href="/admin/students/create"><button type="button" class="btn btn-success" style="margin: 0 10px 5px 10px;">Add Student</button></a>
  </p>
  
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Student Name</th>
      <th scope="col">Student ID</th>
    </tr>
  </thead>
  <tbody>
   <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
     <td><?php echo e($student->name); ?>

       <br>

<?php echo Form::open(['method' => 'DELETE', 'action' => ['Admin\AdminStudentsController@destroy', $student->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'student']); ?>

      <a href="students/<?php echo e($student->id); ?>/edit">Edit &nbsp;</a>
      <?php if(DB::table('student_data')->where('student_id',$student->id)->first()): ?>
      <a href="students/<?php echo e($student->id); ?>/edit-student-data">Edit Student Data &nbsp;</a>
      <?php else: ?>
      <a href="students/<?php echo e($student->id); ?>/create-student-data">Add Student Data &nbsp;</a>
      <?php endif; ?>
      <a href="#" onclick="$(this).closest('form').submit();">Delete</a>
<?php echo Form::close(); ?> 
</td>
      <td><?php echo e($student->student_id); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    <tr>
  </tbody>
</table>
</div>
  </div>
 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/students/index.blade.php ENDPATH**/ ?>