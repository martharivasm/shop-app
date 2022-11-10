<?php $__env->startSection('title', 'Trainers edit'); ?>
<?php $__env->startSection('content'); ?>
<form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data" >
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
          
            <table class="table tablebordered table-striped text-center">
   
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="">Nombre:</label>
        <input type="Martha" name="name" value="<?php echo e($trainer->name); ?>" class="form-control">
        <label for="">Apellido:</label>
        <input type="Rivas" name="apellido" value="<?php echo e($trainer->apellido); ?>" class="form-control">
        <label for="">Edad:</label>
        <input type="21" name="edad" value="<?php echo e($trainer->edad); ?>" class="form-control">
        <label for="">Email:</label>
        <input type="martharivazz@gmail.com" name="email" value="<?php echo e($trainer->email); ?>" class="form-control">
        <label for="">Nacionalidad:</label>
        <input type="Mexicana" name="nacionalidad" value="<?php echo e($trainer->nacionalidad); ?>" class="form-control">
    </div>
    
    <button type="submit" class="btn btn-success col-md-8 offset-2">
        Editar</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\health\resources\views/edit.blade.php ENDPATH**/ ?>