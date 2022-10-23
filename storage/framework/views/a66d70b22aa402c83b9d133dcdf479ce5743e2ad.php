
  
<?php $__env->startSection('content'); ?>
 <body class="bg-base-200" data-theme="winter">
    <div class="p-10">

      <div class="md:px-96">
        <div class="form-control">
          <form action="" method="get">
            <div class="form-control m-5">
  <div class="input-group">
    <input type="text" placeholder="Search…" class="input h-16 w-full  input-bordered border-primary"  name="search" />
    <button class="btn btn-lg btn-primary bg-primary" type="submit">
      <svg xmlns="http://www.w3.org/2000/svg" class=" h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
    </button>
  </div>
</div>
          </form>
        </div>
      </div>

      <?php $__currentLoopData = $products->where('posisi', 'Owner Antarestar'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card md:w-1/4 w-full bg-base-100 shadow-xl m-auto">
          <figure class="px-10 pt-10">
            <?php if($produk->image): ?>
                        <img src="/storage/<?php echo e($produk->image); ?>" alt="<?php echo e($produk->nama); ?>" class="rounded-full"/> 
                    <?php else: ?>
                        <img src="/asset/logo_text_antarestar.jpg" alt="Antarestar" class="rounded-full"/>  
                    <?php endif; ?> 
          </figure>
          <div class="card-body text-center">
            <h2 class="text-2xl -mb-2 font-bold text-center"><?php echo e($produk->nama); ?></h2>
            <h2 class="text-lg font-semibold text-center">
              <?php echo e($produk->posisi); ?>

            </h2>
            <div class="card-actions">
              <a href="<?php echo e(route('profile.detail',$produk->slug)); ?>" class="btn btn-block text-white">Lihat Profile</a>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <div class="flex flex-wrap justify-center mt-10">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card md:w-1/5 w-full bg-base-100 shadow-xl h-[450px] mx-3 mt-5">
          <figure class="px-10 pt-10">
            <?php if($product->image): ?>
                        <img src="/storage/<?php echo e($product->image); ?>" alt="<?php echo e($product->nama); ?>" class="rounded-full"/> 
                    <?php else: ?>
                        <img src="/asset/logo_text_antarestar.jpg" alt="Antarestar" class="rounded-full"/>  
                    <?php endif; ?>
          </figure>
          <div class="card-body text-center">
            <h3 class="text-2xl -mb-2 font-bold text-center">
              <?php echo e($product->nama); ?>

            </h3>
            <h3 class="text-lg font-semibold text-center">
              <?php echo e($product->posisi); ?>

            </h3>

            <div class="card-actions">
              <a href="<?php echo e(route('profile.detail',$product->slug)); ?>" class="btn btn-block text-white">Lihat Profile</a>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
      </div>
      <div class="my-5">
        <?php echo e($products->withQueryString()->links()); ?>

    </div>
    </div>
    
  </body>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('profile.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\company-card-profile\resources\views/profile/home.blade.php ENDPATH**/ ?>