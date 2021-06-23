@extends('lang.ar.layouts.app')

@section('content')
@include('lang.ar.inc.menu')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h6 class="float-right">تغيير كلمة السر</h6></div>

                <div class="card-body">
        {!! Form::open(['action'=> ['StudentController@update_password',$student->id] ,'method' => 'PUT']) !!}
   {{Form::password('old_password',['class' => 'form-control', 'placeholder' => 'كلمة السر القديمة'])}}
    <br>
   {{Form::password('new_password',['class' => 'form-control', 'placeholder' => 'كلمة السر الجديدة'])}}
  <br>
   {{Form::password('confirm_password',['class' => 'form-control', 'placeholder' => 'تأكيد كلمة السر'])}}
                <br>
                <div class="float-left">
				{{Form::submit('تغيير',['name' => 'add','class' => 'btn btn-primary'])}}
                </div>
				{!! Form::close() !!}
               
               
                </div>
            </div>
        </div>
    </div>

</div>
<br><br>
@endsection