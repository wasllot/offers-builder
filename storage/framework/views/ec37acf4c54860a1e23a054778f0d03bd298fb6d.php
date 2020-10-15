<?php $__env->startSection('page_title'); ?>
    <?php echo e(__('admin::app.catalog.products.title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content" style="height: 100%;">
        <?php $locale = request()->get('locale') ?: null; ?>
        <?php $channel = request()->get('channel') ?: null; ?>
        <div class="page-header">
            <div class="page-title">
                <h1><?php echo e(__('admin::app.catalog.products.title')); ?></h1>

                <div class="control-group">
                    <select class="control" id="channel-switcher" name="channel" onchange="reloadPage('channel', this.value)" >
                        <option value="all" <?php echo e(! isset($channel) ? 'selected' : ''); ?>>
                            <?php echo e(__('admin::app.admin.system.all-channels')); ?>

                        </option>

                        <?php $__currentLoopData = core()->getAllChannels(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $channelModel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <option
                                    value="<?php echo e($channelModel->code); ?>" <?php echo e((isset($channel) && ($channelModel->code) == $channel) ? 'selected' : ''); ?>>
                                <?php echo e($channelModel->name); ?>

                            </option>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="control-group">
                    <select class="control" id="locale-switcher" name="locale" onchange="reloadPage('locale', this.value)" >
                        <option value="all" <?php echo e(! isset($locale) ? 'selected' : ''); ?>>
                            <?php echo e(__('admin::app.admin.system.all-locales')); ?>

                        </option>

                        <?php $__currentLoopData = core()->getAllLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeModel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <option
                                    value="<?php echo e($localeModel->code); ?>" <?php echo e((isset($locale) && ($localeModel->code) == $locale) ? 'selected' : ''); ?>>
                                <?php echo e($localeModel->name); ?>

                            </option>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>

            <div class="page-action">
                <div class="export-import" @click="showModal('downloadDataGrid')">
                    <i class="export-icon"></i>
                    <span >
                        <?php echo e(__('admin::app.export.export')); ?>

                    </span>
                </div>

                <a href="<?php echo e(route('admin.catalog.products.create')); ?>" class="btn btn-lg btn-primary">
                    <?php echo e(__('admin::app.catalog.products.add-product-btn-title')); ?>

                </a>
            </div>
        </div>

        <?php echo view_render_event('bagisto.admin.catalog.products.list.before'); ?>


        <div class="page-content">
            <?php $products = app('Webkul\Admin\DataGrids\ProductDataGrid'); ?>
            <?php echo $products->render(); ?>

        </div>

        <?php echo view_render_event('bagisto.admin.catalog.products.list.after'); ?>


    </div>

    <modal id="downloadDataGrid" :is-open="modalIds.downloadDataGrid">
        <h3 slot="header"><?php echo e(__('admin::app.export.download')); ?></h3>
        <div slot="body">
            <export-form></export-form>
        </div>
    </modal>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo $__env->make('admin::export.export', ['gridName' => $products], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>

        function reloadPage(getVar, getVal) {
            let url = new URL(window.location.href);
            url.searchParams.set(getVar, getVal);

            window.location.href = url.href;
        }
        
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin::layouts.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\Agencia - Proyectos en curso\bagisto-flaya\packages\Webkul\Admin\src\Providers/../Resources/views/catalog/products/index.blade.php ENDPATH**/ ?>