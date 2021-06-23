<?php $__env->startSection('content'); ?>
<?php echo $__env->make('lang.en.inc.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Profile</div>
                <div class="card-body">
              <?php if(!$student_data_check): ?>
               <strong>No data found!</strong>
               <?php else: ?>
                <table>
                <tr>
               <td>Student Name:&nbsp;&nbsp;</td>
               <td><?php echo e(Auth::user()->name); ?></td>
                </tr>
                <tr>
               <td>Student ID:&nbsp;&nbsp;</td>
               <td><?php echo e(Auth::user()->student_id); ?></td>
                </tr>
               <tr>
               <td>Department:&nbsp;&nbsp;</td>
               <td><?php echo e($department->department_name); ?></td>
                </tr>
              <tr>
               <td>NO. Hours:&nbsp;&nbsp;</td>
               <td><?php echo e($student_n_hours); ?></td>
                </tr>
              <tr>
               <td>Level:&nbsp;&nbsp;</td>
               <td><?php echo e($student_data->level); ?></td>
                </tr>
                </table>
                <br>
                <p style="font-size:20px">Your Courses</p>
                <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Course Name</th>
      <th scope="col">NO. Hours</th>
      <th scope="col">Course Number</th>
    </tr>
  </thead>
  <tbody>
  <?php for($i=0; $i<count($student_cs_name); $i++): ?>
  <tr>
  <td><?php echo e($student_cs_name[$i]); ?></td>
  <td><?php echo e($student_cs_hours[$i]); ?></td>
  <td><?php echo e($student_cs_number[$i]); ?></td>
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

<?php echo $__env->make('lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/lang/en/student/home.blade.php ENDPATH**/ ?>