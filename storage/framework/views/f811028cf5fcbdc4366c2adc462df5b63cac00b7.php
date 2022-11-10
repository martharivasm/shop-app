<?php $__env->startSection('title', 'Trainers create'); ?>
<?php $__env->startSection('content'); ?>

<?php echo Form::open(['route'=>'trainers.store','method'=>'POST','files'=>'true']); ?>

<?php echo $__env->make('form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo e(Form::submit('Guardar',['class'=>'btn btn-primary'])); ?>

<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\app-shop\resources\views/create.blade.php ENDPATH**/ ?>