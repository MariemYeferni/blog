

<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Catégorie</strong>
          <h5 class="mb-0"><?php echo e($Product->title); ?></h5>
          <p class="mb-auto"><?php echo e($Product->subtitle); ?></p>
          <strong class="mb-auto"><?php echo e($Product->getprice()); ?></strong>

          <a href="<?php echo e(route('products.show',$Product->slug)); ?>" class="stretched-link btn btn-info">Voir l'article</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="<?php echo e($Product->image); ?>" alt="">
        </div>
      </div>
    </div>
        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/products/index.blade.php ENDPATH**/ ?>