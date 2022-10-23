
 
<?php $__env->startSection('content'); ?>
    
<div class="p-10 center">
    <div class="row " data-theme="night">
        <div class="flex my-3">
              <a class="btn" href="<?php echo e(route('admin.create')); ?>"> Create New Profile</a>
           
        </div>
    </div>
   
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
   
    <table class="table table-zebra table-fixed  ">
        <tr>
            <th >No</th>
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
            <td>
                <div class="avatar">
                <div class="mask mask-squircle w-12 h-12"> <?php if($product->image): ?>
                    <img src="/storage/<?php echo e($product->image); ?>" style="width:40px; height:40px;"  />
                <?php else: ?>
                    <img src="/asset/logo_no_bg.png" style="width:40px; height:40px;"  />
                <?php endif; ?></div>
                </div>
               
            </td>
            <td><?php echo e($product->nama); ?></td>
            <td><?php echo e($product->posisi); ?></td>
            <td><?php echo e($product->deskripsi); ?></td>
            <td><?php echo e($product->phone); ?></td>
            <td><?php echo e($product->email); ?></td>
            <td>
                <form action="<?php echo e(route('products.destroy',$product->id)); ?>" method="POST">
   
                    <a class="badge badge-info" href="<?php echo e(route('products.show',$product->slug)); ?>">Show</a>
    
                    <a class="badge badge-primary" href="<?php echo e(route('products.edit',$product->id)); ?>">Edit</a>
   
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
      
                    <button type="submit" class="badge badge-md text-white">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <div class="my-5">
        <?php echo e($products->withQueryString()->links()); ?>

    </div>  

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\company-card-profile\resources\views/admin/index.blade.php ENDPATH**/ ?>