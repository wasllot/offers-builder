

<?php echo $__env->make('velocity::UI.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<script type="text/x-template" id="searchbar-template">

    <form class="search-job" method="GET" role="search" id="search-form" action="<?php echo e(route('velocity.search.index')); ?>">
        <div class="row no-gutters">
            <div class="col-md mr-md-2">
                <div class="form-group">
                    <div class="form-field">
                        <div class="icon"><span class="icon-briefcase"></span></div>
                        <input required
                                name="term"
                                type="search"
                                class="form-control"
                                :value="searchedQuery.term ? searchedQuery.term.split('+').join(' ') : ''"
                                placeholder="<?php echo e(__('velocity::app.header.search-text')); ?>">
                    </div>
                </div>
            </div>
            <div class="col-md mr-md-2">
                <div class="form-group">
                    <div class="form-field">
                        <div class="select-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select id="" class="form-control" name="category" @change="focusInput($event)">
                        <option value=""><?php echo e(__('velocity::app.header.all-categories')); ?></option>
                        <template v-for="(category, index) in $root.sharedRootCategories">
                                    <option
                                        :key="index"
                                        selected="selected"
                                        :value="category.id"
                                        v-if="(category.id == searchedQuery.category)">
                                        {{ category.name }}
                                    </option>

                                    <option :key="index" :value="category.id" v-else>
                                        {{ category.name }}
                                    </option>
                                </template>
                    </select>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-md mr-md-2">
                <div class="form-group">
                    <div class="form-field">
                        <div class="icon"><span class="icon-map-marker"></span></div>
                        <input type="text" class="form-control" placeholder="Location">
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="form-group">
                    <div class="form-field">
                        <button type="submit" class="form-control btn btn-primary">Buscar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</script>

<script type="text/javascript">
    (() => {
        Vue.component('searchbar-component', {
            template: '#searchbar-template',
            data: function () {
                return {
                    compareCount: 0,
                    wishlistCount: 0,
                    searchedQuery: [],
                    isCustomer: '<?php echo e(auth()->guard('customer')->user() ? "true" : "false"); ?>' == "true",
                }
            },

            watch: {
                '$root.headerItemsCount': function () {
                    this.updateHeaderItemsCount();
                }
            },

            created: function () {
                let searchedItem = window.location.search.replace("?", "");
                searchedItem = searchedItem.split('&');

                let updatedSearchedCollection = {};

                searchedItem.forEach(item => {
                    let splitedItem = item.split('=');
                    updatedSearchedCollection[splitedItem[0]] = splitedItem[1];
                });

                this.searchedQuery = updatedSearchedCollection;

                this.updateHeaderItemsCount();
            },

            methods: {
                'focusInput': function (event) {
                    $(event.target.parentElement.parentElement).find('input').focus();
                },

                'updateHeaderItemsCount': function () {
                    if (! this.isCustomer) {
                        let comparedItems = this.getStorageValue('compared_product');
                        let wishlistedItems = this.getStorageValue('wishlist_product');

                        if (wishlistedItems) {
                            this.wishlistCount = wishlistedItems.length;
                        }

                        if (comparedItems) {
                            this.compareCount = comparedItems.length;
                        }
                    } else {
                        this.$http.get(`${this.$root.baseUrl}/items-count`)
                            .then(response => {
                                this.compareCount = response.data.compareProductsCount;
                                this.wishlistCount = response.data.wishlistedProductsCount;
                            })
                            .catch(exception => {
                                console.log(this.__('error.something_went_wrong'));
                            });
                    }
                }
            }
        });
    })()
</script><?php /**PATH C:\Users\user\Desktop\Agencia - Proyectos en curso\bagisto-flaya/resources/themes/velocity/views/UI/particals.blade.php ENDPATH**/ ?>