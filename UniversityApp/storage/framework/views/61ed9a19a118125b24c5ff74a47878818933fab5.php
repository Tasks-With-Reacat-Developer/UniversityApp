<?php if(Session::get('language') == "ar"): ?>

<?php echo $__env->make('admin.lang.ar.pages.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php else: ?>

<?php echo $__env->make('admin.lang.en.pages.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?><?php /**PATH C:\xampp\htdocs\UniversityApp\resources\views/admin/pages/dashboard.blade.php ENDPATH**/ ?>