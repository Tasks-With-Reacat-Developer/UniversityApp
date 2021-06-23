@extends('admin.lang.en.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-left">
	 <div class="col-lg-11">
  <h2 class="heading-ltr">Courses</h2>
  <p>
  <table>
  <tr>
  <th><a href="/admin/courses/create"><button type="button" class="btn btn-success" style="margin: 0 10px 5px 10px;">Add Course</button></a></th>
 <th><a href="/admin/courses/create-group"><button type="button" class="btn btn-warning" style="margin: 0 10px 5px 10px;">Add Course Group</button></a></th>
 </tr>
 </table>
  </p>
  
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">{{Form::checkbox('checkall')}}</th>
      <th scope="col">Course Name</th>
      <th scope="col">Course Number</th>
      <th scope="col">Group</th>
      <th scope="col">Department</th>
      <th scope="col">College</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
   @foreach($courses as $course)
    <tr>
      <th scope="row">{{Form::checkbox('check[]')}}</th>
      <td>{{$course->course_name}}
       <br>
    
{!! Form::open(['method' => 'DELETE', 'action' => ['Admin\AdminCoursesController@destroy', $course->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'course']) !!}
      @if($course->course_group == NULL)
      <a href="courses/{{$course->id}}/edit">Edit &nbsp;</a>
      @else
      <a href="courses/{{$course->id}}/edit-group">Edit &nbsp;</a>
      @endif
      <a href="#" onclick="$(this).closest('form').submit();">Delete</a>
{!! Form::close() !!} 
</td>
     <td>{{$course->course_number}}</td>
     {{-- @if(!empty($course->courseGroup))--}}
     @foreach($courseGroup as $cGroup)
     @if($course->course_group == $cGroup->id)
     <td>{{$cGroup->name}}</td>
     @endif
     @endforeach
     @if($course->course_group == NULL)
     <td>-</td>
     @endif
     <td>{{$course->department->department_name}}</td>
     <td>{{$course->department->college->college_name}}</td>
     <td>{{$course->created_at->format('m/d/Y')}}</td>
    </tr>
    @endforeach
    
    <tr>
  </tbody>
</table>
{{$courses->links()}} 
</div>
  </div>
 </div>
@endsection