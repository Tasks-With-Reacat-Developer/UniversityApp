<!DOCTYPE html>
<html lang="{{ Session::get('language') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard - UniversityApp</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/png" href="{{asset('logo/University-logo.png')}}"/>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('en/plugins/fontawesome-free/css/all.min.css')}}">

  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('en/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('en/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('en/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('en/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('en/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('en/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('en/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- jQuery -->
<script src="{{asset('en/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('en/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <script>
$(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $(".side-nav .collapse").on("hide.bs.collapse", function() {                   
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-left").addClass("fa-angle-down");
    });
    $('.side-nav .collapse').on("show.bs.collapse", function() {                        
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-left");        
    });
})    
</script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
@include('admin.lang.en.inc.navbar')
@include('admin.lang.en.inc.sidebar')
<div style="margin-left:250px;">
@include('admin.lang.en.inc.messages')
</div>
@if(!Request::is('admin'))
<div class="content-wrapper">
@endif
@yield('content')
@if(!Request::is('admin'))
</div>
@endif
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



 <footer class="main-footer">
    <strong>&copy; 2020 Mohamed Karabawy</a>.</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->




{{-- adding js files for ckeditor --}}
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
   CKEDITOR.replace( 'article-ckeditor' );
</script>
<script type="text/javascript" src="/js/ckfinder/ckfinder.js"></script>
<script>CKFinder.config( { connectorPath: '/ckfinder/connector' } );</script>
 
<script src="{{asset('js/script.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('en/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('en/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('en/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('en/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('en/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('en/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('en/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('en/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('en/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('en/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('en/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('en/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('en/dist/js/demo.js')}}"></script>
</body>
</html>