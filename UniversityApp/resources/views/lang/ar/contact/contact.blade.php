<!DOCTYPE html>
{{-- make a table for that hold language in database later. --}}
<html lang="{{ Session::get('language') }}" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>معهد تكنولوجيا المعلومات - أتصل بنا</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/png" href="{{asset('logo/sva.png')}}"/>
   <link href="{{asset('https://fonts.googleapis.com/css?family=Rubik:300,400,500')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('ft/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('ft/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('ft/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('ft/fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('ft/fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('ft/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('ft/css/magnific-popup.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('ft/Login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('ft/Login/vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('ft/Login/vendor/animsition/css/animsition.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('ft/Login/vendor/select2/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('ft/Login/vendor/daterangepicker/daterangepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('ft/Login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('ft/Login/css/main.css')}}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('ft/css/style.css')}}">
</head>
<body>
   @include('lang.ar.inc.header')
    <section class="site-section element-animate">
      <div class="container">
        <div class="row">
          <div class="col-md-8 pr-md-5">
          {!! Form::open(['action'=> 'Admin\AdminMessagesController@store' ,'method' => 'POST']) !!}
                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="name">الاسم</label>
                      <input type="text" id="name" name="name" class="form-control py-2">
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="phone">رقم المحمول</label>
                      <input type="text" id="phone" name="phone" class="form-control py-2">
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="email">البريد الالكترونى</label>
                      <input type="email" id="email" name="email" class="form-control py-2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">أكتب الرسالة</label>
                      <textarea name="content" id="message" class="form-control py-2" cols="30" rows="8"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group" style="text-align: right">
                      <input type="submit" value="ارسال الرسالة" class="btn btn-primary">
                    </div>
                  </div>
                {!! Form::close() !!}
          </div>
          <div class="col-md-4">
            
            <div class="block-23">
              <h3 class="heading mb-5" style="text-align: center">معلومات الاتصال</h3>
              <ul style="text-align: center">
                <li><span class="icon ion-android-pin"></span><span class="text">العنوان / مدينة العبور - معهد تكنولوجيا المعلومات</span></li>
                <li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text"> 0101111111
</span></a></li>
                <li><a href="#"><span class="icon ion-android-mail"></span><span class="text">Contact@UniversityApp.net</span></a></li>
                <li><span class="icon ion-android-time"></span><span class="text">السبت &mdash; الخميس   9:00ص - 5:00م</span></li>
              </ul>
            </div>
          </div>
          
        </div>

      </div>
    </section>
    <!-- END section -->

 
  
<footer class="site-footer"  style="background-color:black">

<div class="row pt-5">
    <div class="col-md-12 text-center copyright">
    <p class="mt-5 mb-3 text-muted">
      
      UniversityApp <br>
      High Institute 
      of Management, Finance 
      and Information Systems<br>
      ©2020
    
    
    </p>
 </div>
    </div>
    
       
    
 
    </footer>
    <!-- END footer -->
  

    <?php
if(DB::table('page_views')->count() == NULL){
DB::table('page_views')->insert(['views' => 1]);
} else {
DB::table('page_views')->where('id', 1)->update([
       'views' => DB::raw('views + 1'),
   ]);
}


@$client_ip_proxy_check = $_SERVER['HTTP_CLIENT_IP'];
@$http_forward_network_check = $_SERVER['HTTP_X_FORWARDED_FOR'];
$remote_addr = $_SERVER['REMOTE_ADDR'];
if(!empty($client_ip_proxy_check)){
$ip_address = $client_ip_proxy_check;
}else if(!empty($http_forward_network_check)){
$ip_address = $http_forward_network_check;
}else{
$ip_address = $remote_addr;
}

if(DB::table('ip_addresses')->where('ip_address',$ip_address)->first() == NULL){
if(DB::table('unique_vistors')->count() == NULL){
DB::table('unique_vistors')->insert(['vistors' => 1]);
} else {
DB::table('unique_vistors')->where('id', 1)->update([
       'vistors' => DB::raw('vistors + 1'),
   ]);
}
}

DB::table('ip_addresses')->insert(['ip_address' => $ip_address]);
?>


    <script src="{{asset('ft/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('ft/js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('ft/js/popper.min.js')}}"></script>
    <script src="{{asset('ft/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('ft/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('ft/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('ft/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('ft/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('ft/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('ft/js/main.js')}}"></script>
    <script src="{{asset('ft/Login/vendor/animsition/js/animsition.min.js')}}"></script>
	<script src="{{asset('ft/Login/vendor/select2/select2.min.js')}}"></script>
	<script src="{{asset('ft/Login/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('ft/Login/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{asset('ft/Login/vendor/countdowntime/countdowntime.js')}}"></script>
  </body>
</html>