<?php $__env->startSection("content"); ?>
    <section class="exam_type">
        <div>
            <ul>
                <?php $__currentLoopData = $exam_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e(route('all_controls', ['exam_type' => $exam_type->code, 'education_year' => $education_year,])); ?>"> <?php echo e($exam_type->name); ?> </a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('lists.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS\OSPanel\domains\all-data-hemis-api\resources\views/lists/controls/exam_type.blade.php ENDPATH**/ ?>