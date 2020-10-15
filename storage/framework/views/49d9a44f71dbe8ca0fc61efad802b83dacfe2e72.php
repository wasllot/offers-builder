<script type="text/x-template" id="export-form-template">
    <form method="POST" action="<?php echo e(route('admin.datagrid.export', ['locale' => request()->get('locale')])); ?>" @submit.prevent="onSubmit">

        <div class="page-content">
            <div class="form-container">
                <?php echo csrf_field(); ?>

                <input type="hidden" name="gridName" value="<?php echo e(get_class($gridName)); ?>">

                <div class="control-group">
                    <label for="format" class="required">
                        <?php echo e(__('admin::app.export.format')); ?>

                    </label>

                    <select name="format" class="control" v-validate="'required'">
                        <option value="xls"><?php echo e(__('admin::app.export.xls')); ?></option>
                        <option value="csv"><?php echo e(__('admin::app.export.csv')); ?></option>
                    </select>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-lg btn-primary">
            <?php echo e(__('admin::app.export.export')); ?>

        </button>

    </form>
</script>

<script>
    Vue.component('export-form', {
        template: '#export-form-template',

        methods: {
            onSubmit: function(e) {
                e.target.submit();

                this.$root.$set(this.$root.modalIds, 'downloadDataGrid', false);
            }
        }
    });
</script><?php /**PATH C:\Users\user\Desktop\Agencia - Proyectos en curso\bagisto-flaya\packages\Webkul\Admin\src\Providers/../Resources/views/export/export.blade.php ENDPATH**/ ?>