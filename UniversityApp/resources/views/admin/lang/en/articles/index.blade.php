@extends('admin.lang.en.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
	 <div class="col-lg-11">
  <h2 class="heading-ltr">Articles</h2>
  <p>
  <table>
  <tr>
  <th>
  <a href="/admin/articles/create"><button type="button" class="btn btn-success" style="margin: 0 10px 5px 10px;">Add New</button></a>
</th>
<th>@for($i=0; $i<=39; $i++) &nbsp; @endfor</th>
{!! Form::open(['action' => 'Admin\AdminArticlesController@store','method' => 'POST' , 'class' => 'card card-sm float-right']) !!}
  <th>
  {{Form::text('searchArticles','',['class' => 'form-control', 'placeholder' => 'search'])}}
  </th>
  <th>
{{Form::submit('Search',['class' => 'btn btn-outline-secondary float-right'])}}
  </th>
  {!! Form::close() !!}
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
   @foreach($articles as $article)
    <tr>
      <td>{{$article->title}}
       <br>
     {!! Form::open(['method' => 'DELETE', 'action' => ['Admin\AdminArticlesController@destroy', $article->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'article']) !!}
      <a href="articles/{{$article->id}}/edit">Edit &nbsp;</a>
      <a href="#" onclick="$(this).closest('form').submit();"> &nbsp;Delete</a>
      {!! Form::close() !!} 
      </td>
      <td>{{$article->created_at->format('m/d/Y')}}</td>
    </tr>
    @endforeach
    <tr>
  </tbody>
</table>
</div>
  </div>
 </div>
<div>{{$articles->links()}}</div>
@endsection