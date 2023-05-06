

<?php $__env->startSection('content'); ?>

<div class="bg-dark text-white p-5">
    <h1 class="mb-4">Are you sure?</h1>
    <a href="/user" class="btn btn-primary mr-2">No</a>
    <form action="<?php echo e(route('user.remove', $id)); ?>" method="post" class="d-inline">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <button class='btn btn-danger'>Delete</button>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\M.I.L.O.F\resources\views/admin/confirmUser.blade.php ENDPATH**/ ?>