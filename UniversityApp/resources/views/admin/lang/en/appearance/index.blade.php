@extends('admin.lang.en.layouts.app')

@section('content')
<?php
     $used_pages = array();
      $x = 0;
      $count = 0;
      $c = 0;
      function is_exists($arg , $arr){
          for($s=0; $s<count($arr); $s++){
              if($arg == $arr[$s]){
                  return true;
              }
          }
          return false;
      }
?>
<div class="container">
    <div class="row justify-content-left">
	 <div class="col-lg-11">
  <h2 class="heading-ltr">Appearance</h2>
  <p>
  <table>
  <tr>
  <th>
  <h4>Navbar</h4>
</th>
<th>@for($i=0; $i<=105; $i++) &nbsp; @endfor</th>
<th><a href="/admin/appearance/page/create">Add Page</a></th>
</tr>
</table>
</p>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Page</th>
      <th scope="col">Type</th>
      <th scope="col">Language</th>
    </tr>
  </thead>
  <tbody>
  @foreach($pages as $page)
  @if($page->type != "multi")
    <tr>
      <td>
       {{$page->page_title}}
       <br>
     {!! Form::open(['method' => 'DELETE', 'action' => ['Admin\AdminAppearanceController@destroy', $page->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'page']) !!}
      <a href="appearance/page/{{$page->id}}/edit">Edit &nbsp;</a>
      <a href="#" onclick="$(this).closest('form').submit();"> &nbsp;Delete</a>
      {!! Form::close() !!} 
      </td>
      @if($page->type == NULL)
      <td>-</td>
      @else
      <td>{{$page->type}}</td>
      @endif
      <td>{{$page->language}}</td>
    </tr>
    @else
    @if(!empty($multilinks[$c])  && $page->nav_id == $multilinks[$c]->id)

    <tr>
      <td>
       {{$multilinks[$c]->title}}
       <br>
     {!! Form::open(['method' => 'DELETE', 'action' => ['Admin\AdminAppearanceController@destroy', $page->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'page']) !!}
      <a href="appearance/page/{{$page->id}}/edit">Edit &nbsp;</a>
      <a href="#" onclick="$(this).closest('form').submit();"> &nbsp;Delete</a>
      {!! Form::close() !!} 
      </td>
      <td>{{$page->type}}</td>
      <td>{{$page->language}}</td>
    </tr>
    <?php

    $c++;
    ?>
    @endif
    @endif
    @endforeach

  </tbody>
</table>
<br>
<h4>Brief About College</h4>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Language</th>
    </tr>
  </thead>
  <tbody>
   <tr>
  <td>Brief About College
   @if($brief_en)
   <a href="/admin/appearance/brief/en/{{$brief_en->id}}/edit">Edit</a>
   @else
   <a href="/admin/appearance/brief/en/create">Add</a>
   @endif
  </td>
  <td>English</td>
   </tr>
   <tr>
  <td>Brief About College
     @if($brief_ar)
   <a href="/admin/appearance/brief/ar/{{$brief_ar->id}}/edit">Edit</a>
   @else
   <a href="/admin/appearance/brief/ar/create">Add</a>
   @endif
  </td>
  <td>Arabic</td>
   </tr>
    </tbody>
</table>
<br>
<h4>Dean</h4>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Language</th>
    </tr>
  </thead>
  <tbody>
  <tr>
  <td>Dean's Speech
     @if($dean_en)
   <a href="/admin/appearance/dean/en/{{$dean_en->id}}/edit">Edit</a>
   @else
   <a href="/admin/appearance/dean/en/create">Add</a>
   @endif
  </td>
  <td>English</td>
   </tr>
     <tr>
  <td>Dean's Speech
   @if($dean_ar)
   <a href="/admin/appearance/dean/ar/{{$dean_ar->id}}/edit">Edit</a>
   @else
   <a href="/admin/appearance/dean/ar/create">Add</a>
   @endif
  </td>
  <td>Arabic</td>
   </tr>
    </tbody>
</table>
<br>
<h4>Other</h4>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Language</th>
    </tr>
  </thead>
  <tbody>
     <tr>
  <td>Goals
    @if($goals_en)
   <a href="/admin/appearance/goals/en/{{$goals_en->id}}/edit">Edit</a>
   @else
   <a href="/admin/appearance/goals/en/create">Add</a>
   @endif
  </td>
  <td>English</td>
   </tr>
        <tr>
  <td>Goals
    @if($goals_ar)
   <a href="/admin/appearance/goals/ar/{{$goals_ar->id}}/edit">Edit</a>
   @else
   <a href="/admin/appearance/goals/ar/create">Add</a>
   @endif
  </td>
  <td>Arabic</td>
   </tr>
        <tr>
  <td>The Message
   @if($message_en)
   <a href="/admin/appearance/message/en/{{$message_en->id}}/edit">Edit</a>
   @else
   <a href="/admin/appearance/message/en/create">Add</a>
   @endif
  </td>
  <td>English</td>
   </tr>
        <tr>
  <td>The Message
   @if($message_ar)
   <a href="/admin/appearance/message/ar/{{$message_ar->id}}/edit">Edit</a>
   @else
   <a href="/admin/appearance/message/ar/create">Add</a>
   @endif
  </td>
  <td>Arabic</td>
   </tr>
        <tr>
  <td>Future Vision
   @if($future_vision_en)
   <a href="/admin/appearance/future-vision/en/{{$future_vision_en->id}}/edit">Edit</a>
   @else
   <a href="/admin/appearance/future-vision/en/create">Add</a>
   @endif
  </td>
  <td>English</td>
   </tr>
        <tr>
  <td>Future Vision
    @if($future_vision_ar)
   <a href="/admin/appearance/future-vision/ar/{{$future_vision_ar->id}}/edit">Edit</a>
   @else
   <a href="/admin/appearance/future-vision/ar/create">Add</a>
   @endif
  </td>
  <td>Arabic</td>
   </tr>
    </tbody>
</table>
</div>
  </div>
 </div>
@endsection