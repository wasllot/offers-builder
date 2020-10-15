<?php $productImageHelper = app('Webkul\Product\Helpers\ProductImage'); ?>
<?php $reviewHelper = app('Webkul\Product\Helpers\Review'); ?>
<?php $toolbarHelper = app('Webkul\Product\Helpers\Toolbar'); ?>


<?php $__env->startPush('css'); ?>
    <style type="text/css">
        .list-card .wishlist-icon i {
            padding-left: 10px;
        }

        .product-price span:first-child, .product-price span:last-child {
            font-size: 18px;
            font-weight: 600;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php
    if (isset($checkmode) && $checkmode && $toolbarHelper->getCurrentMode() == "list") {
        $list = true;
    }
?>

<?php
    $productBaseImage = $productImageHelper->getProductBaseImage($product);
    $totalReviews = $reviewHelper->getTotalReviews($product);
    $avgRatings = ceil($reviewHelper->getAverageRating($product));
?>

<?php echo view_render_event('bagisto.shop.products.list.card.before', ['product' => $product]); ?>

    <?php if(isset($list) && $list): ?>

        <div class="col-md-12">
            <div class="job-post-item p-4 d-block d-lg-flex align-items-center">

            <div class="one-third mb-4 mb-md-0">

                <div class="job-post-item-header align-items-center">

                    <span class="subadge">Partime</span>

                    <h2 class="mr-3 text-black">
                        <a href="<?php echo e(route('shop.productOrCategory.index', $product->url_key)); ?>" title="<?php echo e($product->name); ?>"><?php echo e($product->name); ?></a>
                        <?php echo $__env->make('shop::products.price', ['product' => $product], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </h2>
                    

                </div>

                <div class="job-post-item-body d-block d-md-flex">

                    <div class="mr-3">
                        
                        <span class="icon-layers"></span>
                            <a href="#">Facebook, Inc.</a>
                    </div>

                    <div>
                        <span class="icon-my_location"></span> 
                        <span>Western City, UK</span>
                    </div>

                </div>

            </div>
            
           
                        <?php echo $__env->make('shop::products.add-to-cart', [
                            'product' => $product,
                            'showCompare' => false,
                            'showWishlist' => false,
                            'addWishlistClass' => 'pl10',
                            'addToCartBtnClass' => 'medium-padding'
                        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


            </div>
        </div>
   
    <?php else: ?>
        <div class="card grid-card product-card-new">
            <a
                href="<?php echo e(route('shop.productOrCategory.index', $product->url_key)); ?>"
                title="<?php echo e($product->name); ?>"
                class="product-image-container">

                <img
					loading="lazy"
                    class="card-img-top"
                    alt="<?php echo e($product->name); ?>"
                    src="<?php echo e($productBaseImage['large_image_url']); ?>"
                    :onerror="`this.src='${this.$root.baseUrl}/vendor/webkul/ui/assets/images/product/large-product-placeholder.png'`" />

                    
            </a>

            <div class="card-body">
                <div class="product-name col-12 no-padding">
                    <a
                        href="<?php echo e(route('shop.productOrCategory.index', $product->url_key)); ?>"
                        title="<?php echo e($product->name); ?>"
                        class="unset">

                        <span class="fs16"><?php echo e($product->name); ?></span>
                    </a>
                </div>

                <div class="product-price fs16">
                    <?php echo $__env->make('shop::products.price', ['product' => $product], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <?php if($totalReviews): ?>
                    <div class="product-rating col-12 no-padding">
                        <star-ratings ratings="<?php echo e($avgRatings); ?>"></star-ratings>
                        <span class="align-top">
                            <?php echo e(__('velocity::app.products.ratings', ['totalRatings' => $totalReviews ])); ?>

                        </span>
                    </div>
                <?php else: ?>
                    <div class="product-rating col-12 no-padding">
                        <span class="fs14"><?php echo e(__('velocity::app.products.be-first-review')); ?></span>
                    </div>
                <?php endif; ?>

                <div class="cart-wish-wrap no-padding ml0">
                    <?php echo $__env->make('shop::products.add-to-cart', [
                        'showCompare'       => true,
                        'product'           => $product,
                        'btnText'           => $btnText ?? null,
                        'moveToCart'        => $moveToCart ?? null,
                        'reloadPage'        => $reloadPage ?? null,
                        'addToCartForm'     => $addToCartForm ?? false,
                        'addToCartBtnClass' => $addToCartBtnClass ?? '',
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php echo view_render_event('bagisto.shop.products.list.card.after', ['product' => $product]); ?>

<?php /**PATH C:\Users\user\Desktop\Agencia - Proyectos en curso\bagisto-flaya/resources/themes/velocity/views/products/list/card.blade.php ENDPATH**/ ?>