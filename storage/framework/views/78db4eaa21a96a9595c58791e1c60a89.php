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
                        <a href="<?php echo e(route('list')); ?>" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(url('add-entertainment')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name='name' class='form-control'>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Genre</label>
                            <select name='genre' class='form-control'>
                                <option value='action'>Action</option>
                                <option value='comedy'>Comedy</option>
                                <option value='fantasy'>Fantasy</option>
                                <option value='adventure'>Adventure</option>
                                <option value='drama'>Drama</option>
                                <option value='horror'>Horror</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Category</label>
                            <select name='category' class='form-control'>
                                <option value='anime'>Anime</option>
                                <option value='movie'>Movie</option>
                                <option value='tvshow'>Tv Show</option>
                                <option value='games'>Games</option>
                            </select>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\M.I.L.O.F\resources\views/entertainment/create.blade.php ENDPATH**/ ?>