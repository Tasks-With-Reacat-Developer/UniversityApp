@extends('admin.lang.en.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-left">
	 <div class="col-lg-11">
  <h2 class="heading-ltr">Users</h2>
  <p>
  <th><a href="/admin/users/create"><button type="button" class="btn btn-success" style="margin: 0 10px 5px 10px;">Add User</button></a></th>
  </p>
  
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">{{Form::checkbox('checkall')}}</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
   @foreach($adminusers as $adminuser)
    <tr>
      <th scope="row">{{Form::checkbox('check[]')}}</th>
      <td>{{$adminuser->userName}}
       <br>
    
{!! Form::open(['method' => 'DELETE', 'action' => ['Admin\AdminAuth\AdminRegisterController@destroy', $adminuser->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'course']) !!}
      <a href="users/{{$adminuser->id}}/edit">Edit &nbsp;</a>
      <a href="#" onclick="$(this).closest('form').submit();">Delete</a>
{!! Form::close() !!} 
</td>

     <td>{{$adminuser->email}}</td>
    </tr>
    @endforeach
    <tr>
  </tbody>
</table>
</div>
  </div>
 </div>
@endsection