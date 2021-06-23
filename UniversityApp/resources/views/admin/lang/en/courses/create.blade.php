@extends('admin.lang.en.layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2 class="heading-ltr">Add Course</h2>
 <div class="card">	
<div class="card-header">{{ __('Add Course') }}</div>
  {!! Form::open(['action'=>'Admin\AdminCoursesController@store','method' => 'POST']) !!}
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
    <a href="#" onclick='selectElement()'>&nbsp;&nbsp;&nbsp;Add Department</a> 
        <br>
        <br>
    {{Form::number('course_number','',['class' => 'form-control', 'placeholder' => 'Course Number'])}}
    <br>
    {{Form::text('course_name','',['class' => 'form-control', 'placeholder' => 'Course Name'])}}
    <br>
    {{Form::number('hours','',['class' => 'form-control', 'placeholder' => 'No. Hours'])}}

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
@endsection