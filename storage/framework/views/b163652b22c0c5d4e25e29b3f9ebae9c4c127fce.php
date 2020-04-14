

<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <h2>Mon panier</h2>
</div>
<?php if(Cart::count() > 0): ?>
<div class="px-4 px-lg-0">
    <div class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
                    <!-- Shopping cart table -->
                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                            <tr>
                            <th scope="col" class="border-0 bg-light">
                                <div class="p-2 px-3 text-uppercase">Produit</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                                <div class="py-2 text-uppercase">Prix</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                                <div class="py-2 text-uppercase">Quantité</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                                <div class="py-2 text-uppercase">Supprimer</div>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row" class="border-0">
                                    <div class="p-2">
                                        <img src="<?php echo e($Product->model->image); ?>" alt="" width="70" class="img-fluid rounded shadow-sm">
                                        <div class="ml-3 d-inline-block align-middle">
                                            <h5 class="mb-0"> <a href="<?php echo e(route('products.show', ['slug' => $Product->model->slug])); ?>" class="text-dark d-inline-block align-middle"><?php echo e($Product->model->title); ?></a></h5><span class="text-muted font-weight-normal font-italic d-block"></span>
                                        </div>
                                    </div>
                                </th>
                                <td class="border-0 align-middle"><strong><?php echo e($Product->model->getPrice()); ?></strong></td>
                                <td class="border-0 align-middle"><strong>1</strong></td>
                                <td class="border-0 align-middle">
                                    <form action="<?php echo e(route('cart.destroy', $Product->rowId)); ?>" method="get">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        </table>
                    </div>
                    <!-- End -->
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class="row py-5 p-4 bg-white rounded shadow-sm">
    <div class="col-lg-12">
    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Plus de détails </div>
    <div class="p-4">
        <ul class="list-unstyled mb-4">
        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Sous-total </strong><strong><?php echo e(getPrice(Cart::Subtotal())); ?></strong></li>
        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong><?php echo e(getPrice(Cart::tax())); ?></strong></li>
        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
            <h5 class="font-weight-bold"><?php echo e(getPrice(Cart::total())); ?></h5>
        </li>
        </ul><a href="<?php echo e(route('checkout.index')); ?>" class="btn btn-dark rounded-pill py-2 btn-block">FINALISER VOTRE COMMANDE</a>
    </div>
    </div>
</div>
</div>
<?php else: ?>

<div class="row py-5 p-4 bg-white rounded shadow-sm">
    <div class="col-lg-12">
         <div class="p-4">
        <img class="lazy image -mbxl -loaded" width="160" height="160" src="https://www.jumia.com.tn/images/oshun/cart/empty-cart.png" data-src="https://www.jumia.com.tn/images/oshun/cart/empty-cart.png" alt="">
        <div class="color-default-700 -fs-22 -b -pbxl"><h3>Votre panier est vide !</h3></div><div class="cms color-default-900 -fs-17 -pbxl"></div><br>
        </ul><a href="<?php echo e(route('products.index')); ?>" class="btn btn-dark rounded-pill py-2 btn-block mt-2">COMMENCER VOS ACHATS</a>
        
    </div>
      </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/cart/index.blade.php ENDPATH**/ ?>