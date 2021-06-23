@extends('admin.lang.en.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-left">
	 <div class="col-lg-11">
  <h2 class="heading-ltr">Departments</h2>
  <p>
  <a href="/admin/departments/create"><button type="button" class="btn btn-success" style="margin: 0 10px 5px 10px;">Add Department</button></a>
  </p>
  
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">{{Form::checkbox('checkall')}}</th>
      <th scope="col">Department Name</th>
      <th scope="col">College</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
   @foreach($departments as $department)
    <tr>
      <th scope="row">{{Form::checkbox('check[]')}}</th>
      <td>{{$department->department_name}}
       <br>

{!! Form::open(['method' => 'DELETE', 'action' => ['Admin\AdminDepartmentsController@destroy', $department->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'department']) !!}
      <a href="departments/{{$department->id}}/edit">Edit &nbsp;</a>
      <a href="#" onclick="$(this).closest('form').submit();">Delete</a>
{!! Form::close() !!} 
</td>
      <td>{{$department->college->college_name}}</td>
      <td>{{$department->created_at->format('m/d/Y')}}</td>
    </tr>
    @endforeach
    
    <tr>
  </tbody>
</table>
  {{$departments->links()}}
</div>
  </div>
 </div>
@endsection