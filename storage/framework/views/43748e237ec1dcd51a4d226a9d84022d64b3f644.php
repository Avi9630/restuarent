

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Product</div>
                    <img src="<?php echo e(asset('images')); ?>//<?php echo e($food->image); ?>" class="img-responsibe" width="160" height="150">
                <div class="card-body">
                    
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail</div>
                <div class="card-body">
                    <p><h3 style="scrollbar-color: red"><?php echo e($food->name); ?></h3></p>
                    <p class="lead"><h4><?php echo e($food->description); ?></h4></p>
                    <p><h4 style="color: blue">₹<?php echo e($food->price); ?></h4></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\restaurant\resources\views/food/detail.blade.php ENDPATH**/ ?>