<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" data-theme="night">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    

    <title>Admin Antarestar</title>
    
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.33.0/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
      theme: {
         container: {
      center: true,
      padding: "16px",
    },
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
    <!-- Fonts -->
    

    <!-- Scripts -->
    
</head>
<body>
    <div id="app">
        <div class="navbar bg-base-200 ">
   <div class="container">        
  <div class="flex-1">
    <a class="btn btn-ghost normal-case text-xl" href="<?php echo e(url('/')); ?>">Antarestar</a>
  </div>
   <ul>
                <li>  <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="badge badge-primary" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="badge badge-primary" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                                    <a class="dropdown-item badge badge-primary" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                
                        <?php endif; ?></li>
            </ul>
  <div class="flex-none gap-2">
     
                                   
                                
    </div> 
  </div>
</div>
      
        <main class="py-4">
    
<div class="container">
    <?php echo $__env->yieldContent('content'); ?>
</div>

</body>
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
</html><?php /**PATH C:\Laravel\company-card-profile\resources\views/admin/layout.blade.php ENDPATH**/ ?>