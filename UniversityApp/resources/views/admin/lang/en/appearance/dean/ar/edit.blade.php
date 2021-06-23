@extends('admin.lang.en.layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2>Edit Dean's Speech</h2>
  {!! Form::open(['action'=>['Admin\AdminAppearanceController@updateDean', $dean->id],'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
   
    {{Form::text('title', $dean->title ,['class' => 'form-control', 'placeholder' => 'Brief Title'])}}
    <br>
   
    {{Form::textarea('content', $dean->content ,['class' => 'form-control', 'placeholder' => 'Content'])}}
     <input type="hidden" name="language" value="ar">
         <br>
                 <div class="float-right">
				{{Form::submit('Update',['name' => 'update','class' => 'btn btn-primary'])}}
                <br> <br> <br>
            
                </div>
				{!! Form::close() !!}
                </div>
			    </div>	
                </div>	 

	 

@endsection