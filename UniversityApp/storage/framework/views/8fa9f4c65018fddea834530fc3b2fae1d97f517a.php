<?php
$count = 0;

$arrIndex = 0;
$titles = array();
if(!function_exists('isExists')){
function isExists($pageTitle, $check){
  $count = 0;
  for($i=0; $i<count($check); $i++){
   if($pageTitle === $check[$i])
   $count++;
  }

  if($count > 1)
  return true;

  return false;
}
}

?>
<header role="banner">
      <nav class="navbar navbar-expand-sm navbar navbar-light bg-light ">
        <div class="container">

          <a class="navbar-brand " href="/">
              <img src="<?php echo e(asset('logo/University-logo.png')); ?>" width="120" height="72">
              
            </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link " href="/">الرئيسية</a>
              </li>
         <li class="nav-item">
                <a class="nav-link" href="/news"> أخر الاخبار</a>
              </li>
<?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = $multilinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $multilink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $title[$arrIndex++] = $page->page_title; ?>
        <?php if($page->type == 'multi'): ?>
        <?php if($page->nav_id == $multilink->id): ?>
        <?php if($page->language == 'ar'): ?>
        <?php if($count < 1): ?>
        <li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e($multilink->title); ?></a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                <?php $count++; ?>
                <?php endif; ?>
                  <a class="dropdown-item" href="<?php echo e($page->link); ?>" ><?php echo e($page->page_title); ?></a>
                 <?php if($count < 1): ?>
                </div>
                </li>
                <?php endif; ?>
        <?php endif; ?>
        <?php endif; ?>
        <?php else: ?>
          <?php if($page->language == 'ar' && !isExists($page->page_title,$title)): ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e($page->link); ?>"><?php echo e($page->page_title); ?></a>
        <?php endif; ?>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
              <li class="nav-item">
                <a class="nav-link" href="/contact">اتصل بنا</a>
              </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">تغير اللغة</a>
      <div class="dropdown-menu" aria-labelledby="dropdown05">
 <?php echo Form::open(['method' => 'POST', 'action' => 'LanguageController@changeLanguage']); ?>

  <input type="hidden" name="arabic" value="ar">
  <a class="dropdown-item" href="#" onclick="$(this).closest('form').submit();">العربية</a>
     <?php echo Form::close(); ?> 
      <?php echo Form::open(['method' => 'POST', 'action' => 'LanguageController@changeLanguage']); ?>

         <input type="hidden" name="english" value="en">
    <a class="dropdown-item" href="#" onclick="$(this).closest('form').submit();">الانجليزية</a>
      <?php echo Form::close(); ?> 
      </div>
      </li>
            </ul>
                        <ul class="navbar-nav absolute-left">
              <li>      <?php if(auth()->guard()->guest()): ?>
                          <?php else: ?>
                          <?php
                          $parts = explode(' ',trim(Auth::user()->name));
                          ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    مرحباً, <?php echo e($parts[0]); ?> 
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                     <a class="dropdown-item" href="/student">
                                        <?php echo e(__('الملف الشخصي')); ?>

                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('تسجيل خروج')); ?>

                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                        <?php endif; ?>
              </li>
            </ul>

            

          </div>
        </div>

      </nav>
    </header><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/lang/ar/inc/header.blade.php ENDPATH**/ ?>