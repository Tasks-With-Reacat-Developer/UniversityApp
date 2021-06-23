<!DOCTYPE html>
<html lang="en">
<head>
	<title>Science Valley Academy - Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="{{asset('logo/sva.png')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('adminlg/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('adminlg/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('adminlg/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('adminlg/vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('adminlg/vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('adminlg/vendor/animsition/css/animsition.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('adminlg/vendor/select2/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('adminlg/vendor/daterangepicker/daterangepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('adminlg/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('adminlg/css/main.css')}}">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-90 p-b-30">
                 <form method="POST" action="{{ route('admin.login.submit') }}" class="login100-form validate-form">
					<span class="login100-form-title p-b-40">
					<img src="{{asset('logo/sva.png')}}" width="50px" height="50px" alt="UniversityApp" class="brand-image img-circle elevation-3"
           style="opacity: .8">
						Admin Login
					</span>
                        @csrf
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter User Name/Email">
						<input class="input100" type="text" name="username" placeholder="User Name/Email" required autofocus>
						<span class="focus-input100"></span>
                         @error('email')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                           </span>
                         @enderror
					</div>

					<div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter password">
						<span class="btn-show-pass">
							<i class="fa fa fa-eye"></i>
						</span>
						<input class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="current-password">
						<span class="focus-input100"></span>
                         @error('password')
                          <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                            </span>
                          @enderror
					</div>
					
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check float-right" style="margin-right:30px;">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" >
                                    <label for="remember">
                                     Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
						<div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                        <a class="btn btn-link" href="/admin/password/reset">
                                        Forgot Your Password?
                                    </a>
                        </div>
						</div>
						
					</div>
					
				</form>
			</div>
		</div>
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
	
	<script src="{{asset('adminlg/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('adminlg/vendor/animsition/js/animsition.min.js')}}"></script>
	<script src="{{asset('adminlg/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('adminlg/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('adminlg/vendor/select2/select2.min.js')}}"></script>
	<script src="{{asset('adminlg/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('adminlg/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{asset('adminlg/vendor/countdowntime/countdowntime.js')}}"></script>
	<script src="{{asset('adminlg/js/main.js')}}"></script>

</body>
</html>