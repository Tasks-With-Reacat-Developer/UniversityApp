@extends('admin.lang.en.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-left">
	 <div class="col-lg-11">
  <h2 class="heading-ltr">Colleges</h2>
  <p>
  <a href="/admin/colleges/create"><button type="button" class="btn btn-success" style="margin: 0 10px 5px 10px;">Add College</button></a>
  </p>
  
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">{{Form::checkbox('checkall')}}</th>
      <th scope="col">College Name</th>
      <th scope="col">Levels</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
   @foreach($colleges as $college)
    <tr>
      <th scope="row">{{Form::checkbox('check[]')}}</th>
      <td>{{$college->college_name}}
       <br>

{!! Form::open(['method' => 'DELETE', 'action' => ['Admin\AdminCollegesController@destroy', $college->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'college']) !!}
      <a href="colleges/{{$college->id}}/edit">Edit &nbsp;</a>
      <a href="#" onclick="$(this).closest('form').submit();">Delete</a>
{!! Form::close() !!} 
</td>
      <td>{{$college->levels}}</td>
      <td>{{$college->created_at->format('m/d/Y')}}</td>
    </tr>
    @endforeach
    <tr>
  </tbody>
</table>
</div>
  </div>
 </div>
@endsection