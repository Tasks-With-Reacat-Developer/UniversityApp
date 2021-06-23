@extends('admin.lang.en.layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2 class="heading-ltr">Add Course Group</h2>
 <div class="card">	
<div class="card-header">{{ __('Add Course Group') }}</div>
  {!! Form::open(['action'=>'Admin\AdminCoursesController@store_course_group','method' => 'POST']) !!}
        <div class="selects">
        <select name="college" id="college" class="form-control" data-dependent="department">
        <option value="" diable="true" selected>Select College</option>
        @foreach($colleges as $college)
        <option value="{{$college->id}}">{{$college->college_name}}</option>
        @endforeach
       </select>
      <select name="department_id" id="department" class="form-control">
      <option value="">Select Department</option>
      </option>
      </select>
    </div>
        <br>
    {{Form::text('course_group_name','',['class' => 'form-control', 'placeholder' => 'Course Group Name'])}}
        <br>
    <table>
    <tr>
   <th>Course Number</th>
   <th>Course Name</th>
   <th>Hours</th>
   <th>Order</th>
    </tr>
    @for($i=0; $i<2; $i++)
    <tr>
    <td>
    {{Form::number('course_number[]','',['class' => 'form-control', 'placeholder' => 'Course Number'])}}
    </td>
    <td>
    {{Form::text('course_name[]','',['class' => 'form-control', 'placeholder' => 'Course Name'])}}
    </td>
    <td>
    {{Form::number('hours[]','',['class' => 'form-control', 'placeholder' => 'No. Hours'])}}
     </td>
      <td>
    {{Form::number('order[]','',['class' => 'form-control', 'placeholder' => 'Order'])}}
     </td>
     </tr>
     @endfor
     <tbody class="course">
     </tbody>
     </table>
    <a href="#" onclick='addCourse()'>&nbsp;&nbsp;&nbsp;Add Course</a> 
                <div class="card-body">
                <div class="float-right">
				{{Form::submit('Add',['name' => 'add','class' => 'btn btn-primary'])}}
                </div>
                </div>
				{!! Form::close() !!} 
    </div>
    </div>	
    </div>
    </div> 

<script type="text/javascript">
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
@endsection