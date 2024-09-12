
<?php $__env->startSection('content'); ?>
  <div class="container mt-4">
    <h1>To-Do List</h1>
    <a href="<?php echo e(route('todo.index')); ?>" class="btn btn-success mt-4 mb-4">Back</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Complated</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
           <tr>
          <th scope="row"> <?php echo e($loop->iteration); ?></th>
          <td><?php echo e($todo->title); ?></td>
          <td><?php echo e($todo->description); ?></td>
          <td> <?php echo e($todo->is_completed == 1 ? 'Yes' : 'No'); ?></td>
          <td>
            <a href="<?php echo e(route('todo.restore', $todo->id)); ?>" class="btn btn-primary">Restore</a>
            <button type="button"  onclick=" document.getElementById('delete-form').submit()"  class="btn btn-danger">Force Delete</a>
            <form id="delete-form" action="<?php echo e(route('todo.forceDelete', $todo->id)); ?>" method="POST" style="display: none;">
              <?php echo csrf_field(); ?>
              <?php echo method_field('DELETE'); ?>
            </form>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
          <td colspan="5" class="text-center">No Trashed Todos</td>
        </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
<?php $__env->stopSection(); ?>










<?php echo $__env->make('todo.Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\program setup\xampp\htdocs\To-Do\resources\views/todo/trush.blade.php ENDPATH**/ ?>