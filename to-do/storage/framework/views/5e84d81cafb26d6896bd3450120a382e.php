<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="container mt-4">
<h2>Create a new task</h2>
<form action="<?php echo e(route('todo.update' ,$todo->id)); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
  <?php echo $__env->make('todo._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</form>

</div><?php /**PATH E:\program setup\xampp\htdocs\To-Do\resources\views/todo/update.blade.php ENDPATH**/ ?>