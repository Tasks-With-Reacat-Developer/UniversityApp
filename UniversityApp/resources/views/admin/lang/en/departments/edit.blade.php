@extends('admin.lang.en.layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2 class="heading-ltr">Edit Department</h2>
 <div class="card">	
<div class="card-header">{{ __('Edit Department') }}</div>
  {!! Form::open(['action'=>['Admin\AdminDepartmentsController@update', $department->id],'method' => 'PUT']) !!}
<select id="college_id" name="college_id" class="form-control">
  @foreach($colleges as $college)
  <option value="{{$college->id}}" @if($college->id == $department->college_id) selected @endif>{{$college->college_name}}</option>
  @endforeach
</select>        <br>
    <input type="text" name="department_name" value="{{$department->department_name}}" class="form-control" placeholder="Department Name">
                <div class="card-body">
                <div class="float-right">
        <input type="submit" name="update" value="Update" class="btn btn-primary">
                </div>
                </div>
        {!! Form::close() !!}
            
    </div>
    </div>	
    </div>
    </div> 


@endsection