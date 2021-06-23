@extends('lang.en.layouts.app')

@section('content')
@include('lang.en.inc.menu')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Profile</div>
                <div class="card-body">
              @if(!$student_data_check)
               <strong>No data found!</strong>
               @else
                <table>
                <tr>
               <td>Student Name:&nbsp;&nbsp;</td>
               <td>{{Auth::user()->name}}</td>
                </tr>
                <tr>
               <td>Student ID:&nbsp;&nbsp;</td>
               <td>{{Auth::user()->student_id}}</td>
                </tr>
               <tr>
               <td>Department:&nbsp;&nbsp;</td>
               <td>{{$department->department_name}}</td>
                </tr>
              <tr>
               <td>NO. Hours:&nbsp;&nbsp;</td>
               <td>{{$student_n_hours}}</td>
                </tr>
              <tr>
               <td>Level:&nbsp;&nbsp;</td>
               <td>{{$student_data->level}}</td>
                </tr>
                </table>
                <br>
                <p style="font-size:20px">Your Courses</p>
                <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Course Name</th>
      <th scope="col">NO. Hours</th>
      <th scope="col">Course Number</th>
    </tr>
  </thead>
  <tbody>
  @for($i=0; $i<count($student_cs_name); $i++)
  <tr>
  <td>{{$student_cs_name[$i]}}</td>
  <td>{{$student_cs_hours[$i]}}</td>
  <td>{{$student_cs_number[$i]}}</td>
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
