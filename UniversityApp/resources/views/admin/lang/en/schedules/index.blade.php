@extends('admin.lang.en.layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-left">
	 <div class="col-lg-11">
  <h2 class="heading-ltr">Schedules</h2>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Schedule Name</th>
    </tr>
  </thead>
  <tbody>
 <tr>
<td>Lectures Schedule
<br>
@if($lecSchedule)
<a href="schedules/{{$lecSchedule->id}}/edit-lec-schedule">Edit &nbsp;</a>
@else
<a href="schedules/create-lec-schedule">Add &nbsp;</a>
@endif
</td>

 </tr>
 <tr>
<td>Exams Schedule
<br>
@if($examSchdule)
<a href="schedules/{{$examSchdule->id}}/edit-exam-schedule">Edit &nbsp;</a>
@else
<a href="schedules/create-exam-schedule">Add &nbsp;</a>
@endif
</td>
 </tr>
  </tbody>
</table>
</div>
  </div>
 </div>

@endsection