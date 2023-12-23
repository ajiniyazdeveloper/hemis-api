<?php $__env->startSection("content"); ?>
    <section class="curriculum">
        <div>
            <table>
                <tr>
                    <Td>T/N</Td>
                    <Td>Curriculum_name</Td>
                    <Td>totalCount</Td>

                </tr>

                <?php
                    $i = 1;
                ?>
                <?php $__currentLoopData = $all_datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($i++); ?></td>
                        <td><?php echo e($all_data[0]); ?></td>
                        <td><?php echo e($all_data[1]); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('lists.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS\OSPanel\domains\all-data-hemis-api\resources\views/lists/curriculum_subjects/data_view.blade.php ENDPATH**/ ?>