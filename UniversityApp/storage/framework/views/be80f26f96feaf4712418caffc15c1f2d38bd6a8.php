<!DOCTYPE html>

<html lang="<?php echo e(Session::get('language')); ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Science Valley Academy</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <link rel="icon" type="image/png" href="<?php echo e(asset('logo/sva.png')); ?>"/>
   <link href="<?php echo e(asset('https://fonts.googleapis.com/css?family=Rubik:300,400,500')); ?>" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('ft/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('ft/css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('ft/css/owl.carousel.min.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('ft/fonts/ionicons/css/ionicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('ft/fonts/fontawesome/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('ft/fonts/flaticon/font/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('ft/css/magnific-popup.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('ft/Login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('ft/Login/vendor/css-hamburgers/hamburgers.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('ft/Login/vendor/animsition/css/animsition.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('ft/Login/vendor/select2/select2.min.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('ft/Login/vendor/daterangepicker/daterangepicker.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('ft/Login/css/util.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('ft/Login/css/main.css')); ?>">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo e(asset('ft/css/style.css')); ?>">
<style>
.form-control
{
    display:block;
    width: 100%;
    background-clip:border-box;
    border: 1px solid  ;
    border-radius: 1.50rem;
    background-color:white;
    
}
</style>
</head>
<body>
<div class="wrapper">
<?php echo $__env->make('lang.en.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div style="margin-left:250px;">
<?php echo $__env->make('admin.lang.en.inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('lang.en.inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
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


    <script src="<?php echo e(asset('ft/js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('ft/js/jquery-migrate-3.0.0.js')); ?>"></script>
    <script src="<?php echo e(asset('ft/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('ft/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('ft/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('ft/js/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('ft/js/jquery.stellar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('ft/js/jquery.animateNumber.min.js')); ?>"></script>
    <script src="<?php echo e(asset('ft/js/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('ft/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('ft/Login/vendor/animsition/js/animsition.min.js')); ?>"></script>
	<script src="<?php echo e(asset('ft/Login/vendor/select2/select2.min.js')); ?>"></script>
	<script src="<?php echo e(asset('ft/Login/vendor/daterangepicker/moment.min.js')); ?>"></script>
	<script src="<?php echo e(asset('ft/Login/vendor/daterangepicker/daterangepicker.js')); ?>"></script>
	<script src="<?php echo e(asset('ft/Login/vendor/countdowntime/countdowntime.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/layouts/app.blade.php ENDPATH**/ ?>