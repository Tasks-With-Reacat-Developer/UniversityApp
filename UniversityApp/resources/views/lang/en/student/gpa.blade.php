@extends('lang.en.layouts.app')

@section('content')
@include('lang.en.inc.menu')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">GPA</div>

                <div class="card-body">
               @if(!$student_data_check || $student_data->student_status == "New" || $student_data->student_status == "Enrol")
               <strong>No data found!</strong>
               @else
                 <br><br>
                 <center>
                <h1>Your <span style="color:darkblue">GPA</span> is</h1>
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
