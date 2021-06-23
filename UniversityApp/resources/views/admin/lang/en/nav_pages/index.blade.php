@extends('admin.lang.en.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
	 <div class="col-lg-11">
  <h2 class="heading-ltr">Pages</h2>
  <p>
  <table>
  <tr>
  <th>
  <a href="/admin/pages/create"><button type="button" class="btn btn-success" style="margin: 0 300px 5px 10px;">Add New</button></a>
</th>
<th>@for($i=0; $i<=39; $i++) &nbsp; @endfor</th>
<form method="GET" action="{{ url('/admin/pages/search') }}" class="card card-sm">
<th>
<input type="text" name="query" class="form-control" placeholder="Search Articles"/>
</th>
<th>
<input type="submit" value="Search" class="btn btn-outline-secondary float-right"/>
</th>
</form>
</tr>
</table>
</p>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
   @foreach($pages as $page)
    <tr>
      <td>{{$page->title}}
       <br>
     {!! Form::open(['method' => 'DELETE', 'action' => ['Admin\AdminPagesController@destroy', $page->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'article']) !!}
      <a href="pages/{{$page->id}}/edit">Edit &nbsp;</a>
      <a href="#" onclick="$(this).closest('form').submit();"> &nbsp;Delete</a>
      {!! Form::close() !!} 
      </td>
      <td>{{$page->created_at->format('m/d/Y')}}</td>
    </tr>
    @endforeach
    <tr>
  </tbody>
</table>
</div>
  </div>
 </div>
<div>{{$pages->links()}}</div>
@endsection