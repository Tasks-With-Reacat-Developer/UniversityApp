@extends('lang.ar.layouts.app')

@section('content')
<br>
<div class="container">
  <div class="float-right">
  <h1>الاخبار</h1>
  </div>
  <br>
  <br>
  @if(count($articles) > 0)
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
      {{$articles->links()}}
  @else
    <p>لا يوجد اخبار.</p>
  @endif
  </div>
  <br>
@endsection