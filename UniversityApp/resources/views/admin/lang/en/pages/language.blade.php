@extends('admin.lang.en.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-left">
	 <div class="col-lg-11">
<h2 class="heading-ltr">Language</h2>
{!! Form::open(['action' => 'Admin\AdminLangController@store','method' => 'POST']) !!}
<div class="form-group" style="margin: 10px 0px 0px 10px;">
{{Form::label('language','Choose Language:')}}
{{ Form::select('language', ['en' => 'English', 'ar' => 'العربية'], 'en', ['class' => 'form-control']) }}
<br>
{{ Form::submit('Save',['class' => 'btn btn-primary']) }}
</div>
 {!! Form::close() !!} 
 </div>
 </div>
 </div>
@endsection