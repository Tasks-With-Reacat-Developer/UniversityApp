<?php
if(Auth::check()){
$student_lang = DB::table('languages')->where('student_id',Auth::user()->id)->first();
?>
@if($student_lang && session('language') == NULL)
@if($student_lang->language == 'en')
@include('lang.en.student.home')
@elseif($student_lang->language == 'ar')
@include('lang.ar.student.home')
@endif
@endif
<?php
}
?>

@if(session('language') == 'en')
@include('lang.en.student.home')
@else
@include('lang.ar.student.home')
@endif
