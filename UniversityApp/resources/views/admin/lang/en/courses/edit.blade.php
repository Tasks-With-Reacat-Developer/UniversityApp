@extends('admin.lang.en.layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2 class="heading-ltr">Edit Course</h2>
 <div class="card">	
<div class="card-header">{{ __('Edit Course') }}</div>
  {!! Form::open(['action'=> ['Admin\AdminCoursesController@update', $course->id] ,'method' => 'PUT']) !!}
        <div class="selects">
        <select name="college" id="college" class="form-control" data-dependent="department">
        <option value="" diable="true" selected>Select College</option>
        @foreach($colleges as $college)
        <option value="{{$college->id}}" @if($college->id == $course->department->college_id) id="college-id" selected @endif>{{$college->college_name}}</option>
        @endforeach
       </select>
      <select name="department_id" id="department" class="form-control">
      <option value="">Select Department</option>
      </option>
      </select>
    </div> 
        <br>
     {{Form::number('course_number',$course->course_number,['class' => 'form-control', 'placeholder' => 'Course Number'])}}
     <br>
    {{Form::text('course_name',$course->course_name,['class' => 'form-control', 'placeholder' => 'Course Name'])}}
    <br>
    {{Form::number('hours',$course->hours,['class' => 'form-control', 'placeholder' => 'No. Hours'])}}

                <div class="card-body">
                <div class="float-right">
				{{Form::submit('Update',['name' => 'add','class' => 'btn btn-primary'])}}
                </div>
                </div>
				{!! Form::close() !!}
                
    </div>
    </div>	
    </div>
    </div> 

<script type="text/javascript">
$('#college').ready(function(){
  $("#department option").remove();
  var id = $("#college-id").val();
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
</script>
@endsection