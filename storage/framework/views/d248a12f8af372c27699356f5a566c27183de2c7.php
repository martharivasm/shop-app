<?php $__env->startSection('title', 'Trainers create'); ?>
<?php $__env->startSection('content'); ?>
<?php echo csrf_field(); ?>
<form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data" >
    <?php echo csrf_field(); ?> 
    <div class="form-group">
        <label for="">Nombre:</label>
        <input type="Martha" name="name" class="form-control">
        <label for="">Apellido:</label>
        <input type="Rivas" name="apellido" class="form-control">
        <label for="">Fecha:</label>
        <input type="10/09/2022" name="fecha" class="form-control">
        <label for="">Edad:</label>
        <input type="20 años" name="edad" class="form-control">
        <label for="">Nacionalidad:</label>
        <input type="Mexicana" name="nacionalidad" class="form-control">
        
    </div>
    <div clas="form-group">
        <label for="">Avatar:</label>
        <input type="file" name="avatar">
    </div>
    <button type="submit" class="btn btn-primary">
        Guardar</button>
</form>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\healthh\resources\views/create.blade.php ENDPATH**/ ?>