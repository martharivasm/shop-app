<?php $__env->startSection('title', 'Trainers edit'); ?>
<?php $__env->startSection('content'); ?>
<?php echo csrf_field(); ?>

<div class="form-group">
{<?php echo Form::model($trainer,['route'=>['trainers.update',$trainer],
    'method'=>'PUT','files'=>true]); ?>

<?php echo $__env->make('form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo e(Form::submit('Actualizar',['clas'=>'btn btn-primary'])); ?>

!!Form::close()!!
<?php $__env->stopSection(); ?><?php /**PATH C:\xampp\app-shop\resources\views/edit.blade.php ENDPATH**/ ?>