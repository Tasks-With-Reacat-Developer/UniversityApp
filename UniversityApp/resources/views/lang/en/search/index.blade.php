@extends('lang.en.layouts.app')

@section('content')
<br>
<div class="container">
  <h1>@if($articles == NULL) 0 @else {{count($articles)}} @endif Search Results Found..</h1>
  <br>
  @if(count($articles) != 0)
    @foreach($articles as $article)
      <div class="card card-body bg-light">
      <div class="row">
        <div class="col-md-4 col-sm-4">
         <img height="170px" width="290px" src="/storage/cover_images/{{$article->cover_image}}">
          </div>
          <div class="col-md-8 col-sm-8">
        <h3><a href="/news/{{$article->id}}">{{$article->title}}</a></h3>
        <small>written on: {{$article->created_at}} by SVA</small>
      </div>
     </div>
     </div>
     <br>
      @endforeach
  @else
    <p>No Search Results Found.</p>
  @endif
  </div>
  <br>
@endsection