


<?php $__env->startSection('content'); ?>
<div class="col-md-12">
  <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
      <strong class="d-inline-block mb-2 text-success">Categorie</strong>
      <h5 class="mb-0"><?php echo e($Product->title); ?></h5>
      <p class="mb-auto"><?php echo e($Product->description); ?></p>
      <strong class="mb-auto font-weight-normal text-secondary"><?php echo e($Product->getprice()); ?></strong>
    <form action="<?php echo e(route('cart.store')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <input type="hidden" name="product_id" value="<?php echo e($Product->id); ?>">
      <button type="submit" class="btn btn-dark">Ajouter au panier</button>
    </form>  
    </div>
    <div class="col-auto d-none d-lg-block">
      <img src="<?php echo e($Product->image); ?>" alt="">
    </div>
  </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/products/show.blade.php ENDPATH**/ ?>