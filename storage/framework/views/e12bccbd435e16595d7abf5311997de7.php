<?php $__env->startSection("content"); ?>
    <section class="curriculum_semesters">
       <a href="<?php echo e(route("curriculum_subjects", ['education_year' => $education_year,'faculty_id' => $faculty_id, 'semester' => $semester, 'curriculums' => $curriculums])); ?>">Wait</a>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('lists.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS\OSPanel\domains\all-data-hemis-api\resources\views/lists/curriculum_subjects/semesters_wait.blade.php ENDPATH**/ ?>