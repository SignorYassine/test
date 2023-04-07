

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
                    <h1 class="text">Rating
                    <a href="<?php echo e(url('add-pic')); ?>" class="btn btn-primary float-end">Add pic</a>
                    </h1>
                    
                </div>
            </div>
        </div>
        <div class="mb-5">
        <center>
            <h4 class="text">Action</h4>
        </center>    
        
            <div class="slider">
                <?php $__currentLoopData = $pics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($v->genre == "Action"): ?>
                        
                    <img class="pics" src="<?php echo e(asset('uploads/pics/'.$v->img)); ?>"  alt="img" >
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="mb-5">
        <center>
            <h4 class="text">Comedy</h4>
        </center>    
        
            <div class="slider">
                <?php $__currentLoopData = $pics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($v->genre == "comedy"): ?>
                        
                    <img class="pics" src="<?php echo e(asset('uploads/pics/'.$v->img)); ?>"  alt="img" >
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div>
            <div class="slider-for">

            </di class="mb-5"v>
            <center>
            <h4 class="text">Anime</h4>

            </center>
                        <div class="slider">
                <?php $__currentLoopData = $pics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($v->genre == "Anime"): ?>
                    
                        
                    <img class="pics" src="<?php echo e(asset('uploads/pics/'.$v->img)); ?>"  alt="img" >
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        
    </div>
</div>

<script src="<?php echo e(mix('js/app.js')); ?>"></script>
<script>
    $(document).ready(function() {
$('.slider').slick({
    infinite: true,
  slidesToShow: 5,
  slidesToScroll: 3
});
    });
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\milof\resources\views/pic/index.blade.php ENDPATH**/ ?>