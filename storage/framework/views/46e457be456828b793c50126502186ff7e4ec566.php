<div class="footer-copy-right">
    <span>
        <?php if(core()->getConfigData('general.content.footer.footer_content')): ?>
            <?php echo core()->getConfigData('general.content.footer.footer_content'); ?>

        <?php else: ?>
            <?php echo trans('admin::app.footer.copy-right'); ?>

        <?php endif; ?>
    </span>
</div>
<?php /**PATH C:\Users\user\Desktop\website-builder/resources/themes/velocity/views/layouts/footer/copy-right.blade.php ENDPATH**/ ?>