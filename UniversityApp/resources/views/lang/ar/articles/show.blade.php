 @extends('lang.ar.layouts.app')

@section('content')
<div class="container">
 <h2 class="float-right" style="clear:right;"><br>{{$article->title}}</h2>
  <small class="float-right" style="clear:right;">كتب في: {{$article->created_at->format('m/d/Y')}} بواسطة SVA</small>
  <hr style="clear:right">
  <div>
  <img height="500px" width="100%" src="/storage/cover_images/{{$article->cover_image}}">
  <br><br>
  {!!$article->content!!}
  </div>
  <hr>
  <br>
  </div>
@endsection