@extends('admin.lang.en.layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2>Message</h2>
              <div class="card">
			
                <div class="card-header">{{ __('Message') }}</div>

                <div class="card-body">
                 <div class="form-group">
                 <p>Name: {{$message->name}}</p>
                 <p>Phone: {{$message->phone}}</p>
                 <p>Email: {{$message->email}}</p>
                   </div>
                   <hr>
                   <p> {{$message->content}} </p>
                </div>
                </div>

			    </div>	
                </div>	
                </div> 

	 

@endsection