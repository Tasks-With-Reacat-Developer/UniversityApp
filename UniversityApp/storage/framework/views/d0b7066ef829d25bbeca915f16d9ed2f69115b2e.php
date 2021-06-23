<?php $__env->startSection('content'); ?>

<style>
.form-control
{
    display:block;
    width: 92%;
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
                <img src="logo/University-logo.png" width="120" height="72">
                <h2 class="heading text-center mb-4">مرحبا بكم في المعهد العالي للإدارة والمالية ونظم المعلومات</h2>

                <p class="text-center">
                    <a href="/login" class="btn">تسجيل الدخول</a>
                  
                  </p>
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
 
    
<form method="GET" action="<?php echo e(url('/search')); ?>">
    <table>
      <tbody>
      <tr>
      <td style="width:100%">
    <input class="form-control" style="width:98%" name="query" placeholder="البحث"  type="search">
      </td>
      <td>
        <button class="btn btn-outline-dark btn-lg " type="submit" >بحث</button>
      </td>
    </tr>
      </tbody>
    </table>
</form>
</div>      
  <!-- end form  -->    
      
<section class="site-section element-animate">
      <div class="container">
        <div class="row align-items-center">
           	<div class="card">
            <div class="card-body">
            <div style="float:left;">
            <img src="images/img_2.jpg" alt="Image placeholder" width="450" height="400" >
            </div>
          <div class="col-md-6 order-md-1">
            <div class="block-21" style="font-family:Helvetica">
              <div class="heading" style="text-align: center">
                <h1 style="color:darkblue; text-align: center;">
                     <?php echo e($brief_ar->title); ?>

                      <br>
                                    </h1>
                <br>
              </div>
              <div class="text mb-5">
              <p style="text-align: center; font-size:18px;">
              <?php echo e($brief_ar->content); ?>

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

<div class="jumbotron" style="background-color:white; font-family:Helvetica;" >
<div class="mb-5 element-animate">
<div class="card">
<div class="card-body">
 <div class="row">  
     <div class="col-sm-13">
         <h1 style="text-align: right; color: #10ADB2;"><?php echo e($dean_ar->title); ?></h1>
<strong style="text-align: center">
  <p style="color: black; font-size: 18px">
                 <br>
    <?php echo e($dean_ar->content); ?>

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
<div class="card" style="width: 18rem; height:21.3rem" >
   <center>
    <img src="images/goals.png" width="120" height="120">
    </center>
  <div class="card-body">
    <h2 class="card-title" style="text-align: center">الاهداف</h2>
    
    <p class="card-text" style="text-align: center">
   <?php echo e($goals_ar->content); ?>

    </p>
  </div>
</div>
 </div>
<div class="col-sm-4">
<div class="card" style="width: 18rem; height:21.3rem">
  <center>
  <img src="images/mission.png" width="120px" height="120px">
  </center>
  <div class="card-body">
    <h2 class="card-title" style="text-align: center" >الرسالة</h2>
    <p class="card-text" style="text-align: center"><?php echo e($message_ar->content); ?></p>
    
  </div>
</div>    
</div> 
<div class="col-sm-4">
<div class="card" style="width: 18rem; height:21.3rem">
 <center>
  <img src="images/vission.png" width="120px" height="120px">
  </center>
  <div class="card-body">
    <h2 class="card-title" style="text-align: center">الرؤية</h2>
    <p class="card-text" style="text-align: center"><?php echo e($future_vision_ar->content); ?></p>
    
  </div>
</div>    
</div>    
                
                </div>
            </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('lang.ar.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/lang/ar/index.blade.php ENDPATH**/ ?>