@extends('admin.lang.en.layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2 class="heading-ltr">Edit Course</h2>
 <div class="card">	
<div class="card-header">{{ __('Add Course Group') }}</div>
  {!! Form::open(['action'=> ['Admin\AdminCoursesController@update_course_group', $course->id],'method' => 'PUT']) !!}
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
        <select name="course_group_name" id="course_group_name" class="form-control">
       @foreach($courseGroup as $cGroup)
        <option value="{{$cGroup->id}}" @if($cGroup->id == $course->course_group) selected @endif>{{$cGroup->name}}</option>
        @endforeach
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
    {{Form::number('course_number',$course->course_number,['class' => 'form-control', 'placeholder' => 'Course Number'])}}
    </td>
    <td>
    {{Form::text('course_name',$course->course_name,['class' => 'form-control', 'placeholder' => 'Course Name'])}}
    </td>
    <td>
    {{Form::number('hours',$course->hours,['class' => 'form-control', 'placeholder' => 'No. Hours'])}}
     </td>
      <td>
      @foreach($courseOrder as $cOrder)
      @if($course->course_order == $cOrder->id)
    {{Form::number('order',$cOrder->order,['class' => 'form-control', 'placeholder' => 'Order'])}}
     @endif
     @endforeach
     </td>
     </tr>
     <tbody class="course">
     </tbody>
     </table>
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