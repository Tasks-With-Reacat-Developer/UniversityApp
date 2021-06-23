<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-left">
	 <div class="col-lg-11">
  <h2 class="heading-ltr">Messages</h2>
  <p>
  <table>
  <tr>
<th><?php for($i=0; $i<=59; $i++): ?> &nbsp; <?php endfor; ?></th>
<?php echo Form::open(['action' => 'Admin\AdminMessagesController@store','method' => 'POST' , 'class' => 'card card-sm float-right']); ?>

  <th>
  <?php echo e(Form::text('searchArticles','',['class' => 'form-control', 'placeholder' => 'search'])); ?>

  </th>
  <th>
<?php echo e(Form::submit('Search',['class' => 'btn btn-outline-secondary float-right'])); ?>

  </th>
  <?php echo Form::close(); ?>

</tr>
</table>
</p>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
  
   <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><a href="/admin/messages/<?php echo e($message->id); ?>"> <?php echo e($message->name); ?></a>
       <br>
     <?php echo Form::open(['method' => 'DELETE', 'action' => ['Admin\AdminMessagesController@destroy', $message->id],'onsubmit' => 'return confirm("Are you sure?")', 'id'=>'message']); ?>

      <a href="#" onclick="$(this).closest('form').submit();">Delete</a>
      <?php echo Form::close(); ?> 
      </td>
      <td><?php echo e($message->phone); ?></td>
      <td><?php echo e($message->email); ?></td>
      <td><?php echo e($message->created_at->format('m/d/Y')); ?></td>
    </tr>
   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   
  </tbody>
</table>
</div>
  </div>
 </div>
<div><?php echo e($messages->links()); ?></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/messages/index.blade.php ENDPATH**/ ?>