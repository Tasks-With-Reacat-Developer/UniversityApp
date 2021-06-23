@extends('admin.lang.en.layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2 class="heading-ltr">Edit College</h2>
 <div class="card">	
<div class="card-header">{{ __('Edit College') }}</div>
  {!! Form::open(['action'=>['Admin\AdminCollegesController@update', $college->id],'method' => 'PUT']) !!}
   
    {{Form::text('college_name', $college->college_name ,['class' => 'form-control', 'placeholder' => 'College Name'])}}
    <br>
   
    {{Form::number('levels', $college->levels ,['class' => 'form-control', 'placeholder' => 'Levels'])}}

                <div class="card-body">
                <div class="float-right">
				{{Form::submit('Update',['name' => 'update','class' => 'btn btn-primary'])}}
                </div>
                </div>
				{!! Form::close() !!}
            
    </div>
    </div>	
    </div>
    </div> 


@endsection