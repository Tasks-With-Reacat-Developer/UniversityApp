@extends('lang.en.layouts.app')

@section('content')
@include('lang.en.inc.menu')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Lectures Schedule</div>

                <div class="card-body">
               @if(!$student_data_check)
               <strong>No data found!</strong>
               @else
        @if($lec_schedules[0]->semester_no == 1)
       <p style="font-size:20px">Your First Semester Schedule</p>
        @else
       <p style="font-size:20px">Your Second Semester Schedule</p>
        @endif
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Day/Time</th>
      <th scope="col">9:00 To 11:00</th>
      <th scope="col">11:30 To 1:30</th>
      <th scope="col">2:00 To 4:00</th>
    </tr>
  </thead>
  <tbody>
  <?php
 $days = array('Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday');
 $times = array('9:00','11:30','2:00');
 $t = 0;
  ?>
 @for($i=0; $i<6; $i++)
    <tr>
      <th scope="row">{{$days[$i]}}</th>
    @for($y=0; $y<3; $y++)
      <td>
    @foreach($student_course as $st_course)
    @foreach($lec_schedule as $lec_sh)
    @if($st_course->course_status != 'Deactived')
    @if($st_course->grade == NULL)
   @if($lec_sh->course_name == $st_course->course_name)
      @if($lec_sh->day == $days[$i])
      @if($lec_sh->time_from == $times[$y])
      {{$lec_sh->course_name}}
      <br>
      @if($lec_sh->professor_name != NULL)
      <small>Ph.D/ {{$lec_sh->professor_name}}<small>
      @else
      <small>INST/ {{$lec_sh->instructor_name}}<small>
      @endif
      @endif
      @endif
      @endif
      @endif
      @endif
      @endforeach
      @endforeach
      </td>
      @endfor
    </tr>
    @endfor
  </tbody>
</table>     
@endif
                </div>
            </div>
        </div>
    </div>
@if(!$student_data_check)
@for($i=0; $i<=10; $i++)
 <br>
@endfor
@endif
</div>
<br><br>
@endsection
