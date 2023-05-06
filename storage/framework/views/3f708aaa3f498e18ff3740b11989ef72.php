

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if(session('status')): ?>
                <h6 class="alert alert-success"><?php echo e(session('status')); ?></h6>
            <?php endif; ?>
            <div class="card">
                <div class="card-header">
                    <h4>Edit
                        <a href="<?php echo e(url('/list')); ?>" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('list.update', $data->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="<?php echo e($data->name); ?>" class="form-control" id="name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="genre">Genre</label>
                            <input type="text" name="genre" value="<?php echo e($data->genre); ?>" class="form-control" id="genre">
                        </div>
                        <div class="form-group mb-3">
                            <label for="img">Image</label>
                            <input type="file" name="img" class="form-control" id="img" >
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\M.I.L.O.F\resources\views/admin/edit.blade.php ENDPATH**/ ?>