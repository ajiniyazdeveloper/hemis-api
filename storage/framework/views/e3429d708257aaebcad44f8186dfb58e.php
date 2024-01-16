<?php $__env->startSection("content"); ?>
    <section class="curriculum_subjects_ed_years">
                <ul>
                    <?php $__currentLoopData = $education_years; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education_year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('curriculum_faculties', ['education_year' => $education_year->toArray()['EducationYearCode']])); ?>"> <?php echo e($education_year->toArray()['EducationYearName']); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('lists.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS\OSPanel\domains\all-data-hemis-api\resources\views/lists/curriculum_subjects/education_years.blade.php ENDPATH**/ ?>