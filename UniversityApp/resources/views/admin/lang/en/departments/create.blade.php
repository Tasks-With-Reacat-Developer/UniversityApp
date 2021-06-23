@extends('admin.lang.en.layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2 class="heading-ltr">Add Department</h2>
 <div class="card">	
<div class="card-header">{{ __('Add Department') }}</div>
  {!! Form::open(['action'=>'Admin\AdminDepartmentsController@store','method' => 'POST']) !!}
    {!! Form::select('college_id', $select, null, ['class'=>'form-control']) !!}
        <br>
    {{Form::text('department_name','',['class' => 'form-control', 'placeholder' => 'Department Name'])}}

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


@endsection