

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2>Create a new task</h2>
    <form action="<?php echo e(route('todo.update' ,$todo->id)); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>
      <?php echo $__env->make('todo._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('todo.Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\program setup\xampp\htdocs\To-Do\resources\views/todo/edit.blade.php ENDPATH**/ ?>