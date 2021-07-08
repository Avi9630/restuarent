

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php if(Session::has('message')): ?>
                <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>                
            <?php endif; ?>
            <form action=" <?php echo e(route('category.update',[$category->id])); ?> " method="post"><?php echo csrf_field(); ?>
                <?php echo e(method_field('PUT')); ?>            
                <div class="card">
                    <div class="card-header"><?php echo e(__('Update Category')); ?></div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($category->name); ?>" placeholder="Enter Category Name">
                        
                        </div>
                        <div class="form-group">
                            
                            <button class="btn btn-outline-primary">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\restaurant\resources\views/category/edit.blade.php ENDPATH**/ ?>