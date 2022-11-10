<div clas="form-group">
<?php echo e(Form::label('name','Nombre')); ?>

<?php echo e(Form::text('name',null,['class'=>'form-control'])); ?>}
<?php echo e(Form::label('apellido','Apellido')); ?>

<?php echo e(Form::text('apellido',null,['class'=>'form-control'])); ?>

</div>
<div clas="form-group">
<?php echo e(Form::label('avatar','Avatar')); ?>

<?php echo e(Form::file('avatar')); ?>

</div><?php /**PATH C:\xampp\app-shop\resources\views/form.blade.php ENDPATH**/ ?>