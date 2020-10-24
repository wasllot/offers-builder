<div class="container-fluid popular-categories-container">
    <card-list-header heading="<?php echo e(__('velocity::app.home.popular-categories')); ?>">
    </card-list-header>

    <div class="row">
        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slug): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $categoryDetails = app('Webkul\Category\Repositories\CategoryRepository')->findByPath($slug);
            ?>

            <?php if($categoryDetails): ?>
                <div class="col-lg-3 col-md-12 popular-category-wrapper">
                    <div class="card col-12 no-padding">
                        <div class="category-image">
                            <img src="<?php echo e(asset('/storage/' . $categoryDetails->image)); ?>" />
                        </div>

                        <div class="card-description">
                            <h3 class="fs20"><?php echo e($categoryDetails->name); ?></h3>

                            <ul class="font-clr pl30">
                                <?php $__currentLoopData = $categoryDetails->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e($subCategory->slug); ?>" class="remove-decoration normal-text">
                                            <?php echo e($subCategory->name); ?>

                                        </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\Users\user\Desktop\website-builder/resources/themes/velocity/views/home/popular-categories.blade.php ENDPATH**/ ?>