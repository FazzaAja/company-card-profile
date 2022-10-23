
  
<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="pull-right">
            <a class="badge-lg badge badge-primary" href="<?php echo e(route('admin.index')); ?>"> Back</a>
        </div>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2  class="font-bold text-3xl text-center ">Tambah Data</h2>
        </div>
    
    </div>
</div>
   
<?php if($errors->any()): ?>
    <div class="">
       
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
   

<!-- component -->
<div class="flex items-center justify-center p-12">

  <div class="mx-auto w-full max-w-[700px] h-full">
    <form action="<?php echo e(route('products.store')); ?>" method="POST" enctype="multipart/form-data">
         <?php echo csrf_field(); ?>
      <div class="-mx-3 flex flex-wrap">
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="nama"
              class="mb-3 block text-base font-medium "
            >
            Nama
            </label>
            <input type="text" name="nama" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="Masukan Nama" value="<?php echo e(old('nama')); ?>">
          </div>
        </div>
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="lName"
              class="mb-3 block text-base font-medium "
            >
              Posisi
            </label>
            <input type="text" name="posisi" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="Masukan Posisi" value="<?php echo e(old('posisi')); ?>">
          </div>
        </div>
      </div>
      <div class="mb-5">
        <label
          for="guest"
          class="mb-3 block text-base font-medium "
        >
          foto
        </label>
       <input type="file" name="image" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="image" onchange="previewImage()">
                <img class="img-preview w-full h-full m-3"  />
                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <div class="-mx-3 flex flex-wrap">
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="date"
              class="mb-3 block text-base font-medium "
            >
              email
            </label>
            <input type="email" name="email" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="@gmail.com" value="<?php echo e(old('email')); ?>">
          </div>
        </div>
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="time"
              class="mb-3 block text-base font-medium "
            >
              Phone
            </label>
             <input type="number" name="phone" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" value="62" placeholder="62" value="<?php echo e(old('phone')); ?>">
          </div>
        </div>
         <div class="w-full px-3">
          <div class="mb-5">
            <label
              for="time"
              class="mb-3 block text-base font-medium "
            >
              deskripsi    
            </label>
               <textarea class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" style="height:150px" name="deskripsi" placeholder="mausakan deskripsi"><?php echo e(old('deskripsi')); ?></textarea>
          </div>
      </div>
        <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="time"
              class="mb-3 block text-base font-medium "
            >
              Instagram
            </label>
              <input type="text" name="instagram" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="https://" value="<?php echo e(old('instagram')); ?>">
          </div>
          
        </div>
          <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="time"
              class="mb-3 block text-base font-medium "
            >
              Facebook
            </label>
              <input type="text" name="facebook" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="https://" value="<?php echo e(old('facebook')); ?>">
          </div>
          
        </div>
          <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="time"
              class="mb-3 block text-base font-medium "
            >
              Tiktok
            </label>
              <input type="text" name="tiktok" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="https://" value="<?php echo e(old('tiktok')); ?>">
          </div>
          
        </div>
          <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="time"
              class="mb-3 block text-base font-medium "
            >
              Twitter
            </label>
              <input type="text" name="twitter" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="https://" value="<?php echo e(old('twitter')); ?>">
          </div>
          
        </div>
          <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="time"
              class="mb-3 block text-base font-medium "
            >
              Youtube
            </label>
              <input type="text" name="youtube" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="https://" value="<?php echo e(old('youtube')); ?>">
          </div>
          
        </div>
          <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="time"
              class="mb-3 block text-base font-medium "
            >
              Linkedin
            </label>
              <input type="text" name="linkedin" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="https://" value="<?php echo e(old('linkedin')); ?>">
          </div>
          
        </div>
          <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="time"
              class="mb-3 block text-base font-medium "
            >
              Web Personal
            </label>
              <input type="text" name="web" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="https://" value="<?php echo e(old('web')); ?>">
          </div>
          
        </div>
          <div class="w-full px-3 sm:w-1/2">
          <div class="mb-5">
            <label
              for="time"
              class="mb-3 block text-base font-medium "
            >
              Pinterest
            </label>
              <input type="text" name="pinterest" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="https://" value="<?php echo e(old('pinterest')); ?>">
          </div>
          
        </div>
          <div class="w-full px-3">
          <div class="mb-5">
            <label
              for="time"
              class="mb-3 block text-base font-medium "
            >
              SoundCloud    
            </label>
              <input type="text" name="soundcloud" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="https://" value="<?php echo e(old('soundcloud')); ?>">
          </div>
      </div>
         


      <div class="flex flex-wrap">
       
        <div class=" ">
          
          
        </div>
      </div>
      </div>
      <div>
        <button
          class="btn btn-pr"
        >
          Submit
        </button>
      </div>
    </form>
  </div>
</div>
<script>

function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
}
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\company-card-profile\resources\views/products/create.blade.php ENDPATH**/ ?>