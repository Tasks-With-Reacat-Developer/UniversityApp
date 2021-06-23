 @extends('lang.en.layouts.app')

@section('content')
<div class="container">
 <h2><br>{{$page->title}}</h2>
  <hr>
  <div>
  {!!$page->content!!}
  </div>
  <hr>
  <br>
  </div>
@endsection