@extends('lang.ar.layouts.app')

@section('content')
<br>
<div class="container">
  <h1 style="text-align:right">@if($articles == NULL) <span>0</span> @else {{count($articles)}} @endif نتائج بحث</h1>
  <br>
  @if(count($articles) != 0)
  @foreach($articles as $article)
  <div class="card card-body bg-light">
  <div class="row">
    <div class="col-md-4 col-sm-4">
     <img height="170px" width="290px" src="/storage/cover_images/{{$article->cover_image}}">
      </div>
      <div class="col-md-8 col-sm-8">
    <h3 class="float-right" style="clear:right;"><a href="/news/{{$article->id}}">{{$article->title}}</a></h3>
    <small class="float-right" style="clear:right;">كتب في: {{$article->created_at}} بواسطة SVA</small>
  </div>
 </div>
 </div>
 <br>
  @endforeach
  
  @else
    <p style="text-align:right">لا يوجد نتائج بحث.</p>
  @endif
  </div>
  <br>
@endsection