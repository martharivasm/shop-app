<?php $__env->startSection('title', 'trainers'); ?>
<?php $__env->startSection('content'); ?>
<?php echo csrf_field(); ?>

        <h5 class="text-center"><?php echo e($trainer->name); ?> <?php echo e($trainer->apellido); ?></h5>
        <h5 class="text-center"><?php echo e($trainer->email); ?></h5>
        <div class="card-body">
            <a href="/trainers/<?php echo e($trainer->id); ?>/edit" class="btn btn-success col-md-2 offset-5">Editar</a>


            </div>
<?php $__env->stopSection(); ?>

    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\health\resources\views/show.blade.php ENDPATH**/ ?>