@extends('admin.lang.en.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2 class="heading-ltr">Add Student Data</h2>
 <div class="card">	
<div class="card-header">{{ __('Add Student Data') }}</div>
   <table>
    <tr>
   <td>&nbsp;Student Name:&nbsp;</td>
   <td><input type="text" class="form-control" value="{{$student->name}}" disabled></td>
    </tr>
    <tr>
   <td>&nbsp;Student ID:&nbsp;</td>
   <td><input type="text" class="form-control" value="{{$student->student_id}}" disabled></td>
    </tr>
   </table>
   {!! Form::open(['action'=> ['Admin\AdminStudentsController@store_student_data', $student->id ],'method' => 'POST']) !!}
        <div class="selects">
        <table>
        <tr>
        <td>&nbsp;College:&nbsp;</td>
        <td>
        <select name="college" id="college" class="form-control" data-dependent="department">
        <option value="" disable="true" selected>Select College</option>
        @foreach($colleges as $college)
        <option value="{{$college->id}}">{{$college->college_name}}</option>
        @endforeach
       </select>
       </td>
       </tr>
       <tr>
      <td>&nbsp;Department:&nbsp;</td>
      <td>
      <select name="department_id" id="department" class="form-control">
      <option value="">Select Department</option>
      </option>
      </select>
      </td>
      <br>
      <tr>
      <td>&nbsp;Level:&nbsp;</td>
      <td>
      <select name="level" id="level" class="form-control">
       <option value="">Select Level</option>
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
    @for($i=0; $i<4; $i++)
    <tr>
    <td>
    <select name="course[]" id="course{{$i}}" class="form-control">
     <option value="">Select Course</option>
     </option>
     </select>
     </td>
    <td>
    {{Form::number('mid_term_grade[]','',['class' => 'form-control', 'placeholder' => 'Mid-Term Grade'])}}
    </td>
    <td>
     <select name="grade[]" id="grade{{$i}}" class="form-control">
      <option value="">Select Grade</option>
      <option value="4.0">A</option>
      <option value="3.7">A-</option>
      <option value="3.3">B+</option>
      <option value="3.0">B</option>
      <option value="2.7">B-</option>
      <option value="2.3">C+</option>
      <option value="2.0">C</option>
      <option value="1.7">C-</option>
      <option value="1.3">D+</option>
      <option value="1.0">D</option>
      <option value="0.7">D-</option>
      <option value="0.0">F</option>
      </option>
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
				{{Form::submit('Save',['name' => 'save','class' => 'btn btn-primary'])}}
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


$('#college').change(function(){
  $("#department option").remove();
  var id = $(this).val();
  $.ajax({
     url : "{{route('department.data')}}",
     data: {
       "_token": "{{ csrf_token() }}",
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
     url : "{{route('college.level.data')}}",
     data: {
       "_token": "{{ csrf_token() }}",
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
  for(x=0; x<4; x++){
   $.ajax({
     ajaxcounter: x,
     url : "{{route('course.data')}}",
     data: {
       "_token": "{{ csrf_token() }}",
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
     url : "{{route('course.data')}}",
     data: {
       "_token": "{{ csrf_token() }}",
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
               $('#courses' + counter).append($('<option hidden>', {value:v, text:''}));
           
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

if(i > 1 && c > 0){
  i--;
  c--;
}
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

var course = document.createElement("select");
course.className = "form-control course";
course.name = "courses[]";
course.id = "courses" + i++;
document.getElementsByClassName("course").innerHTML = "</option>";

var courseOption = document.createElement("option");
courseOption.text = "Select Course";
courseOption.value = "";

var midTermGrade = document.createElement("input");
midTermGrade.type = "number";
midTermGrade.className = "form-control";
midTermGrade.placeholder = "Mid-Term Grade";
midTermGrade.name = "mid_term_grades[]";

var grade = document.createElement("select");
grade.className = "form-control grade";
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
document.getElementsByClassName("course")[c].appendChild(courseOption);
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
c++;
}
</script>
@endsection
