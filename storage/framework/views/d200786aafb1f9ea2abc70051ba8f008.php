

<?php $__env->startSection('content'); ?>

<div class="container mt-5">
  <a href="<?php echo e(route('list')); ?>" class="btn btn-primary m-3">List</a>
  <a href="<?php echo e(route('admin.user')); ?>" class="btn btn-primary">Users</a>
  <a href="<?php echo e(url('add-pic')); ?>" class="btn btn btn-primary m-3">Add an entertainment</a>
  <div>
    <center>
      <h1 class="text-white">Users</h1>  
    </center>
  </div>
  
  <table class="table table-bordered border border-3 border-secondary text-white text-center rounded mt-3">
    <thead class="bg-dark">
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($v->id); ?></td>
        <td><?php echo e($v->name); ?></td>
        <td><?php echo e($v->email); ?></td>
        <td><?php echo e($v->role); ?></td>
        <td><a href="<?php echo e(route('user.check', $v->id)); ?>" class="btn btn-danger">Delete</a></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\M.I.L.O.F\resources\views/admin/user.blade.php ENDPATH**/ ?>