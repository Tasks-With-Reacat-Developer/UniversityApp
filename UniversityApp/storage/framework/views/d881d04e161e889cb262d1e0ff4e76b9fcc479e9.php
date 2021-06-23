<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
	 <div class="col-lg-11">
 <h2 class="heading-ltr">Edit Page</h2>
 <div class="card">	
<div class="card-header"><?php echo e(__('Add Page')); ?></div>
   <?php echo Form::open(['action'=> ['Admin\AdminAppearanceController@updatePage', $page->id] ,'method' => 'PUT']); ?>

        <div class="selects">
        <table>
        <tr>
        <td>&nbsp;Language:&nbsp;</td>
        <td>
        <select name="language" id="language" class="form-control">
        <option value="">Select Language</option>
        <option value="en" <?php if($page->language == 'en'): ?> selected <?php endif; ?>>English</option>
        <option value="ar" <?php if($page->language == 'ar'): ?> selected <?php endif; ?>>Arabic</option>
        </select>
       </td>
       </tr>
       <tr>
      <td>&nbsp;Multi Pages Title:&nbsp;</td>
      <td>
      <input type="text" name="multi-page-title" id="multi-page-title" value="<?php if($multilink_id != NULL): ?> <?php echo e($multilink->title); ?> <?php endif; ?>" class="form-control" placeholder="blank for single page">
      </td>
      <br>
      </table>
    </div>
     <br>
    <table>
    <tr>
   <th>Page Title</th>
   <th>Page Link</th>
   <?php if(count($pages) > 1): ?>
   <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    </tr>
    <tr>
    <td>
    <?php echo e(Form::text('page_title[]',$pg->page_title,['class' => 'form-control', 'placeholder' => 'Page Title'])); ?>

    </td>
    <td>
    <?php echo e(Form::text('page_link[]',$pg->link,['class' => 'form-control', 'placeholder' => 'Page Link'])); ?>

      </td>
     </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <?php else: ?>
    <tr>
    <td>
    <?php echo e(Form::text('page_title',$page->page_title,['class' => 'form-control', 'placeholder' => 'Page Title'])); ?>

    </td>
    <td>
    <?php echo e(Form::text('page_link',$page->link,['class' => 'form-control', 'placeholder' => 'Page Link'])); ?>

      </td>
     </tr>
     <?php endif; ?>
     <tbody class="pages">
     </tbody>
     </table>
    <a href="#" onclick='addPage()'>&nbsp;&nbsp;&nbsp;Add Page</a> 
    <a href="#" onclick="removePage()">&nbsp;&nbsp;&nbsp;Remove Page</a>
                 <div class="card-body">
                <div class="float-right">
				<?php echo e(Form::submit('Update',['name' => 'Add','class' => 'btn btn-primary'])); ?>

                </div>
                </div>
    <?php echo Form::close(); ?> 
</div>
</div>
</div>
</div>

<script type="text/javascript">
var i = 1;
var c = 0;

function removePage(){
$("#tr1"+i).remove();
$("#tr1"+i).empty();
if(i > 1 && c > 0){
  i--;
  c--;
}
}


function addPage(){
var tr = document.createElement("tr");
tr.className = "tr1"; 
tr.id = "tr1" + i; 
var td1 = document.createElement("td");
td1.className = "td1"; 
var td2 = document.createElement("td");
td2.className = "td2"; 


var pageTitle = document.createElement("input");
pageTitle.type = "text";
pageTitle.className = "form-control";
pageTitle.placeholder = "Page Title";
pageTitle.name = "pages_title[]";

var pageLink = document.createElement("input");
pageLink.type = "text";
pageLink.className = "form-control";
pageLink.placeholder = "Page Link";
pageLink.name = "pages_link[]";

document.getElementsByClassName("pages")[0].appendChild(tr);
document.getElementsByClassName("tr1")[c].appendChild(td1);
document.getElementsByClassName("tr1")[c].appendChild(td2);
document.getElementsByClassName("td1")[c].appendChild(pageTitle);
document.getElementsByClassName("td2")[c].appendChild(pageLink);
i++;
c++;
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.lang.en.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/lang/en/appearance/pages/edit.blade.php ENDPATH**/ ?>