<?php $__env->startSection("content"); ?>
    <section class="curriculum">
        <div>
            <table>
                <tr>
                    <Td>T/N</Td>
                    <Td>Curriculum</Td>
                    <Td>Faculty</Td>
                    <Td>Education Year</Td>
                    <Td>Specialty</Td>
                    <Td>Education Type</Td>
                    <Td>Education Form</Td>
                    <Td>Education Period</Td>
                </tr>

            <?php
                $i = 1;
            ?>
                <?php $__currentLoopData = $curriculums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curriculum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($i++); ?></td>
                        <td><?php echo e($curriculum->name); ?></td>
                        <td><?php echo e($curriculum->faculty_name); ?></td>
                        <td><?php echo e($curriculum->educationYear->name); ?></td>
                        <td><?php echo e($curriculum->specialty->code." : ".$curriculum->specialty->name); ?></td>
                        <td><?php echo e($curriculum->educationType->name); ?></td>
                        <td><?php echo e($curriculum->educationForm->name); ?></td>
                        <td><?php echo e($curriculum->education_period."-yil"); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('lists.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS\OSPanel\domains\all-data-hemis-api\resources\views/lists/curriculum/curriculum.blade.php ENDPATH**/ ?>