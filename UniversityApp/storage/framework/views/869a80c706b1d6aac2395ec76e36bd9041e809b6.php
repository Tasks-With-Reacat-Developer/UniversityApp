<?php
$count = 0;
$arrIndex = 0;
$titles = array();

if(!function_exists('is_Exist')){
function is_Exist($pageTitle, $check){
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
              <br>
              
            </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link " href="/">Home</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="/news"> News</a>
              </li>

        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = $multilinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $multilink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $title[$arrIndex++] = $page->page_title; ?>
        <?php if($page->type == 'multi'): ?>
        <?php if($page->nav_id == $multilink->id): ?>
        <?php if($page->language == 'en'): ?>
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
          <?php if($page->language == 'en' && !is_Exist($page->page_title,$title)): ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e($page->link); ?>"><?php echo e($page->page_title); ?></a>
              </li>
        <?php endif; ?>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
              </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Languages</a>
      <div class="dropdown-menu" aria-labelledby="dropdown05">
 <?php echo Form::open(['method' => 'POST', 'action' => 'LanguageController@changeLanguage']); ?>

  <input type="hidden" name="arabic" value="ar">
  <a class="dropdown-item" href="#" onclick="$(this).closest('form').submit();">Arabic</a>
     <?php echo Form::close(); ?> 
      <?php echo Form::open(['method' => 'POST', 'action' => 'LanguageController@changeLanguage']); ?>

         <input type="hidden" name="english" value="en">
    <a class="dropdown-item" href="#" onclick="$(this).closest('form').submit();">English</a>
      <?php echo Form::close(); ?> 
      </div>
      </li>
            </ul>

            <ul class="navbar-nav absolute-right">
              <li>      <?php if(auth()->guard()->guest()): ?>
                          <?php else: ?>
                          <?php
                          $parts = explode(' ',trim(Auth::user()->name));
                          ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Welcome, <?php echo e($parts[0]); ?> 
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                     <a class="dropdown-item" href="/student">
                                        <?php echo e(__('Profile')); ?>

                                    </a>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

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
    </header><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/lang/en/inc/header.blade.php ENDPATH**/ ?>