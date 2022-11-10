<?php $__env->startSection('title', 'Trainers create'); ?>
<?php $__env->startSection('content'); ?>
<?php echo csrf_field(); ?>

<form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data" >

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-5">Registro de Usuarios</h2>
            <table class="table tablebordered table-striped text-center">
    <?php echo csrf_field(); ?> 
    <div class="form-group">
        <label for="">Nombre:</label>
        <input type="Martha" name="name" class="form-control">
        <label for="">Apellido:</label>
        <input type="Rivas" name="apellido" class="form-control">
        <label for="">Edad:</label>
        <input type="20 años" name="edad" class="form-control">
        <label for="">Email:</label>
        <input type="martharivazz@gmail.com" name="email" class="form-control">
        <label for="">Nacionalidad:</label>
        <input type="Mexicana" name="nacionalidad" class="form-control">
        
    </div>
    </div>
    <button type="submit" class="btn btn-success col-md-8 offset-2">
        Registrar</button>
</table>
</div>
</div>
</div>
</form>

<?php echo Form::open(['route'=>'trainers.store','method'=>'POST','files'=>'true'])
    <div clas="form-group">
        <?php echo e(Form::label('name','Nombre')); ?>

        <?php echo e(Form::text('name,null,['class'=>'form-control'])); ?>}
        <?php echo e(Form::label('apellido','Apellido')); ?>

        <?php echo e(Form::text('apellido',null,['class'=>'form-control'])); ?>

</div>
<div clas="form-group">
    <?php echo e(Form::label('avatar','Avatar')); ?>

    <?php echo e(Form::file('avatar')); ?>

</div>
<?php echo e(Form::submit('Guardar',['class'=>'btn btn-primary'])); ?>

{!Form::close(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> ?><?php /**PATH C:\xampp\health1\resources\views/create.blade.php ENDPATH**/ ?>