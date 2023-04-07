

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if(session('status')): ?>
                <h6 class="alert alert-success"><?php echo e(session('status')); ?></h6>
            <?php endif; ?>
            <div class="card">
                <div class="card-header">
                    <h4>Add pic
                        <a href="<?php echo e(url('pic')); ?>" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(url('add-pic')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name='name' class='form-control'>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Genre</label>
                            <input type="text" name='genre' class='form-control'>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Image</label>
                            <input type="file" name='img' class='form-control'>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-success">Save Pic</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\milof\resources\views/pic/create.blade.php ENDPATH**/ ?>