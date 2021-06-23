<?php $__env->startSection('content'); ?>
<?php echo $__env->make('lang.ar.inc.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h6 class="float-right">الملف الشخصي</h6></div>
                <div class="card-body">
              <?php if(!$student_data_check): ?>
               <strong>لم يتم ايجاد اي بيانات!</strong>
               <?php else: ?>
                <table>
                <tr>
               <td>أسم الطالب:&nbsp;&nbsp;</td>
               <td><?php echo e(Auth::user()->name); ?></td>
                </tr>
                <tr>
               <td>الرقم الاكاديمي:&nbsp;&nbsp;</td>
               <td><?php echo e(Auth::user()->student_id); ?></td>
                </tr>
               <tr>
               <td>القسم:&nbsp;&nbsp;</td>
               <td><?php echo e($department->department_name); ?></td>
                </tr>
              <tr>
               <td>عدد الساعات:&nbsp;&nbsp;</td>
               <td><?php echo e($student_n_hours); ?></td>
                </tr>
              <tr>
               <td>المستوى:&nbsp;&nbsp;</td>
               <td><?php echo e($student_data->level); ?></td>
                </tr>
                </table>
                <br>
                <p style="font-size:20px; float:right;">مواد الطالب</p>
                <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">أسم المادة</th>
      <th scope="col">عدد الساعات</th>
      <th scope="col">رقم المادة</th>
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

<?php echo $__env->make('lang.ar.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/lang/ar/student/home.blade.php ENDPATH**/ ?>