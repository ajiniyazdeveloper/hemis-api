<?php $__env->startSection("content"); ?>
    <ul>
        <li><a href="<?php echo e(route('faculties')); ?>">Faculties</a> </li>
        <li><a href="<?php echo e(route('education_year')); ?>">Controls</a> </li>
        <li><a href="<?php echo e(route('curriculum')); ?>">Curriculum</a> </li>
        <li><a href="<?php echo e(route('subject_education_year')); ?>">Curriculum-Subjects</a> </li>
        <li><a href="<?php echo e(route('group')); ?>">Group</a> </li>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('lists.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS\OSPanel\domains\all-data-hemis-api\resources\views/home.blade.php ENDPATH**/ ?>