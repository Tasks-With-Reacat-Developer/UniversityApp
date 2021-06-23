<?php
if(Auth::check()){
$student_lang = DB::table('languages')->where('student_id',Auth::user()->id)->first();
?>

@if($student_lang && session('language') == NULL)
@if($student_lang->language == 'en')
@include('lang.en.index')
@elseif($student_lang->language == 'ar')
@include('lang.ar.index')
@endif
@endif
<?php
}
?>


@if(session('language') == 'ar')
@include('lang.ar.index')
@else
@include('lang.en.index')
@endif

