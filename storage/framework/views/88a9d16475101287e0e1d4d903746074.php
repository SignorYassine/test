<?php $__env->startSection('content'); ?>
<link rel='stylesheet' href="resources/js/app.css">
<div class="container">
    <div class="row">
        <div class="col-md-12">
                    <h1 class="text">Rating</h1>
                </div>
            </div>
        </div>
        <div class="mb-5">
        <center>
            <h4 class="text">Tv Show</h4>
        </center>    
        
            <div class="slider">
                <?php $__currentLoopData = $entertainments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($v->category == "tvshow"): ?>
                    <a href="<?php echo e(route('info', $v->id)); ?>" class='main'>
                        <div class='card'>
                            <img class="card-img-top entertainments" src="<?php echo e(asset('uploads/entertainments/'.$v->img)); ?>"  alt="img" >
                            <div class="card-body text-center bg-dark text-white">
                                <h5 class="card-title"><?php echo e($v->name); ?></h5>
                            </div>
                        </div>
                    </a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="mb-5">
        <center>
            <h4 class="text">Movie</h4>
        </center>    
        
            <div class="slider">
                <?php $__currentLoopData = $entertainments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($v->category == "movie"): ?>
                    <a href="<?php echo e(route('info', $v->id)); ?>" class='main'>
                        <div class='card'>
                            <img class="card-img-top entertainments" src="<?php echo e(asset('uploads/entertainments/'.$v->img)); ?>"  alt="img" >
                            <div class="card-body text-center bg-dark text-white">
                                <h5 class="card-title"><?php echo e($v->name); ?></h5>
                            </div>
                        </div>
                    </a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <div class="mb-5">
            <center>
            <h4 class="text">Anime</h4>

            </center>
            <div class="slider">
                <?php $__currentLoopData = $entertainments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($v->category == "anime"): ?>
                    <a href="<?php echo e(route('info', $v->id)); ?>" class='main'>
                        <div class='card'>
                            <img class="card-img-top entertainments" src="<?php echo e(asset('uploads/entertainments/'.$v->img)); ?>"  alt="img" >
                            <div class="card-body text-center bg-dark text-white">
                                <h5 class="card-title"><?php echo e($v->name); ?></h5>
                            </div>
                        </div>
                    </a>    
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="mb-5">
        <center>
            <h4 class="text">Games</h4>
        </center>    
        
            <div class="slider">
                <?php $__currentLoopData = $entertainments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($v->category == "games"): ?>
                    <a href="<?php echo e(route('info', $v->id)); ?>" class='main'>
                        <div class='card'>
                            <img class="card-img-top entertainments" src="<?php echo e(asset('uploads/entertainments/'.$v->img)); ?>"  alt="img" >
                            <div class="card-body text-center bg-dark text-white">
                                <h5 class="card-title"><?php echo e($v->name); ?></h5>
                            </div>
                        </div>
                    </a>
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
        slidesToShow: 6,
        slidesToScroll: 3
    });
    });
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\M.I.L.O.F\resources\views/home.blade.php ENDPATH**/ ?>