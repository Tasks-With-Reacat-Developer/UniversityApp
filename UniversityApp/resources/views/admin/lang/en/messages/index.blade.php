@extends('admin.lang.en.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
	 <div class="col-lg-11">
  <h2 class="heading-ltr">Messages</h2>
  <p>
  <table>
  <tr>
<th>@for($i=0; $i<=59; $i++) &nbsp; @endfor</th>
{!! Form::open(['action' => 'Admin\AdminMessagesController@store','method' => 'POST' , 'class' => 'card card-sm float-right']) !!}
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
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
  
   @foreach($messages as $message)
    <tr>
      <td><a href="/admin/messages/{{$message->id}}"> {{$message->name}}</a>
       <br>
     {!! Form::open(['method' => 'DELETE', 'action' => ['Admin\AdminMessagesController@destroy', $message->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'message']) !!}
      <a href="#" onclick="$(this).closest('form').submit();">Delete</a>
      {!! Form::close() !!} 
      </td>
      <td>{{$message->phone}}</td>
      <td>{{$message->email}}</td>
      <td>{{$message->created_at->format('m/d/Y')}}</td>
    </tr>
   
    @endforeach
   
  </tbody>
</table>
</div>
  </div>
 </div>
<div>{{$messages->links()}}</div>
@endsection