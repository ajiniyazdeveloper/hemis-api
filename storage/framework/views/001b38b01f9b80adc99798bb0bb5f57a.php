<?php $__env->startSection('content'); ?>
    <div class="education_year">
        <ul>
            <?php $__currentLoopData = $education_years; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education_year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e(route('exam_type', ['education_year' => $education_year->code])); ?>"> <?php echo e($education_year->name); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('lists.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS\OSPanel\domains\all-data-hemis-api\resources\views/lists/controls/education_year.blade.php ENDPATH**/ ?>