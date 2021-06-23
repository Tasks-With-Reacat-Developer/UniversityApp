@extends('lang.ar.layouts.app')

@section('content')
@include('lang.ar.inc.menu')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h6 class="float-right">المعدل التراكمي</h6></div>

                <div class="card-body">
               @if(!$student_data_check || $student_data->student_status == "New" || $student_data->student_status == "Enrol")
               <strong>لم يتم إيجاد اي بيانات!</strong>
               @else
                 <br><br>
                 <center>
                <h1><span style="color:darkblue">المعدل التراكمي</span> هو</h1>
                @if($student_data->gpa >= 3.0)
                <h1 style="color:green">{{$student_data->gpa}}</h1>
                @endif
                 @if($student_data->gpa >= 2.7 && $student_data->gpa < 3.0)
                <h1 style="color:orange">{{$student_data->gpa}}</h1>
                @endif
                @if($student_data->gpa >= 2.0 && $student_data->gpa < 2.7)
                <h1 style="color:yellow">{{$student_data->gpa}}</h1>
                @endif
                @if($student_data->gpa < 2.0)
                <h1 style="color:red">{{$student_data->gpa}}</h1>
                @endif
                </center>
                 <br><br>
                 @endif
                </div>
            </div>
        </div>
    </div>
@if(!$student_data_check || $student_data->student_status == "New" || $student_data->student_status == "Enrol")
@for($i=0; $i<=10; $i++)
 <br>
@endfor
@endif
</div>
<br><br>
@endsection
