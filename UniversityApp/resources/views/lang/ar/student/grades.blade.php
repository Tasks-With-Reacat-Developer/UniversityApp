@extends('lang.ar.layouts.app')

@section('content')
@include('lang.ar.inc.menu')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">الدرجات</div>

                <div class="card-body">
               @if(!$student_data_check || $student_data_check->student_status == "New")
               <strong>لم يتم إيجاد أي بيانات!</strong>
               @else
                <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">أسم المادة</th>
      <th scope="col">درجة ال Mid-Term</th>
      <th scope="col">درجة ال Final</th>
    </tr>
  </thead>
  <tbody>
  @for($i=0; $i<count($student_cs_name); $i++)
  <tr>
  <td>{{$student_cs_name[$i]}}</td>
  <td>{{$student_courses[$i]->mid_term_grade}}</td>
  @if(!$student_data_check->student_status == "Enrol")
  <td>{{$student_gardes[$i]}}</td>
  @endif
  </tr>
  @endfor
  </tbody>
</table>
@endif
                </div>
            </div>
        </div>
    </div>
@if(!$student_data_check || $student_data_check->student_status == "New")
@for($i=0; $i<=10; $i++)
 <br>
@endfor
@endif
</div>
<br><br>
@endsection
