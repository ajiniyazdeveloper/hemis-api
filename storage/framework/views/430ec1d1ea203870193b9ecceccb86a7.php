<?php $__env->startSection('content'); ?>
    <div class="exam_type">
        <ul>
            <?php $__currentLoopData = $exam_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($exam_type->name); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('lists.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS\OSPanel\domains\all-data-hemis-api\resources\views/lists/classifier.blade.php ENDPATH**/ ?>