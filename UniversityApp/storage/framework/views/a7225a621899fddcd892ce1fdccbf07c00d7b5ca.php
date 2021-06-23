<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2 class="heading-ltr">Add Course Group</h2>
 <div class="card">	
<div class="card-header"><?php echo e(__('Add Course Group')); ?></div>
  <?php echo Form::open(['action'=>'Admin\AdminCoursesController@store_course_group','method' => 'POST']); ?>

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
        <br>
    <?php echo e(Form::text('course_group_name','',['class' => 'form-control', 'placeholder' => 'Course Group Name'])); ?>

        <br>
    <table>
    <tr>
   <th>Course Number</th>
   <th>Course Name</th>
   <th>Hours</th>
   <th>Order</th>
    </tr>
    <?php for($i=0; $i<2; $i++): ?>
    <tr>
    <td>
    <?php echo e(Form::number('course_number[]','',['class' => 'form-control', 'placeholder' => 'Course Number'])); ?>

    </td>
    <td>
    <?php echo e(Form::text('course_name[]','',['class' => 'form-control', 'placeholder' => 'Course Name'])); ?>

    </td>
    <td>
    <?php echo e(Form::number('hours[]','',['class' => 'form-control', 'placeholder' => 'No. Hours'])); ?>

     </td>
      <td>
    <?php echo e(Form::number('order[]','',['class' => 'form-control', 'placeholder' => 'Order'])); ?>

     </td>
     </tr>
     <?php endfor; ?>
     <tbody class="course">
     </tbody>
     </table>
    <a href="#" onclick='addCourse()'>&nbsp;&nbsp;&nbsp;Add Course</a> 
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

function addCourse(){
var tr = document.createElement("tr");
tr.className = "tr1"; 
var td1 = document.createElement("td");
td1.className = "td1"; 
var td2 = document.createElement("td");
td2.className = "td2"; 
var td3 = document.createElement("td");
td3.className = "td3"; 
var td4 = document.createElement("td");
td4.className = "td4"; 

var courseNum = document.createElement("input");
courseNum.type = "number";
courseNum.className = "form-control";
courseNum.placeholder = "Course Number";
courseNum.name = "course_group_num[]";
var courseName = document.createElement("input");
courseName.type = "text";
courseName.className = "form-control";
courseName.placeholder = "Course Name";
courseName.name = "course_group_names[]";
var hours = document.createElement("input");
hours.type = "number";
hours.className = "form-control";
hours.placeholder = "Hours";
hours.name = "hours_group[]";
var order = document.createElement("input");
order.type = "number";
order.className = "form-control";
order.placeholder = "Order";
order.name = "order_group[]";


document.getElementsByClassName("course")[0].appendChild(tr);
document.getElementsByClassName("tr1")[0].appendChild(td1);
document.getElementsByClassName("tr1")[0].appendChild(td2);
document.getElementsByClassName("tr1")[0].appendChild(td3);
document.getElementsByClassName("tr1")[0].appendChild(td4);
document.getElementsByClassName("td1")[0].appendChild(courseNum);
document.getElementsByClassName("td2")[0].appendChild(courseName);
document.getElementsByClassName("td3")[0].appendChild(hours);
document.getElementsByClassName("td4")[0].appendChild(order);
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/courses/course_group/create.blade.php ENDPATH**/ ?>