@extends('admin.lang.en.layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2>Edit Goals</h2>
  <div class="card">
 <div class="card-body">
  {!! Form::open(['action'=>['Admin\AdminAppearanceController@updateMessage', $message->id],'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
   <br>
    {{Form::textarea('content', $message->content ,['class' => 'form-control', 'placeholder' => 'Content'])}}
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
			    </div>	
                </div>	 

	 

@endsection