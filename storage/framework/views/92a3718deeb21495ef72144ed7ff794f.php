<?php $__env->startSection("content"); ?>
    <section class="one_faculty_curriculums">
        <div>
            <ul>
                <?php $__currentLoopData = $curriculums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curriculum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href=""> <?php echo e($curriculum->name); ?> </a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('lists.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS\OSPanel\domains\all-data-hemis-api\resources\views/lists/curriculum/one_faculty_curriculums.blade.php ENDPATH**/ ?>