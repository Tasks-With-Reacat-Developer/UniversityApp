<?php $__env->startSection('content'); ?>

<style>
.form-control
{
    display:block;
    width: 88%;
	height: 50px;
    background-clip:border-box;
    border: 1px solid;
    border-radius: 0.50rem;
    background-color:white;
    
}
</style>

<section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/University.jpg);">
 <div class="container">
        <div class="row align-items-center justify-content-center site-hero-inner">
          <div class="col-md-10">

            <div class="mb-5 element-animate">
              <div class="block-17">
                <img src="<?php echo e(asset('logo/University-logo.png')); ?>" width="120" height="72">
                <h2 class="heading text-center mb-4">Welcome to the High Institute of Management, Finance and Information Systems</h2>

                <p class="text-center"><a href="/login" class="btn ">Log in</a></p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
     
   <div style="text-align: center" class="container"> <br>
    <br>
    <br>
 
  
<?php echo $__env->make('lang.en.search.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
     
  

    <section class="site-section element-animate">
      <div class="container">
        <div class="row align-items-center">
		  <div class="card">
		  <div class="card-body">
		  <div style="float:right;">
		  <img src="images/img_2.jpg" alt="Image placeholder" width="450" height="400">
           </div>
          <div class="col-md-6 order-md-1">

            <div class="block-21" style="font-family:Helvetica">
              <div class="heading" style="text-align: center">
                <h2 style="color:darkblue" >
                <?php echo e($brief_en->title); ?>

                </h2>
              </div>
              <br>
              <div class="text mb-5" style="text-align: center">
              <p style="color:black; font-size:15px;">
               <?php echo e($brief_en->content); ?>

                  </p>
              </div>

            
            </div>

          </div>
		  </div>
		  </div>

        </div>
      </div>
    </section>
    <!-- END section -->

<div class="jumbotron" style="background-color:white; font-family:Helvetica;">
<div class="mb-5 element-animate">
<div class="card">
<div class="card-body">
 <div class="row">  
     <div class="col-sm-12">
         <h1 class="text-left" style="color: #10ADB2"><?php echo e($dean_en->title); ?></h1>
<br>
<strong style="text-align: center">
  <p style="color: black; font-size:18px;">  
   <?php echo e($dean_en->content); ?>

    </p>         
 </strong> 
 
         </div>
          </div>
          </div>
		  </div>
		  </div>
          </div>
      


<section class="site-section bg-light element-animate" id="section-counter">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
<div class="card" style="width: 18rem; height:21.3rem;" >
<center>
    <img src="images/goals.png" width="120" height="120">
</center>
  <div class="card-body">
    <h2 class="card-title" style="text-align: center">Goals</h2>
    
    <p class="card-text" style="text-align: center">
    <?php echo e($goals_en->content); ?>

    </p>
  </div>
</div>
 </div>
<div class="col-sm-4">
<div class="card" style="width: 18rem; height:21.3rem;">
<center>
  <img src="images/mission.png" width="120" height="120">
</center>
  <div class="card-body">
    <h2 class="card-title" style="text-align: center">The Message</h2>
    <p class="card-text" style="text-align: center"><?php echo e($message_en->content); ?></p>
    
  </div>
</div>    
</div> 
<div class="col-sm-4">
<div class="card" style="width: 18rem; height:21.3rem">
<center>
  <img src="images/vission.png" width="120" height="120">
</center>
  <div class="card-body">
    <h2 class="card-title" style="text-align: center">Future Vision</h2>
    <p class="card-text" style="text-align: center"><?php echo e($future_vision_en->content); ?></p>
    
  </div>
</div>    
</div>    
                
                </div>
            </div>
    </section>
    <!-- END section -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/lang/en/index.blade.php ENDPATH**/ ?>