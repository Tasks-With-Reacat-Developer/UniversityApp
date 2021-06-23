@extends('admin.lang.en.layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2>Edit Page</h2>
  {!! Form::open(['action'=> ['Admin\AdminArticlesController@update', $page->id],'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
   
    {{Form::text('title', $page->title ,['class' => 'form-control', 'placeholder' => 'Article Name'])}}
    <label>Link</label>
    <input type="text" class="form-control" value="http://{{$host}}/pages/{{$page->id}}">
    <br>
   
    {{Form::textarea('content', $page->content ,['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Content'])}}

                 <br>

            <div class="card">
				
                 <div class="card-header">{{ __('Publish') }}</div>
				 
                <div class="card-body">
                <div class="form-group">
                <div class="float-right">
				{{Form::submit('Update',['name' => 'publish','class' => 'btn btn-primary'])}}
                </div>
                <br>
            
                </div>
				{!! Form::close() !!}
                </div>
		
			    </div>	
                </div>	 

	 

@endsection