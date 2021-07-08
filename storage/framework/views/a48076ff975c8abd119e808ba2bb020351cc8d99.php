

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php if(Session::has('message')): ?>
            <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>                
            <?php endif; ?>
            <div class="card">
                <div class="card-header">
                    <span class="float-right">
                        <a href="<?php echo e(route('category.create')); ?>">
                            <button class="btn btn-primary">Add Category</button>
                        </a>
                    </span>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Sr.nom</th>
                                <th scope="col">Name</th>
                                <th scope="col">View</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>                          
                        </thead>
                        <tbody>
                            <?php if(count($categories)>0): ?>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($key+1); ?></th>
                                        <td><?php echo e($category->name); ?></td>
                                        <td><a href=""><button class="btn btn-outline-primary">View</button></a></td>
                                        <td>
                                            <a href="<?php echo e(route('category.edit',[$category->id])); ?>">
                                                <button class="btn btn-outline-success ">Edit</button>
                                            </a>
                                        </td>
                                        <td>  
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal<?php echo e($category->id); ?>">
                                                Delete
                                            </button>                           
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal<?php echo e($category->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <form action="<?php echo e(route('category.destroy',[$category->id])); ?>" method="post"><?php echo csrf_field(); ?>
                                                        <?php echo e(method_field('DELETE')); ?>

                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Category Delete</h5>
                                                                
                                                            </div>                                                            
                                                            <div class="modal-body">
                                                                Are you sure ?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-outline btn-danger">Delete</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>                                               
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <td>No Categories found.</td>
                            <?php endif; ?>                    
                        </tbody>
                      </table>    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\restaurant\resources\views/category/index.blade.php ENDPATH**/ ?>