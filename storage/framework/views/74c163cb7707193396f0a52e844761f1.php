

<?php $__env->startSection('content'); ?>

<div class="container mt-5">
  <a href="<?php echo e(route('list')); ?>" class="btn btn-primary m-3">List</a>
  <a href="<?php echo e(route('admin.user')); ?>" class="btn btn-primary">Users</a>
  <a href="<?php echo e(url('add-entertainment')); ?>" class="btn btn btn-primary m-3">Add an entertainment</a>
  <div>
    <center>
      <h1 class="text-white">List</h1>  
    </center>
  </div>
  
  <div class="d-flex justify-content-between mb-3">
    <div class="col-md-5">
        <form action="<?php echo e(route('list.search')); ?>" method="GET" class="d-flex justify-content-start align-items-center">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search by name">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
    </div>

    <div class="col-md-4">
        <form action="<?php echo e(route('list.filter')); ?>" method="GET" class="d-flex justify-content-end align-items-center float-end">
            <div class="input-group">
                <label for="genre" class="form-label me-3 text-white">Filter by genre:</label>
                <select name="genre" id="genre" class="form-select rounded">
                    <option value="">All</option>
                    <option value="anime">Anime</option>
                    <option value="action">Action</option>
                    <option value="comedy">Comedy</option>
                </select>
                <button type="submit" class="btn btn-primary ms-3 rounded">Filter</button>
            </div>
        </form>
    </div>
</div>



  <table class="table table-bordered border border-3 border-secondary text-white text-center rounded">
    <thead class="bg-dark">
      <tr>
        <th>IMG</th>
        <th>Name</th>
        <th>Genre</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td>
          <img class="img-fluid rounded shadow border border-3 border-secondary" width="150" src="<?php echo e(asset('uploads/entertainments/'.$v->img)); ?>" alt="img">
        </td>
        <td><?php echo e($v->name); ?></td>
        <td><?php echo e($v->genre); ?></td>
        <td><a href="<?php echo e(route('list.edit', $v->id)); ?>" class="btn btn-warning">Edit</a></td>
        <td><a href="<?php echo e(route('list.check', $v->id)); ?>" class="btn btn-danger">Delete</a></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\M.I.L.O.F\resources\views/admin/list.blade.php ENDPATH**/ ?>