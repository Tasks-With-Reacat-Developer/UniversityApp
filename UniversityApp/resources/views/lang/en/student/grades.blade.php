@extends('lang.en.layouts.app')

@section('content')
@include('lang.en.inc.menu')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Grades</div>

                <div class="card-body">
               @if(!$student_data_check || $student_data_check->student_status == "New")
               <strong>No data found!</strong>
               @else
                <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Course Name</th>
      <th scope="col">Mid-Term Grade</th>
      <th scope="col">Grade</th>
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
