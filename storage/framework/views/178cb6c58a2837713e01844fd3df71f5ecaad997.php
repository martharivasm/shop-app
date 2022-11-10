<?php $__env->startSection('title', 'trainers'); ?>
<?php $__env->startSection('content'); ?>

<img style="height: 100px; width: 100px;
background-color: #EFEFEF; margin: 20px;
" class="card-img-top rounded-circle mx-auto d-block"
src="../images/<?php echo e($trainer->avatar); ?>" alt="">

<h5 class="text-center"><?php echo e($trainer->name); ?></h5>
<h5 class="text-center"><?php echo e($trainer->apellido); ?></h5>
<h5 class="text-center"><?php echo e($trainer->avatar); ?></h5>
<div class="text-center">
    <p>Some quick example text token get allbuild on the card title and make up the bulk of the 
        cards content</p>
        <a href="/delete/<?php echo e($trainer->id); ?>" class="btn btn-primary">
            Delete</a>
        <a href="/trainers/<?php echo e($trainer->id); ?>/edit" class="btn btn-secondary">
            Editar</a>
        <a href="<?php echo e(route('listado.pdf')); ?>" class="btn btn-sm btn-primary">
            Descargando Entrenadores en PDF

</a>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\app-shop\resources\views/show.blade.php ENDPATH**/ ?>