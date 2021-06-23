<?php $__env->startSection('content'); ?>
<?php
     $used_pages = array();
      $x = 0;
      $count = 0;
      $c = 0;
      function is_exists($arg , $arr){
          for($s=0; $s<count($arr); $s++){
              if($arg == $arr[$s]){
                  return true;
              }
          }
          return false;
      }
?>
<div class="container">
    <div class="row justify-content-left">
	 <div class="col-lg-11">
  <h2 class="heading-ltr">Appearance</h2>
  <p>
  <table>
  <tr>
  <th>
  <h4>Navbar</h4>
</th>
<th><?php for($i=0; $i<=105; $i++): ?> &nbsp; <?php endfor; ?></th>
<th><a href="/admin/appearance/page/create">Add Page</a></th>
</tr>
</table>
</p>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Page</th>
      <th scope="col">Type</th>
      <th scope="col">Language</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php if($page->type != "multi"): ?>
    <tr>
      <td>
       <?php echo e($page->page_title); ?>

       <br>
     <?php echo Form::open(['method' => 'DELETE', 'action' => ['Admin\AdminAppearanceController@destroy', $page->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'page']); ?>

      <a href="appearance/page/<?php echo e($page->id); ?>/edit">Edit &nbsp;</a>
      <a href="#" onclick="$(this).closest('form').submit();"> &nbsp;Delete</a>
      <?php echo Form::close(); ?> 
      </td>
      <?php if($page->type == NULL): ?>
      <td>-</td>
      <?php else: ?>
      <td><?php echo e($page->type); ?></td>
      <?php endif; ?>
      <td><?php echo e($page->language); ?></td>
    </tr>
    <?php else: ?>
    <?php if(!empty($multilinks[$c])  && $page->nav_id == $multilinks[$c]->id): ?>

    <tr>
      <td>
       <?php echo e($multilinks[$c]->title); ?>

       <br>
     <?php echo Form::open(['method' => 'DELETE', 'action' => ['Admin\AdminAppearanceController@destroy', $page->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'page']); ?>

      <a href="appearance/page/<?php echo e($page->id); ?>/edit">Edit &nbsp;</a>
      <a href="#" onclick="$(this).closest('form').submit();"> &nbsp;Delete</a>
      <?php echo Form::close(); ?> 
      </td>
      <td><?php echo e($page->type); ?></td>
      <td><?php echo e($page->language); ?></td>
    </tr>
    <?php

    $c++;
    ?>
    <?php endif; ?>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </tbody>
</table>
<br>
<h4>Brief About College</h4>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Language</th>
    </tr>
  </thead>
  <tbody>
   <tr>
  <td>Brief About College
   <?php if($brief_en): ?>
   <a href="/admin/appearance/brief/en/<?php echo e($brief_en->id); ?>/edit">Edit</a>
   <?php else: ?>
   <a href="/admin/appearance/brief/en/create">Add</a>
   <?php endif; ?>
  </td>
  <td>English</td>
   </tr>
   <tr>
  <td>Brief About College
     <?php if($brief_ar): ?>
   <a href="/admin/appearance/brief/ar/<?php echo e($brief_ar->id); ?>/edit">Edit</a>
   <?php else: ?>
   <a href="/admin/appearance/brief/ar/create">Add</a>
   <?php endif; ?>
  </td>
  <td>Arabic</td>
   </tr>
    </tbody>
</table>
<br>
<h4>Dean</h4>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Language</th>
    </tr>
  </thead>
  <tbody>
  <tr>
  <td>Dean's Speech
     <?php if($dean_en): ?>
   <a href="/admin/appearance/dean/en/<?php echo e($dean_en->id); ?>/edit">Edit</a>
   <?php else: ?>
   <a href="/admin/appearance/dean/en/create">Add</a>
   <?php endif; ?>
  </td>
  <td>English</td>
   </tr>
     <tr>
  <td>Dean's Speech
   <?php if($dean_ar): ?>
   <a href="/admin/appearance/dean/ar/<?php echo e($dean_ar->id); ?>/edit">Edit</a>
   <?php else: ?>
   <a href="/admin/appearance/dean/ar/create">Add</a>
   <?php endif; ?>
  </td>
  <td>Arabic</td>
   </tr>
    </tbody>
</table>
<br>
<h4>Other</h4>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Language</th>
    </tr>
  </thead>
  <tbody>
     <tr>
  <td>Goals
    <?php if($goals_en): ?>
   <a href="/admin/appearance/goals/en/<?php echo e($goals_en->id); ?>/edit">Edit</a>
   <?php else: ?>
   <a href="/admin/appearance/goals/en/create">Add</a>
   <?php endif; ?>
  </td>
  <td>English</td>
   </tr>
        <tr>
  <td>Goals
    <?php if($goals_ar): ?>
   <a href="/admin/appearance/goals/ar/<?php echo e($goals_ar->id); ?>/edit">Edit</a>
   <?php else: ?>
   <a href="/admin/appearance/goals/ar/create">Add</a>
   <?php endif; ?>
  </td>
  <td>Arabic</td>
   </tr>
        <tr>
  <td>The Message
   <?php if($message_en): ?>
   <a href="/admin/appearance/message/en/<?php echo e($message_en->id); ?>/edit">Edit</a>
   <?php else: ?>
   <a href="/admin/appearance/message/en/create">Add</a>
   <?php endif; ?>
  </td>
  <td>English</td>
   </tr>
        <tr>
  <td>The Message
   <?php if($message_ar): ?>
   <a href="/admin/appearance/message/ar/<?php echo e($message_ar->id); ?>/edit">Edit</a>
   <?php else: ?>
   <a href="/admin/appearance/message/ar/create">Add</a>
   <?php endif; ?>
  </td>
  <td>Arabic</td>
   </tr>
        <tr>
  <td>Future Vision
   <?php if($future_vision_en): ?>
   <a href="/admin/appearance/future-vision/en/<?php echo e($future_vision_en->id); ?>/edit">Edit</a>
   <?php else: ?>
   <a href="/admin/appearance/future-vision/en/create">Add</a>
   <?php endif; ?>
  </td>
  <td>English</td>
   </tr>
        <tr>
  <td>Future Vision
    <?php if($future_vision_ar): ?>
   <a href="/admin/appearance/future-vision/ar/<?php echo e($future_vision_ar->id); ?>/edit">Edit</a>
   <?php else: ?>
   <a href="/admin/appearance/future-vision/ar/create">Add</a>
   <?php endif; ?>
  </td>
  <td>Arabic</td>
   </tr>
    </tbody>
</table>
</div>
  </div>
 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/appearance/index.blade.php ENDPATH**/ ?>