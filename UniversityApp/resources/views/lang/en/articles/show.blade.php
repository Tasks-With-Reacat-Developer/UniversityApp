 @extends('lang.en.layouts.app')

@section('content')
<div class="container">
 <h2><br>{{$article->title}}</h2>
  <small>written on: {{$article->created_at->format('m/d/Y')}} by SVA</small>
  <hr>
  <div>
  <img height="500px" width="100%" src="/storage/cover_images/{{$article->cover_image}}">
  <br><br>
  {!!$article->content!!}
  </div>
  <hr>
  <br>
  </div>
@endsection