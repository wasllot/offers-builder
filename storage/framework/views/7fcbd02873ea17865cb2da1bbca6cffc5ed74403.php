<date>
    <input type="text" name="<?php echo e($attribute->code); ?>" class="control" v-validate="<?php echo e($attribute->is_required ? 'required' : ''); ?>" value="<?php echo e(old($attribute->code) ?: $product[$attribute->code]); ?>" data-vv-as="&quot;<?php echo e($attribute->admin_name); ?>&quot;"/>
</date><?php /**PATH C:\Users\user\Desktop\Agencia - Proyectos en curso\bagisto-flaya\packages\Webkul\Admin\src\Providers/../Resources/views/catalog/products/field-types/date.blade.php ENDPATH**/ ?>