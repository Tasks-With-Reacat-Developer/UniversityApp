 @extends('lang.ar.layouts.app')

@section('content')
<div class="container">
 <h2 class="float-right" style="clear:right;"><br>{{$page->title}}</h2>
    <br>  <br>   <br>
  <hr style="clear:right;">
  <div>
  {!!$page->content!!}
  </div>
  <hr>
  <br>
  </div>
@endsection