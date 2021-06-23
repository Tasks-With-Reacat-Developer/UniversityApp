@extends('lang.ar.layouts.app')

@section('content')
@include('lang.ar.inc.menu')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h6 class="float-right">جدول المحاضرات</h6></div>

                <div class="card-body">
               @if(!$student_data_check)
               <strong>لم يتم إيجاد اي بيانات!</strong>
               @else
        @if($lec_schedules[0]->semester_no == 1)
       <p style="font-size:20px; float:right;">جدول محاضرات الترم الاول</p>
        @else
       <p style="font-size:20px; float:right;">جدول محاضرات الترم الثاني</p>
        @endif
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">اليوم/الساعة</th>
      <th scope="col">9:00 إلي 11:00</th>
      <th scope="col">11:30 إلي 1:30</th>
      <th scope="col">2:00 إلي 4:00</th>
    </tr>
  </thead>
  <tbody>
  <?php
 $days = array('Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday');
 $days_ar = array('السبت','الأحد','الأثنين','الثلاثاء','الاربعاء','الخميس');
 $times = array('9:00','11:30','2:00');
 $t = 0;
  ?>
 @for($i=0; $i<6; $i++)
    <tr>
      <th scope="row">{{$days_ar[$i]}}</th>
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
      <small>د/ {{$lec_sh->professor_name}}<small>
      @else
      <small>أ/ {{$lec_sh->instructor_name}}<small>
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
