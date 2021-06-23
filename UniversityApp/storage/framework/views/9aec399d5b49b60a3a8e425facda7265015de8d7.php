<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2 class="heading-ltr">Add Course</h2>
 <div class="card">	
<div class="card-header"><?php echo e(__('Add Course')); ?></div>
  <?php echo Form::open(['action'=>'Admin\AdminCoursesController@store','method' => 'POST']); ?>

        <div class="selects">
        <select name="college" id="college" class="form-control" data-dependent="department">
        <option value="" diable="true" selected>Select College</option>
        <?php $__currentLoopData = $colleges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $college): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($college->id); ?>"><?php echo e($college->college_name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </select>
      <select name="department_id" id="department" class="form-control">
      <option value="">Select Department</option>
      </option>
      </select>
    </div>
    <a href="#" onclick='selectElement()'>&nbsp;&nbsp;&nbsp;Add Department</a> 
        <br>
        <br>
    <?php echo e(Form::number('course_number','',['class' => 'form-control', 'placeholder' => 'Course Number'])); ?>

    <br>
    <?php echo e(Form::text('course_name','',['class' => 'form-control', 'placeholder' => 'Course Name'])); ?>

    <br>
    <?php echo e(Form::number('hours','',['class' => 'form-control', 'placeholder' => 'No. Hours'])); ?>


                <div class="card-body">
                <div class="float-right">
				<?php echo e(Form::submit('Add',['name' => 'add','class' => 'btn btn-primary'])); ?>

                </div>
                </div>
				<?php echo Form::close(); ?>

                
    </div>
    </div>	
    </div>
    </div> 

<script type="text/javascript">
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

var i = 0;
function selectElement(){
var select = document.createElement("select");
var option = document.createElement("option");
option.text = "Select Department";
select.className = "form-control"; 
select.id = "selectElement" + (++i);
select.name = 'selectElements[]';
select.add(option, null);
document.getElementsByClassName("selects")[0].appendChild(select);
}

$('#college').change(function(){
  for(count=1; count<=i; count++)
  $("#selectElement" + count + " option").remove();
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
       for(count=1; count<=i; count++)
         $.each( result, function(k, v) {
               $('#selectElement' + count).append($('<option>', {value:k, text:v}));
         
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
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/courses/create.blade.php ENDPATH**/ ?>