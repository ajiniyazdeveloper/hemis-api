<?php $__env->startSection("content"); ?>
    <section class="curriculum_subjects_faculties">
        <div>
                <?php
                    $i = 1;
                ?>
                <?php $__currentLoopData = $faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <ol class="border-separate border border-slate-500">
                        <li>
                            <a href="<?php echo e(route("curriculum_semesters", ['education_year'=>$education_year,'faculty_id' => $faculty->toArray()['facultyId']])); ?>"><?php echo e($faculty->toArray()['facultyName']); ?></a>
                        </li>
                    </ol>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('lists.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS\OSPanel\domains\all-data-hemis-api\resources\views/lists/curriculum_subjects/curriculum_subjects_faculties.blade.php ENDPATH**/ ?>