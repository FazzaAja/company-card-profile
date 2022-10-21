
  
<?php $__env->startSection('content'); ?>
 
<div class="row">
    <div class="col-lg-6">
        <h2 class="txt-dark h-2 text-bold">Show Profile</h2>
        <div class="pull-right">
            <a class="btn btn-primary my-2" href="<?php echo e(route('admin.index')); ?>"> Back</a>
            <a class="btn btn-primary" href="<?php echo e(route('products.edit',$product->id)); ?>">Edit</a>
        </div>
        <div class="row">
            <?php if($product->image): ?>
                        <img src="/storage/<?php echo e($product->image); ?>" class="img-preview w-50 h-50 m-3"/>
                    <?php else: ?>
                        <img src="/asset/logo_no_bg.png" style="width:250px; height:250px;"  />
                    <?php endif; ?>
        </div>
        <div class="form-group row">
           <h4 style="font-weight: 600">Nama <span>:</span> <span style="font-weight:400"><?php echo e($product->nama); ?></span></h4>
           <h4 style="font-weight: 600">Posisi <span>:</span> <span style="font-weight:400"><?php echo e($product->posisi); ?></span></h4>
           <h4 style="font-weight: 600">Deskripsi <span>:</span> <span style="font-weight:400"><?php echo e($product->deskripsi); ?></span></h4>
           <h4 style="font-weight: 600">Email <span>:</span> <span style="font-weight:400"><?php echo e($product->email); ?></span></h4>
           <h4 style="font-weight: 600">Phone <span>:</span> <span style="font-weight:400"><?php echo e($product->phone); ?></span></h4>
        </div>
    </div>
    <div class="col-lg-6">
        <table class="table">
            <thead>
                <tr>
                    <th>Sosmed</th>
                    <th>Status</th>				
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Instagram</td>
                    <td><?php if($product->instagram): ?>
                        Ada
                    <?php else: ?>
                        Tidak Ada 
                    <?php endif; ?></td>
                </tr>
                <tr>
                    <td>Facebook</td>
                    <td><?php if($product->facebook): ?>
                        Ada
                    <?php else: ?>
                        Tidak Ada 
                    <?php endif; ?></td>
                </tr>
                <tr>
                    <td>Tiktok</td>
                    <td><?php if($product->tiktok): ?>
                        Ada
                    <?php else: ?>
                        Tidak Ada 
                    <?php endif; ?></td>
                </tr>
                <tr>
                    <td>Twitter</td>
                    <td><?php if($product->twitter): ?>
                        Ada
                    <?php else: ?>
                        Tidak Ada 
                    <?php endif; ?></td>
                </tr>
                <tr>
                    <td>YouTube</td>
                    <td><?php if($product->youtube): ?>
                        Ada
                    <?php else: ?>
                        Tidak Ada 
                    <?php endif; ?></td>
                </tr>
                <tr>
                    <td>Linkedin</td>
                    <td><?php if($product->linkedin): ?>
                        Ada
                    <?php else: ?>
                        Tidak Ada 
                    <?php endif; ?></td>
                </tr>
                <tr>
                    <td>Web</td>
                    <td><?php if($product->web): ?>
                        Ada
                    <?php else: ?>
                        Tidak Ada 
                    <?php endif; ?></td>
                </tr>
                <tr>
                    <td>Pinterest</td>
                    <td><?php if($product->pinterest): ?>
                        Ada
                    <?php else: ?>
                        Tidak Ada 
                    <?php endif; ?></td>
                </tr>
                <tr>
                    <td>SoundCloud</td>
                    <td><?php if($product->soundcloud): ?>
                        Ada
                    <?php else: ?>
                        Tidak Ada 
                    <?php endif; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\company-card-profile\resources\views/products/show.blade.php ENDPATH**/ ?>