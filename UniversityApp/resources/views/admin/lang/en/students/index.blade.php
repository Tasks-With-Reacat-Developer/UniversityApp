@extends('admin.lang.en.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-left">
	 <div class="col-lg-11">
  <h2 class="heading-ltr">Students</h2>
  <p>
  <a href="/admin/students/create"><button type="button" class="btn btn-success" style="margin: 0 10px 5px 10px;">Add Student</button></a>
  </p>
  
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Student Name</th>
      <th scope="col">Student ID</th>
    </tr>
  </thead>
  <tbody>
   @foreach($students as $student)
    <tr>
     <td>{{$student->name}}
       <br>

{!! Form::open(['method' => 'DELETE', 'action' => ['Admin\AdminStudentsController@destroy', $student->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'student']) !!}
      <a href="students/{{$student->id}}/edit">Edit &nbsp;</a>
      @if(DB::table('student_data')->where('student_id',$student->id)->first())
      <a href="students/{{$student->id}}/edit-student-data">Edit Student Data &nbsp;</a>
      @else
      <a href="students/{{$student->id}}/create-student-data">Add Student Data &nbsp;</a>
      @endif
      <a href="#" onclick="$(this).closest('form').submit();">Delete</a>
{!! Form::close() !!} 
</td>
      <td>{{$student->student_id}}</td>
    </tr>
    @endforeach
    
    <tr>
  </tbody>
</table>
</div>
  </div>
 </div>
@endsection