@extends('admin.lang.en.layouts.app')
@section('content')

<?php
      $used_courses = array();
      $x = 0;
      function is_exists($arg , $arr){
          for($s=0; $s<count($arr); $s++){
              if($arg == $arr[$s]){
                  return true;
              }
          }
          return false;
      }
?>

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-12">
 <h2 class="heading-ltr">Create Lectures Schedule</h2>
 <div class="card">	
<div class="card-header">{{ __('Create Lectures Schedule') }}</div>
   {!! Form::open(['action'=> 'Admin\AdminSchedulesController@storeLec','method' => 'POST']) !!}
    <table>
    <tr>
    <td>&nbsp;Semester:&nbsp;</td>
    <td>
    <select name="semester" id="semester" class="form-control">
      <option value="">Select Semester</option>
      <option value="1">1</option>
      <option value="2">2</option>
      </select>
    </td>
    <tr>
    </table>
    <br>
    <table>
    <tr>
  <th>Course</th>
  <th></th>
  <th>Professor/Instructor Name</th>
  <th>Time From</th>
  <th>To</th>
  <th>Day</th>
    </tr>
 @for($i=0; $i<4; $i++)
    <tr>
    <td>
    <select name="course[]" id="course" class="form-control">
      <option value="">Select Course</option>
      @foreach($courses as $course)
      @if(!is_exists($course->course_name,$used_courses))
      <option value="{{$course->course_name}}">{{$course->course_name}}</option>
      @endif
      <?php $used_courses[$x++] = $course->course_name; ?>
      @endforeach
      </select>
             <?php 
       for($count=0; $count<$x; $count++){
          $used_courses[$count] = "";
       }
       $x = 0;
        ?>
      </td>
      <td>
    <select name="seclec[]" id="seclec" class="form-control">
      <option value="">Select Section/Lecture</option>
      <option value="Section">Section</option>
      <option value="Lecture">Lecture</option>
      </select>
      </td>
      <td>
    {{Form::text('proinc[]','',['class' => 'form-control', 'placeholder' => 'Professor/Instructor'])}}
     </td>
     <td>
    {{Form::text('time_from[]','',['class' => 'form-control', 'placeholder' => 'Time From'])}}
    </td>
    <td>
    {{Form::text('time_to[]','',['class' => 'form-control', 'placeholder' => 'Time To'])}}
    </td>
    <td>
    <select name="day[]" id="day" class="form-control">
      <option value="">Select Day</option>
      <option value="Saturday">Saturday</option>
      <option value="Sunday">Sunday</option>
      <option value="Monday">Monday</option>
      <option value="Tuesday">Tuesday</option>
      <option value="Wednesday">Wednesday</option>
      <option value="Thursday">Thursday</option>
      </select>
      </td>
      </tr>
      @endfor
     <tbody class="courses">
     </tbody>
      </table>
          <a href="#" onclick='addCourse()'>&nbsp;&nbsp;&nbsp;Add Course</a> 
    <a href="#" onclick="removeCourse()">&nbsp;&nbsp;&nbsp;Remove Course</a>
      <div class="card-body">
      <div class="float-right">
	  {{Form::submit('Submit',['name' => 'save','class' => 'btn btn-primary'])}}
        </div>
        </div>
   {!! Form::close() !!} 
</div>
</div>
</div>
</div>

<script type="text/javascript">
var i = 1;
var c = 0;



function removeCourse(){
$("#tr1"+i).remove();
$("#tr1"+i).empty();

if(i > 1 && c > 0){
  i--;
  c--;
}
}


function is_exists(arg , arr){
    for(s=0; s<arr.length; s++){
    if(arg == arr[s]){
        return true;
        }
    }
 return false;
}


function addCourse(){
var tr = document.createElement("tr");
tr.className = "tr1"; 
tr.id = "tr1" + i; 
var td1 = document.createElement("td");
td1.className = "td1"; 
var td2 = document.createElement("td");
td2.className = "td2"; 
var td3 = document.createElement("td");
td3.className = "td3";
var td4 = document.createElement("td");
td4.className = "td4"; 
var td5 = document.createElement("td");
td5.className = "td5"; 
var td6 = document.createElement("td");
td6.className = "td6";

var course = document.createElement("select");
course.className = "form-control course";
course.name = "courses[]";
course.id = "courses" + i;

var courseOption = document.createElement("option");
courseOption.text = "Select Course";
courseOption.value = "";

var seclecs = document.createElement("select");
seclecs.className = "form-control seclecs";
seclecs.name = "seclecs[]";
seclecs.id = "seclecs" + i;

var seclecsOption = document.createElement("option");
seclecsOption.text = "Select Section/Lecture";
seclecsOption.value = "";

var sectionOption = document.createElement("option");
sectionOption.text = "Section";
sectionOption.value = "Section";

var lectureOption = document.createElement("option");
lectureOption.text = "Lecture";
lectureOption.value = "Lecture";



var proins = document.createElement("input");
proins.type = "text";
proins.className = "form-control";
proins.placeholder = "Professor/Instructor";
proins.name = "proins[]";


var time_froms = document.createElement("input");
time_froms.type = "text";
time_froms.className = "form-control";
time_froms.placeholder = "Time From";
time_froms.name = "time_froms[]";


var time_tos = document.createElement("input");
time_tos.type = "text";
time_tos.className = "form-control";
time_tos.placeholder = "Time To";
time_tos.name = "time_tos[]";


var days = document.createElement("select");
days.className = "form-control days";
days.name = "days[]";
days.id = "days" + i;


var daysOption = document.createElement("option");
daysOption.text = "Select Day";
daysOption.value = "";

var satOption = document.createElement("option");
satOption.text = "Saturday";
satOption.value = "Saturday";

var sunOption = document.createElement("option");
sunOption.text = "Sunday";
sunOption.value = "Sunday";

var monOption = document.createElement("option");
monOption.text = "Monday";
monOption.value = "Monday";

var tueOption = document.createElement("option");
tueOption.text = "Tuesday";
tueOption.value = "Tuesday";

var wenOption = document.createElement("option");
wenOption.text = "Wednesday";
wenOption.value = "Wednesday";

var thuOption = document.createElement("option");
thuOption.text = "Thursday";
thuOption.value = "Thursday";


document.getElementsByClassName("courses")[0].appendChild(tr);
document.getElementsByClassName("tr1")[c].appendChild(td1);
document.getElementsByClassName("tr1")[c].appendChild(td2);
document.getElementsByClassName("tr1")[c].appendChild(td3);
document.getElementsByClassName("tr1")[c].appendChild(td4);
document.getElementsByClassName("tr1")[c].appendChild(td5);
document.getElementsByClassName("tr1")[c].appendChild(td6);
document.getElementsByClassName("td1")[c].appendChild(course);
document.getElementsByClassName("course")[c].appendChild(courseOption);
document.getElementsByClassName("td2")[c].appendChild(seclecs);
document.getElementsByClassName("seclecs")[c].appendChild(seclecsOption);
document.getElementsByClassName("seclecs")[c].appendChild(sectionOption);
document.getElementsByClassName("seclecs")[c].appendChild(lectureOption);
document.getElementsByClassName("td3")[c].appendChild(proins);
document.getElementsByClassName("td4")[c].appendChild(time_froms);
document.getElementsByClassName("td5")[c].appendChild(time_tos);
document.getElementsByClassName("td6")[c].appendChild(days);
document.getElementsByClassName("days")[c].appendChild(daysOption);
document.getElementsByClassName("days")[c].appendChild(satOption);
document.getElementsByClassName("days")[c].appendChild(sunOption);
document.getElementsByClassName("days")[c].appendChild(monOption);
document.getElementsByClassName("days")[c].appendChild(tueOption);
document.getElementsByClassName("days")[c].appendChild(wenOption);
document.getElementsByClassName("days")[c].appendChild(thuOption);


var courses = <?php echo $courses; ?>;
var coursesLen = <?php echo count($courses); ?>;
var used_courses = [];

for(x=0; x<coursesLen; x++){
if(!is_exists(courses[x]["course_name"],used_courses)){
$('#courses'+i).append($('<option>', {value:courses[x]["course_name"], text:courses[x]["course_name"]}));
}
used_courses[x] = courses[x]["course_name"];
}


i++;
c++;
}
</script>
@endsection