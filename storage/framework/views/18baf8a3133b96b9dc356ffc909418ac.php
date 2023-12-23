<?php $__env->startSection("content"); ?>
    <div>
        <table>
            <thead>
                <th>Faculty list</th>
            </thead>
            <tbody>
            <?php
                $i = 1;
            ?>
                <?php $__currentLoopData = $faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="border-separate border border-slate-500">
                        <td><?php echo e($i++); ?></td>
                        <td>
                            <?php echo e($faculty->name); ?>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('lists.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS\OSPanel\domains\all-data-hemis-api\resources\views/lists/faculties.blade.php ENDPATH**/ ?>