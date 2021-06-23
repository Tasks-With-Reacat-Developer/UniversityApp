@extends('admin.lang.en.layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2>Create Article</h2>
  {!! Form::open(['action'=>'Admin\AdminArticlesController@store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
   
    {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Article Name'])}}
    <br>
   
    {{Form::textarea('content','',['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Content'])}}

                 <br>

              <div class="card">
			
                <div class="card-header">{{ __('Cover Image') }}</div>

                <div class="card-body">
                 <div class="form-group">
                  {{Form::file('cover_image')}}
                   </div>

                </div>
                </div>

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