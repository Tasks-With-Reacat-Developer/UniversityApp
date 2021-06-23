<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2 class="heading-ltr">Edit Course</h2>
 <div class="card">	
<div class="card-header"><?php echo e(__('Add Course Group')); ?></div>
  <?php echo Form::open(['action'=> ['Admin\AdminCoursesController@update_course_group', $course->id],'method' => 'PUT']); ?>

        <div class="selects">
        <select name="college" id="college" class="form-control" data-dependent="department">
        <option value="" diable="true" selected>Select College</option>
        <?php $__currentLoopData = $colleges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $college): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($college->id); ?>" <?php if($college->id == $course->department->college_id): ?> id="college-id" selected <?php endif; ?>><?php echo e($college->college_name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </select>
      <select name="department_id" id="department" class="form-control">
      <option value="">Select Department</option>
      </option>
      </select>
    </div>
        <br>
        <select name="course_group_name" id="course_group_name" class="form-control">
       <?php $__currentLoopData = $courseGroup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($cGroup->id); ?>" <?php if($cGroup->id == $course->course_group): ?> selected <?php endif; ?>><?php echo e($cGroup->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </select>       
        <br>
    <table>
    <tr>
   <th>Course Number</th>
   <th>Course Name</th>
   <th>Hours</th>
   <th>Order</th>
    </tr>
    <tr>
    <td>
    <?php echo e(Form::number('course_number',$course->course_number,['class' => 'form-control', 'placeholder' => 'Course Number'])); ?>

    </td>
    <td>
    <?php echo e(Form::text('course_name',$course->course_name,['class' => 'form-control', 'placeholder' => 'Course Name'])); ?>

    </td>
    <td>
    <?php echo e(Form::number('hours',$course->hours,['class' => 'form-control', 'placeholder' => 'No. Hours'])); ?>

     </td>
      <td>
      <?php $__currentLoopData = $courseOrder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cOrder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($course->course_order == $cOrder->id): ?>
    <?php echo e(Form::number('order',$cOrder->order,['class' => 'form-control', 'placeholder' => 'Order'])); ?>

     <?php endif; ?>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </td>
     </tr>
     <tbody class="course">
     </tbody>
     </table>
                <div class="card-body">
                <div class="float-right">
				<?php echo e(Form::submit('Update',['name' => 'add','class' => 'btn btn-primary'])); ?>

                </div>
                </div>
				<?php echo Form::close(); ?> 
    </div>
    </div>	
    </div>
    </div> 

<script type="text/javascript">
$('#college').ready(function(){
  $("#department option").remove();
  var id = $("#college-id").val();
  $.ajax({
     url : "<?php echo e(route('department.data')); ?>",
     data: {
       "_token": "<?php echo e(csrf_token()); ?>",
       "id": id
       },
     type: 'POST',
     dataType: 'json',
     success: function(result)
     {
       //alert('Success...');
         $.each( result, function(k, v) {
               $('#department').append($('<option>', {value:k, text:v}));
          });
     },
     error: function()
    {
        //handle errors
        alert('error...');
    }
  });
});


$('#college').change(function(){
  $("#department option").remove();
  var id = $(this).val();
  $.ajax({
     url : "<?php echo e(route('department.data')); ?>",
     data: {
       "_token": "<?php echo e(csrf_token()); ?>",
       "id": id
       },
     type: 'POST',
     dataType: 'json',
     success: function(result)
     {
       //alert('Success...');
         $.each( result, function(k, v) {
               $('#department').append($('<option>', {value:k, text:v}));
          });
     },
     error: function()
    {
        //handle errors
        alert('error...');
    }
  });
});

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/courses/course_group/edit.blade.php ENDPATH**/ ?>