
 
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('admin.create')); ?>"> Create New Profile</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search">
                    <button class="btn btn-secondary text-black" type="submit" >Search</button>
                </div>
            </form>
        </div>
    </div>
   
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Posisi</th>
            <th>Deskripsi</th>
            <th>Phone</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php if($product->image): ?>
                    <img src="/storage/<?php echo e($product->image); ?>" style="width:40px; height:40px;"  />
                <?php else: ?>
                    <img src="/asset/logo_no_bg.png" style="width:40px; height:40px;"  />
                <?php endif; ?>
            </td>
            <td><?php echo e($product->nama); ?></td>
            <td><?php echo e($product->posisi); ?></td>
            <td><?php echo e($product->deskripsi); ?></td>
            <td><?php echo e($product->phone); ?></td>
            <td><?php echo e($product->email); ?></td>
            <td>
                <form action="<?php echo e(route('products.destroy',$product->id)); ?>" method="POST">
   
                    <a class="btn btn-info" href="<?php echo e(route('products.show',$product->slug)); ?>">Show</a>
    
                    <a class="btn btn-primary" href="<?php echo e(route('products.edit',$product->id)); ?>">Edit</a>
   
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
      
                    <button type="submit" class="btn btn-warning">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <div class="my-5">
        <?php echo e($products->withQueryString()->links()); ?>

    </div>  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\company-card-profile\resources\views/admin/index.blade.php ENDPATH**/ ?>