<?php $__env->startSection("content"); ?>
    <div>
        <table>
            <thead>
                <tr class="mb-5">
                    <td>T/N</td>
                    <td>Pa'n</td>
                    <td>Semester</td>
                    <td>Gruppa</td>
                    <td>Fakultet</td>
                    <td>Imtixan tu'ri</td>
                    <td>Qaydnoma</td>
                    <td>Oqitiwshi</td>
                    <td>Auditoriya</td>
                    <td>Sabaq waqti</td>
                    <td>Imtixan Sa'nesi</td>
                </tr>
            </thead>
            <tbody>
                <?php  $i = 1; ?>
                <?php $__currentLoopData = $controls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $control): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="border-separate border border-slate-500">
                        <td> <?php echo e($i++); ?> </td>
                        <td> <?php echo e($control->subject->name); ?> </td>
                        <td> <?php echo e($control->semester->name); ?> </td>
                        <td> <?php echo e($control->group->name); ?> </td>
                        <td> <?php echo e($control->faculty->name); ?> </td>
                        <td> <?php echo e($control->examType->name); ?> </td>
                        <td> <?php echo e($control->finalExamType->name); ?> </td>
                        <td> <?php echo e($control->employee->name); ?> </td>
                        <td> <?php echo e($control->auditorium->name); ?> </td>
                        <td> <?php echo e($control->lessonPair->start_time); ?> : <?php echo e($control->lessonPair->end_time); ?></td>
                        <td> <?php echo e(date("d.m.Y", $control->examDate)); ?> </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('lists.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OS\OSPanel\domains\all-data-hemis-api\resources\views/lists/controls/get_controls.blade.php ENDPATH**/ ?>