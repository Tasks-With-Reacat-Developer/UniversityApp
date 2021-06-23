@extends('lang.en.layouts.app')

@section('content')
@include('lang.en.inc.menu')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Exam Schedule</div>

                <div class="card-body">
               @if(!$student_data_check || count($exam_schedules) == NULL)
               <strong>No data found!</strong>
               @else
 <?php
function is_exists($arg , $arr){
  for($s=0; $s<count($arr); $s++){
      if($arg == $arr[$s]){
         return true;
         }
      }
  return false;
  }

 $days = array('Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday');
 $temp = array();
 $count = 0;
 foreach($exam_schedule as $exSchedule){
  $temp[$count++] = $exSchedule->time_from;
 }

sort($temp);

$times = array();
$index = 0;

for($r=0; $r<count($temp); $r++){
if(!is_exists($temp[$r],$times)){
    $times[$index++] = $temp[$r];
}
}

 $t = 0;
 $d_courses = array();
 $counts = 0;

  ?>
        @if(count($exam_schedules) != NULL)
        @if($exam_schedules[0]->semester_no == 1)
       <p style="font-size:20px">Your First Semester Schedule</p>
        @else
       <p style="font-size:20px">Your Second Semester Schedule</p>
        @endif
        @endif
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Day/Time</th>
      @for($i=0; $i<count($times); $i++)
      @foreach($exam_schedule as $exam_sh)
      @if($times[$i] == $exam_sh->time_from)
      <th scope="col">{{$times[$i]}} To {{$exam_sh->time_to}}</th>
      @break
      @endif
      @endforeach
      @endfor
    </tr>
  </thead>
  <tbody>

 @for($i=0; $i<6; $i++)
    <tr>
      <th scope="row">{{$days[$i]}}</th>
    @for($y=0; $y<count($times); $y++)
      <td>
    @foreach($student_course as $st_course)
    @foreach($exam_schedule as $exam_sh)
   @if($st_course->course_status != 'Deactived')
    @if($st_course->grade == NULL)
   @if($exam_sh->course_name == $st_course->course_name)
      @if($exam_sh->day == $days[$i])
      @if($exam_sh->time_from == $times[$y])
      {{$exam_sh->course_name}}
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
@if(!$student_data_check || count($exam_schedules) == NULL)
@for($i=0; $i<=10; $i++)
 <br>
@endfor
@endif
</div>
<br><br>
@endsection