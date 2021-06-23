@extends('admin.lang.en.layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2 class="heading-ltr">Add College</h2>
 <div class="card">	
<div class="card-header">{{ __('Add College') }}</div>
  {!! Form::open(['action'=>'Admin\AdminCollegesController@store','method' => 'POST']) !!}
   
    {{Form::text('college_name','',['class' => 'form-control', 'placeholder' => 'College Name'])}}
    <br>
   
    {{Form::number('levels','',['class' => 'form-control', 'placeholder' => 'Levels'])}}

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