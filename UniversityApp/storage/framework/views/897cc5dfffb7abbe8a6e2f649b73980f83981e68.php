<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2 class="heading-ltr">Edit Student Data</h2>
 <div class="card">	
<div class="card-header"><?php echo e(__('Edit Student Data')); ?></div>
   <table>
    <tr>
   <td>&nbsp;Student Name:&nbsp;</td>
   <td><input type="text" class="form-control" value="<?php echo e($student->name); ?>" disabled></td>
    </tr>
    <tr>
   <td>&nbsp;Student ID:&nbsp;</td>
   <td><input type="text" class="form-control" value="<?php echo e($student->student_id); ?>" disabled></td>
    </tr>
        <tr>
   <td>&nbsp;GPA:&nbsp;</td>
   <td><input type="text" class="form-control" value="<?php if($student_data->gpa == NULL): ?> 0.00 <?php else: ?> <?php echo e($student_data->gpa); ?> <?php endif; ?>" disabled></td>
    </tr>
   </table>
   <?php echo Form::open(['action'=> ['Admin\AdminStudentsController@update_student_data', $student_data->id, $student->id],'method' => 'PUT']); ?>

        <div class="selects">
        <table>
        <tr>
        <td>&nbsp;College:&nbsp;</td>
        <td>
        <select name="college" id="college" class="form-control" data-dependent="department">
        <option value="" diable="true" selected>Select College</option>
       <?php $__currentLoopData = $colleges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $college): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <option value="<?php echo e($college->id); ?>" <?php if($college->id == $student_data->college): ?> id="college-id" selected <?php endif; ?>><?php echo e($college->college_name); ?></option> 
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
       </select>
       </td>
       </tr>
       <tr>
      <td>&nbsp;Department:&nbsp;</td>
      <td>
     <select name="department_id" id="department" class="form-control">
      <option value="">Select Department</option>
       <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php if($department->college_id == $college->id): ?>
       <option value="<?php echo e($department->id); ?>" <?php if($department->id == $student_data->department): ?> id="department-id" selected <?php endif; ?>><?php echo e($department->department_name); ?></option> 
       <?php endif; ?>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </option>
      </select>
      </td>
      <br>
      <tr>
      <td>&nbsp;Level:&nbsp;</td>
      <td>
      <select name="level" id="level" class="form-control">
       <option value="">Select Level</option>
       <?php for($i=1; $i<=$college->levels; $i++): ?>
       <option value="<?php echo e($i); ?>" <?php if($student_data->level == $i): ?> id="level-id" selected <?php endif; ?>><?php echo e($i); ?></option> 
        <?php endfor; ?>
       </option>
      </select>
      </td>
      </tr>
      </table>
    </div>
     <br>
    <table>
    <tr>
   <th>Course</th>
   <th>Mid-Term Grade</th>
   <th>Grade</th>
    </tr>
    <?php for($c=0; $c<count($student_course);  $c++): ?>
    <tr id = "course_elements<?php echo e($c); ?>">
    <td>
    <select name="course[]" id="course<?php echo e($c); ?>" class="form-control">
     <option value="">Select Course</option>
     <option value="<?php echo e($student_course[$c]->course_id); ?>" selected><?php echo e($student_course[$c]->course->course_name); ?></option>
     <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <?php if($course->department_id == $students_data[0]->department): ?>
     <?php if($course->id != $student_course[$c]->course_id): ?>
     <option value="<?php echo e($course->id); ?>"><?php echo e($course->course_name); ?></option>
     <?php endif; ?>
     <?php endif; ?>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </option>
     </select>
     </td>
    <td>
    <?php echo e(Form::number('mid_term_grade[]',$student_course[$c]->mid_term_grade,['class' => 'form-control', 'placeholder' => 'Mid-Term Grade'])); ?>

    </td>
    <td>
     <select name="grade[]" id="grade<?php echo e($c); ?>" class="form-control">
      <option value="">Select Grade</option>
      <option value="4.0" <?php if($student_course[$c]->grade == 4.0): ?> selected <?php endif; ?>>A</option>
      <option value="3.7" <?php if($student_course[$c]->grade == 3.7): ?> selected <?php endif; ?>>A-</option>
      <option value="3.3" <?php if($student_course[$c]->grade == 3.3): ?> selected <?php endif; ?>>B+</option>
      <option value="3.0" <?php if($student_course[$c]->grade == 3.0): ?> selected <?php endif; ?>>B</option>
      <option value="2.7" <?php if($student_course[$c]->grade == 2.7): ?> selected <?php endif; ?>>B-</option>
      <option value="2.3" <?php if($student_course[$c]->grade == 2.3): ?> selected <?php endif; ?>>C+</option>
      <option value="2.0" <?php if($student_course[$c]->grade == 2.0): ?> selected <?php endif; ?>>C</option>
      <option value="1.7" <?php if($student_course[$c]->grade == 1.7): ?> selected <?php endif; ?>>C-</option>
      <option value="1.3" <?php if($student_course[$c]->grade == 1.3): ?> selected <?php endif; ?>>D+</option>
      <option value="1.0" <?php if($student_course[$c]->grade == 1.0): ?> selected <?php endif; ?>>D</option>
      <option value="0.7" <?php if($student_course[$c]->grade == 0.7): ?> selected <?php endif; ?>>D-</option>
      <option value="0.0" <?php if($student_course[$c]->grade == 0.0): ?> selected <?php endif; ?>>F</option>
      </option>
      </select>     
      </td>
      <td>
      <?php if($student_course[$c]->grade == NULL): ?>
      <select name="course_status[]" id="cs_status" class="form-control">
      <option value="">Select Status</option>
      <option value="Active" <?php if($student_course[$c]->course_status == 'Active'): ?> selected <?php endif; ?>>Active</option>
      <option value="Deactived" <?php if($student_course[$c]->course_status == 'Deactived'): ?> selected <?php endif; ?>>Deactived</option>
      </select>
 <?php echo Form::hidden('course_status_pos[]', $c); ?>

      <?php endif; ?>
      </td>
     </tr>
    <?php endfor; ?>
     <tbody class="courses">
     </tbody>
     </table>
    <a href="#" onclick="addCourse()">&nbsp;&nbsp;&nbsp;Add Course</a>
    <a href="#" onclick="removeCourse()">&nbsp;&nbsp;&nbsp;Remove Course</a>
                 <div class="card-body">
                <div class="float-right">
				<?php echo e(Form::submit('Update',['name' => 'save','class' => 'btn btn-primary'])); ?>

                </div>
                </div>
    <?php echo Form::close(); ?> 
</div>
</div>
</div>
</div>

<?php
$coursesJSON = json_encode($courses);
$studentDataJSON = json_encode($student_data);
$studentCourseJSON = json_encode($student_course);
?>

<script type="text/javascript">
var i = 1;
var c = 0;
var count = <?php echo e(count($student_course)); ?>;


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
       $('#department').append($('<option>', {value:'',text:'Select Department'}));
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
  $("#level option").remove();
  var id = $(this).val();
  $.ajax({
     url : "<?php echo e(route('college.level.data')); ?>",
     data: {
       "_token": "<?php echo e(csrf_token()); ?>",
       "id": id
       },
     type: 'POST',
     dataType: 'json',
     success: function(result)
     {
        $('#level').append($('<option>', {value:'',text:'Select Level'}));
         $.each( result, function(k, v) {
               $('#level').append($('<option>', {value:k, text:v}));
          });
     },
     error: function()
    {
        alert('error...');
    }
  });
});

$('#department').change(function(){
  var counter;
  var id = $(this).val();
  var std_value = <?php echo e(count($student_course)); ?>;
  for(x=0; x<std_value; x++){
   $.ajax({
     ajaxcounter: x,
     url : "<?php echo e(route('course.data')); ?>",
     data: {
       "_token": "<?php echo e(csrf_token()); ?>",
       "id": id
       },
     type: 'POST',
     dataType: 'json',
     
     success: function(result)
     {
      counter = this.ajaxcounter;
       $("#course"+ counter +" option").remove();
        $('#course'+counter).append($('<option>', {value:'',text:'Select Course'}));
         $.each(result, function(k, v) {
               $('#course'+counter).append($('<option>', {value:k, text:v}));
           
          });
     },
     error: function()
    {
        alert('error...');
    }
  });
  }
});

$('#department').change(function(){
 var counter;
 var id = $(this).val();
 for(x=1; x<i; x++){
   $.ajax({
    ajaxcounter: x,
     url : "<?php echo e(route('course.data')); ?>",
     data: {
       "_token": "<?php echo e(csrf_token()); ?>",
       "id": id
       },
     type: 'POST',
     dataType: 'json',
     success: function(result)
     {
    counter = this.ajaxcounter;
    $('#courses' + counter +' option').remove();
    
         //alert(counter);
        $('#courses' + counter).append($('<option>', {value:'',text:'Select Course'}));
         $.each(result, function(k, v) {
               $('#courses' + counter).append($('<option>', {value:k, text:v}));
           
          });

     },
     error: function()
    {
        alert('error...');
    }
  });
 }
});

function removeCourse(){
$("#tr1"+i).remove();
$("#tr1"+i).empty();

if(count >= 4){
$("#course_elements"+count).remove();
count--;
}

if(i > 1 && c > 0){
  i--;
  c--;
}
}



function addCourse(){
var tr = document.createElement("tr");
tr.className = "tr1"; 
tr. id = "tr1" + i;
var td1 = document.createElement("td");
td1.className = "td1"; 
td1.id = "td1" + i;
var td2 = document.createElement("td");
td2.className = "td2"; 
td2.id = "td2" + i;
var td3 = document.createElement("td");
td3.className = "td3";
td3.id = "td3" + i;



var course = document.createElement("select");
course.className = "form-control course";
course.name = "courses[]";
course.id = "courses" + i;



var courseOption = document.createElement("option");
courseOption.text = "Select Course";
courseOption.value = "";



var midTermGrade = document.createElement("input");
midTermGrade.type = "number";
midTermGrade.className = "form-control";
midTermGrade.id = "mid_term_grades" + i;
midTermGrade.placeholder = "Mid-Term Grade";
midTermGrade.name = "mid_term_grades[]";

var grade = document.createElement("select");
grade.className = "form-control grade";
grade.id = "grades" + i;
grade.name = "grades[]";

var gradeOption1 = document.createElement("option");
gradeOption1.text = "Select Grade";
gradeOption1.value = "";

var gradeOption2 = document.createElement("option");
gradeOption2.text = "A";
gradeOption2.value = 4.0;

var gradeOption3 = document.createElement("option");
gradeOption3.text = "A-";
gradeOption3.value = 3.7;

var gradeOption4 = document.createElement("option");
gradeOption4.text = "B+";
gradeOption4.value = 3.3;

var gradeOption5 = document.createElement("option");
gradeOption5.text = "B";
gradeOption5.value = 3.0;

var gradeOption6 = document.createElement("option");
gradeOption6.text = "B-";
gradeOption6.value = 2.7;

var gradeOption7 = document.createElement("option");
gradeOption7.text = "C+";
gradeOption7.value = 2.3;

var gradeOption8 = document.createElement("option");
gradeOption8.text = "C";
gradeOption8.value = 2.0;

var gradeOption9 = document.createElement("option");
gradeOption9.text = "C-";
gradeOption9.value = 1.7;

var gradeOption10 = document.createElement("option");
gradeOption10.text = "D+";
gradeOption10.value = 1.3;

var gradeOption11 = document.createElement("option");
gradeOption11.text = "D";
gradeOption11.value = 1.0;

var gradeOption12 = document.createElement("option");
gradeOption12.text = "D-";
gradeOption12.value = 0.7;

var gradeOption13 = document.createElement("option");
gradeOption13.text = "F";
gradeOption13.value = 0.0;


document.getElementsByClassName("courses")[0].appendChild(tr);
document.getElementsByClassName("tr1")[c].appendChild(td1);
document.getElementsByClassName("tr1")[c].appendChild(td2);
document.getElementsByClassName("tr1")[c].appendChild(td3);
document.getElementsByClassName("td1")[c].appendChild(course);
document.getElementsByClassName("td2")[c].appendChild(midTermGrade);
document.getElementsByClassName("td3")[c].appendChild(grade);
document.getElementsByClassName("grade")[c].appendChild(gradeOption1);
document.getElementsByClassName("grade")[c].appendChild(gradeOption2);
document.getElementsByClassName("grade")[c].appendChild(gradeOption3);
document.getElementsByClassName("grade")[c].appendChild(gradeOption4);
document.getElementsByClassName("grade")[c].appendChild(gradeOption5);
document.getElementsByClassName("grade")[c].appendChild(gradeOption6);
document.getElementsByClassName("grade")[c].appendChild(gradeOption7);
document.getElementsByClassName("grade")[c].appendChild(gradeOption8);
document.getElementsByClassName("grade")[c].appendChild(gradeOption9);
document.getElementsByClassName("grade")[c].appendChild(gradeOption10);
document.getElementsByClassName("grade")[c].appendChild(gradeOption11);
document.getElementsByClassName("grade")[c].appendChild(gradeOption12);
document.getElementsByClassName("grade")[c].appendChild(gradeOption13);
$('#courses'+i).append('<option>'+'Select Course');

var student_data = <?php echo $studentDataJSON; ?>;
var courses = <?php echo $coursesJSON; ?>;
var student_course = <?php echo $studentCourseJSON; ?>;
var std_courses_len = <?php echo count($student_course); ?>;
var courses_len = <?php echo count($courses); ?>;
var taken_courses = new Array();
var ct = 0;


function courseSearch(arr, element){
for(s=0; s<arr.length; s++){
    if(arr[s] == element){
        return true;
    }
  }
  return false;
}
     
     for(x=0; x<std_courses_len; x++){
       for(y=0; y<courses_len; y++){
        if(courses[y]["department_id"] == student_data["department"]){
          if(courses[y]["id"] != student_course[x]["course_id"] && !courseSearch(taken_courses,courses[y]["id"]) ){
           taken_courses[ct++] = courses[y]["id"];
           $('#courses'+i).append($('<option>', {value:courses[y]["id"], text:courses[y]["course_name"]}));
          }
         }
       }
     }

i++;
c++;
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/students/students_data/edit.blade.php ENDPATH**/ ?>