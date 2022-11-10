
<?php $__env->startSection('title', 'Trainers index'); ?>
<?php $__env->startSection('content'); ?>
<?php echo csrf_field(); ?>

    <div class="row">
        <?php $__currentLoopData = $trainers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trainer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm">
            <div class="card text-center" style="width: 18rem; margin-top: 70px;">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($trainer->name); ?></h5>
                <p class="card-text">some quick example text.</p>
                <a href="/delete/<?php echo e($trainer->slug); ?>" class="btn btn-primary">
                    Delete...</a>

            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\health\resources\views/index.blade.php ENDPATH**/ ?>