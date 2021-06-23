@extends('admin.lang.en.layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2>Create Page</h2>
  {!! Form::open(['action'=>'Admin\AdminPagesController@store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
   
    {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Page Name'])}}
    <br>
   
    {{Form::textarea('content','',['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Content'])}}

                 <br>

                <div class="card">
				
                 <div class="card-header">{{ __('Publish') }}</div>
				 
                <div class="card-body">
                  <br>
                 <div class="float-right">
				{{Form::submit('Publish',['name' => 'publish','class' => 'btn btn-primary'])}}
                </div>
                <br>
            
                </div>
                </div>
				{!! Form::close() !!}
                </div>
		
			    </div>	
                </div>	 

	 

@endsection