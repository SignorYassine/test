

<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
                    <h1 class="text">Tv Shows</h1>
                    
                </div>
            </div>
        </div>
        <div class="mb-5">
        <center>
            <h4 class="text">Action</h4>
        </center>    
        
            <div class="slider">
                <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($v->genre == "action"): ?>
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
            <h4 class="text">Comedy</h4>
        </center>    
        
            <div class="slider">
                <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($v->genre == "comedy"): ?>
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
            <h4 class="text">Fantasy</h4>

            </center>
                        <div class="slider">
                <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($v->genre == "fantasy"): ?>
                    <a href="<?php echo e(route('info', $v->id)); ?>" class='main'>
                        <div class='card'>
                            <img class="card-img-top entertainments" src="<?php echo e(asset('uploads/entertainments/'.$v->img)); ?>"  alt="img" >
                            <div class="card-body text-center bg-dark text-white">
                                <h5 class="card-title"><?php echo e($v->name); ?></h5>
                            </div>
                        </div>
                    </a>div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="mb-5">
        <center>
            <h4 class="text">Adventure</h4>
        </center>    
        
            <div class="slider">
                <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($v->genre == "adventure"): ?>
                    <a href="<?php echo e(route('info', $v->id)); ?>" class='main'>
                        <div class='card'>
                            <img class="card-img-top entertainments" src="<?php echo e(asset('uploads/entertainments/'.$v->img)); ?>"  alt="img" >
                            <div class="card-body text-center bg-dark text-white">
                                <h5 class="card-title"><?php echo e($v->name); ?></h5>
                            </div>
                        </div>
                    </a>div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="mb-5">
        <center>
            <h4 class="text">Drama</h4>
        </center>    
        
            <div class="slider">
                <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($v->genre == "drama"): ?>
                    <a href="<?php echo e(route('info', $v->id)); ?>" class='main'>
                        <div class='card'>
                            <img class="card-img-top entertainments" src="<?php echo e(asset('uploads/entertainments/'.$v->img)); ?>"  alt="img" >
                            <div class="card-body text-center bg-dark text-white">
                                <h5 class="card-title"><?php echo e($v->name); ?></h5>
                            </div>
                        </div>
                    </a>div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="mb-5">
        <center>
            <h4 class="text">Horror</h4>
        </center>    
        
            <div class="slider">
                <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($v->genre == "horror"): ?>
                    <a href="<?php echo e(route('info', $v->id)); ?>" class='main'>
                        <div class='card'>
                            <img class="card-img-top entertainments" src="<?php echo e(asset('uploads/entertainments/'.$v->img)); ?>"  alt="img" >
                            <div class="card-body text-center bg-dark text-white">
                                <h5 class="card-title"><?php echo e($v->name); ?></h5>
                            </div>
                        </div>
                    </a>div>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\M.I.L.O.F\resources\views/pages/tvshows.blade.php ENDPATH**/ ?>