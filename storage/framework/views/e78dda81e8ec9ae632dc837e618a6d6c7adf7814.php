<div class="col-lg-4 col-md-12 col-sm-12 software-description">
    <div class="logo">
        <a href="<?php echo e(route('shop.home.index')); ?>">
            <?php if($logo = core()->getCurrentChannel()->logo_url): ?>
                <h2 class="text-white">Offer Builder</h2>
            <?php else: ?>
            <h2 class="text-white">Offer Builder</h2>
            <?php endif; ?>

        </a>
    </div>

    <?php if($velocityMetaData): ?>
        <?php echo $velocityMetaData->footer_left_content; ?>

    <?php else: ?>
        <?php echo __('velocity::app.admin.meta-data.footer-left-raw-content'); ?>

    <?php endif; ?>
</div><?php /**PATH C:\Users\user\Desktop\Agencia - Proyectos en curso\bagisto-flaya/resources/themes/velocity/views/layouts/footer/footer-links/footer-left.blade.php ENDPATH**/ ?>