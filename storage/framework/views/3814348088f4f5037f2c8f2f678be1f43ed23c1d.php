
<?php $__env->startSection('content'); ?>

<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Apellido</th>
            <th>Avatar</th>
</tr>
</thead>
<tbody>
    <?php $__currentLoopData = $trainers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trainer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($trainer->id); ?></td>
        <td><?php echo e($trainer->name); ?></td>
        <td><?php echo e($trainer->apellido); ?></td>
        <td class="text-right"><?php echo e($trainer->avatar); ?></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.pdfinicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\app-shop\resources\views/pdf/listado.blade.php ENDPATH**/ ?>