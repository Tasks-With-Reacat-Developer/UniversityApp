<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-left">
	 <div class="col-lg-11">
<h2 class="heading-ltr">Add User</h2>
 <div class="card">	
<div class="card-header"><?php echo e(__('Add User')); ?></div>
  <form method="POST" action="<?php echo e(route('register')); ?>">
    <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="firstName" class="col-md-4 col-form-label text-md-right"><?php echo e(__('First Name')); ?></label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control <?php if ($errors->has('firstName')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('firstName'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="firstName" value="<?php echo e(old('firstName')); ?>" required autocomplete="firstName" autofocus>

                                <?php if ($errors->has('firstName')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('firstName'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Last Name')); ?></label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control <?php if ($errors->has('lastName')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('lastName'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="lastName" value="<?php echo e(old('lastName')); ?>" required autocomplete="lastName" autofocus>

                                <?php if ($errors->has('lastName')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('lastName'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="userName" class="col-md-4 col-form-label text-md-right"><?php echo e(__('User Name')); ?></label>

                            <div class="col-md-6">
                                <input id="userName" type="text" class="form-control <?php if ($errors->has('userName')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('userName'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="userName" value="<?php echo e(old('userName')); ?>" required autocomplete="userName" autofocus>

                                <?php if ($errors->has('userName')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('userName'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="new-password">

                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Submit')); ?>

                                </button>
                            </div>
                        </div>
                    </form>

</div>
 </div>
 </div>
 </div>
<?php $__env->stopSection(); ?>

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
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/auth/register.blade.php ENDPATH**/ ?>