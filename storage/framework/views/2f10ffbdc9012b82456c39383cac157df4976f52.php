<?php
    $category[0] = app('Webkul\Category\Repositories\CategoryRepository')->findByPath($category[0]);
    $category[1] = app('Webkul\Category\Repositories\CategoryRepository')->findByPath($category[1]);
    $category[2] = app('Webkul\Category\Repositories\CategoryRepository')->findByPath($category[2]);
    $category[3] = app('Webkul\Category\Repositories\CategoryRepository')->findByPath($category[3]);
?>

<div class="container-fluid category-with-custom-options">
    <div class="row">
        <div class="col pr15">
            <img src="<?php echo e(asset ('/storage/' . $category['2']->image)); ?>" />
        </div>

        <div class="col">
            <div class="card-arrow-container">
                <div class="card-arrow card-arrow-rt"></div>
            </div>

            <div class="categories-collection">
                <div class="category-text-content">
                    <h2 class="text-uppercase">
                        <a href="<?php echo e($category[0]->slug); ?>" class="remove-decoration normal-white-text">
                            <?php echo e($category[0]->name); ?>

                        </a>
                    </h2>
                    <ul type="none" class="fs14">
                        <?php $__currentLoopData = $category[0]->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e($category[0]->slug . '/' . $subCategory->slug); ?>" class="remove-decoration normal-white-text">
                                    <?php echo e($subCategory->name); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col pr15">
            <img src="<?php echo e(asset ('/storage/' . $category['0']->image)); ?>" />
        </div>

        <div class="col">
            <div class="card-arrow-container">
                <div class="card-arrow card-arrow-bt"></div>
            </div>

            <div class="categories-collection">
                <div class="category-text-content">
                    <h2 class="text-uppercase">
                        <a href="<?php echo e($category[1]->slug); ?>" class="remove-decoration normal-white-text">
                            <?php echo e($category[1]->name); ?>

                        </a>
                    </h2>
                    <ul type="none" class="fs14">
                        <?php $__currentLoopData = $category[1]->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e($category[1]->slug . '/' . $subCategory->slug); ?>" class="remove-decoration normal-white-text">
                                    <?php echo e($subCategory->name); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col mr15">
            <div class="card-arrow-container">
                <div class="card-arrow card-arrow-tp"></div>
            </div>

            <div class="categories-collection">
                <div class="category-text-content">
                    <h2 class="text-uppercase">
                        <a href="<?php echo e($category[2]->slug); ?>" class="remove-decoration normal-white-text">
                            <?php echo e($category[2]->name); ?>

                        </a>
                    </h2>
                    <ul type="none" class="fs14">
                        <?php $__currentLoopData = $category[2]->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e($category[2]->slug . '/' . $subCategory->slug); ?>" class="remove-decoration normal-white-text">
                                    <?php echo e($subCategory->name); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col mt15">
            <img src="<?php echo e(asset ('/storage/' . $category['3']->image)); ?>" />
        </div>

        <div class="col mt15 mr15">
            <div class="card-arrow-container">
                <div class="card-arrow card-arrow-lt"></div>
            </div>

            <div class="categories-collection">
                <div class="category-text-content">
                    <h2 class="text-uppercase">
                        <a href="<?php echo e($category[3]->slug); ?>" class="remove-decoration normal-white-text">
                            <?php echo e($category[3]->name); ?>

                        </a>
                    </h2>
                    <ul type="none" class="fs14">
                        <?php $__currentLoopData = $category[3]->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e($category[3]->slug . '/' . $subCategory->slug); ?>" class="remove-decoration normal-white-text">
                                    <?php echo e($subCategory->name); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col">
            <img src="<?php echo e(asset ('/storage/' . $category['1']->image)); ?>" />
        </div>

    </div>
</div>

<div class="container-fluid category-with-custom-options vc-small-screen">
    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoryItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="smart-category-container">
            <div class="col-12">
                <img src="<?php echo e(asset ('/storage/' . $categoryItem->image)); ?>" />
            </div>

            <div class="col-12">
                <div class="card-arrow-container">
                    <div class="card-arrow card-arrow-tp"></div>
                </div>

                <div class="categories-collection">
                    <div class="category-text-content">
                        <h2 class="text-uppercase">
                            <a href="<?php echo e($categoryItem->slug); ?>" class="remove-decoration normal-white-text">
                                <?php echo e($categoryItem->name); ?>

                            </a>
                        </h2>
                        <ul type="none" class="fs14">
                            <?php $__currentLoopData = $categoryItem->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e($categoryItem->slug . '/' . $subCategory->slug); ?>" class="remove-decoration normal-white-text">
                                        <?php echo e($subCategory->name); ?>

                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php /**PATH C:\Users\user\Desktop\website-builder/resources/themes/velocity/views/home/category-with-custom-option.blade.php ENDPATH**/ ?>