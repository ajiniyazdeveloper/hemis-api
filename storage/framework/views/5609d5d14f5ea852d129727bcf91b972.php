<?php $__env->startSection("content"); ?>
    <section class="curriculum_subjects">
        <div>
            <a href="<?php echo e(route('curriculum_subjects_all_data', ['education_year' => $education_year,'faculty_id' => $faculty_id, 'semester' => 1, 'curriculums' => $curriculums, 'curriculum_semesters' => $curriculum_semesters])); ?>">Wait...</a>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('lists.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS\OSPanel\domains\all-data-hemis-api\resources\views/lists/curriculum_subjects/curriculum_subjects.blade.php ENDPATH**/ ?>