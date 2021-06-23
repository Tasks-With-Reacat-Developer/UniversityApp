@extends('lang.ar.layouts.app')

@section('content')
@include('lang.ar.inc.menu')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h6 class="float-right">الملف الشخصي</h6></div>
                <div class="card-body">
              @if(!$student_data_check)
               <strong>لم يتم ايجاد اي بيانات!</strong>
               @else
                <table>
                <tr>
               <td>أسم الطالب:&nbsp;&nbsp;</td>
               <td>{{Auth::user()->name}}</td>
                </tr>
                <tr>
               <td>الرقم الاكاديمي:&nbsp;&nbsp;</td>
               <td>{{Auth::user()->student_id}}</td>
                </tr>
               <tr>
               <td>القسم:&nbsp;&nbsp;</td>
               <td>{{$department->department_name}}</td>
                </tr>
              <tr>
               <td>عدد الساعات:&nbsp;&nbsp;</td>
               <td>{{$student_n_hours}}</td>
                </tr>
              <tr>
               <td>المستوى:&nbsp;&nbsp;</td>
               <td>{{$student_data->level}}</td>
                </tr>
                </table>
                <br>
                <p style="font-size:20px; float:right;">مواد الطالب</p>
                <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">أسم المادة</th>
      <th scope="col">عدد الساعات</th>
      <th scope="col">رقم المادة</th>
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
