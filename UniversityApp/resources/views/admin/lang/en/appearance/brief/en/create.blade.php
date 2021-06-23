@extends('admin.lang.en.layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2>Add Brief</h2>
  {!! Form::open(['action'=>'Admin\AdminAppearanceController@storeBrief','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
   
    {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Brief Title'])}}
    <br>
   
    {{Form::textarea('content','',['class' => 'form-control', 'placeholder' => 'Content'])}}
     <input type="hidden" name="language" value="en">
         <br>
                 <div class="float-right">
				{{Form::submit('Add',['name' => 'add','class' => 'btn btn-primary'])}}
                <br> <br> <br>
            
                </div>
				{!! Form::close() !!}
                </div>
			    </div>	
                </div>	 

	 

@endsection