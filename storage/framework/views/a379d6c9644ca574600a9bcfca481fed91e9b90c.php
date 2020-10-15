<?php $selectedOption = old($attribute->code) ?: $product[$attribute->code] ?>

<label class="switch">
    <input type="checkbox" class="control" id="<?php echo e($attribute->code); ?>" name="<?php echo e($attribute->code); ?>" data-vv-as="&quot;<?php echo e($attribute->admin_name); ?>&quot;" <?php echo e($selectedOption ? 'checked' : ''); ?> value="1">
    <span class="slider round"></span>
</label><?php /**PATH C:\Users\user\Desktop\Agencia - Proyectos en curso\bagisto-flaya\packages\Webkul\Admin\src\Providers/../Resources/views/catalog/products/field-types/boolean.blade.php ENDPATH**/ ?>