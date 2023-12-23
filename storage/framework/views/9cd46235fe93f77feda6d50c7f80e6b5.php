<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body>
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
                <td>Juwmaqlawshi imtixan tu'ri</td>
                <td>Oqitiwshi</td>
                <td>Auditoriya</td>
                <td>Sabaq waqti</td>
                <td>Imtixan Sa'nesi</td>
            </tr>
        </thead>
        <tbody>
        <?php
            $i = 1;
        ?>














        <?php $__currentLoopData = $interval_controls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $interval_control): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="border-separate border border-slate-500">
                <td> <?php echo e($i++); ?> </td>
                <td> <?php echo e($interval_control->subject->name); ?> </td>
                <td> <?php echo e($interval_control->semester->name); ?> </td>
                <td> <?php echo e($interval_control->group->name); ?> </td>
                <td> <?php echo e($interval_control->department->name); ?> </td>
                <td> <?php echo e($interval_control->examType->name); ?> </td>
                <td> <?php echo e($interval_control->finalExamType->name); ?> </td>
                <td> <?php echo e($interval_control->employee->name); ?> </td>
                <td> <?php echo e($interval_control->auditorium->name); ?> </td>
                <td> <?php echo e($interval_control->lessonPair->start_time); ?> : <?php echo e($interval_control->lessonPair->end_time); ?></td>
                <td> <?php echo e(date("d.m.Y", $interval_control->examDate)); ?> </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
</body>
</html>
<?php /**PATH D:\OS\OSPanel\domains\all-data-hemis-api\resources\views/lists/interval_controls.blade.php ENDPATH**/ ?>