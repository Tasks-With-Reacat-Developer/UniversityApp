@extends('lang.en.layouts.app')

@section('content')
@include('lang.en.inc.menu')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Change Password</div>

                <div class="card-body">
        {!! Form::open(['action'=> ['StudentController@update_password',$student->id] ,'method' => 'PUT']) !!}
   {{Form::password('old_password',['class' => 'form-control', 'placeholder' => 'old Password'])}}
    <br>
   {{Form::password('new_password',['class' => 'form-control', 'placeholder' => 'New Password'])}}
  <br>
   {{Form::password('confirm_password',['class' => 'form-control', 'placeholder' => 'Confirm Password'])}}
                <br>
                <div class="float-right">
				{{Form::submit('Update',['name' => 'add','class' => 'btn btn-primary'])}}
                </div>
				{!! Form::close() !!}
               
               
                </div>
            </div>
        </div>
    </div>

</div>
<br><br>
@endsection