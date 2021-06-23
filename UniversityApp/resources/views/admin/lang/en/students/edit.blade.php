@extends('admin.lang.en.layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2 class="heading-ltr">Edit Student</h2>
 <div class="card">	
<div class="card-header">{{ __('Edit Student') }}</div>
  {!! Form::open(['action'=>['Admin\AdminStudentsController@update',$student->id],'method' => 'PUT']) !!}

    {{Form::number('student_id',$student->student_id,['class' => 'form-control', 'placeholder' => 'Student ID'])}}
     <br>
     {{Form::text('name',$student->name,['class' => 'form-control', 'placeholder' => 'Name'])}}
    <br>
    {{Form::text('email',$student->email,['class' => 'form-control', 'placeholder' => 'email@email.com'])}}
  <br>
   {{Form::password('password',['class' => 'form-control', 'placeholder' => 'Password'])}}
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

@endsection