<?php $toolbarHelper = app('Webkul\Product\Helpers\Toolbar'); ?>



<?php $__env->startSection('page_title'); ?>
    <?php echo e(__('shop::app.search.page-title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('full-content-wrapper'); ?>

<div class="hero-wrap img" style="background-image: url(themes/website/assets/images/bg_1.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-10 d-flex align-items-center">
                            <div class="text text-center pt-5 mt-md-5">
                                <p class="mb-4">Encuentra ofertas de diferentes áreas</p>
                            <h1 class="mb-5">La manera más sencilla de encontrar lo que buscas</h1>
                                        <div class="ftco-counter ftco-no-pt ftco-no-pb">
                                    <div class="row">
                                    <div class="col-md-4 d-flex justify-content-center counter-wrap">
                                        <div class="block-18">
                                        <div class="text d-flex">
                                            <div class="icon mr-2">
                                                <span class="flaticon-worldwide"></span>
                                            </div>
                                            <div class="desc text-left">
                                                <strong class="number">7</strong>
                                                <span>Países</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-center counter-wrap">
                                        <div class="block-18 text-center">
                                        <div class="text d-flex">
                                            <div class="icon mr-2">
                                                <span class="flaticon-visitor"></span>
                                            </div>
                                            <div class="desc text-left">
                                                <strong class="number" data-number="450">0</strong>
                                                <span>Compañías</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex justify-content-center counter-wrap">
                                        <div class="block-18 text-center">
                                        <div class="text d-flex">
                                            <div class="icon mr-2">
                                                <span class="flaticon-resume"></span>
                                            </div>
                                            <div class="desc text-left">
                                                <strong class="number" data-number="80000">0</strong>
                                                <span>Ofertas</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                    <div class="ftco-search my-md-5">
                                            <div class="row">
                                    <div class="col-md-12 nav-link-wrap">
                                        <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Encuentre ofertas</a>

                                        <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Más populares</a>

                                        </div>
                                    </div>
                                    <div class="col-md-12 tab-wrap">
                                    
                                        
                                        <div class="tab-content p-4" id="v-pills-tabContent">

                                        <div class="tab-pane active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                                            <searchbar-component class="search-job"></searchbar-component>
                                        </div>


                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        </div>
                        </div>
                </div>
            </div>
    <div class="container">
        <section class="search-container row">
            <?php if($results && $results->count()): ?>
                <div class="filters-container col-12">
                    <?php echo $__env->make('shop::products.list.toolbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            <?php endif; ?>

            <?php if(! $results): ?>
                <h1 class="fw6 col-12"><?php echo e(__('shop::app.search.no-results')); ?></h1>
            <?php else: ?>
                <?php if($results->isEmpty()): ?>
                    <h1 class="fw6 col-12"><?php echo e(__('shop::app.products.whoops')); ?></h1>
                    <span class="col-12"><?php echo e(__('shop::app.search.no-results')); ?></span>
                <?php else: ?>
                    <?php if($results->total() == 1): ?>
                        <h2 class="fw6 col-12 mb20">
                            <?php echo e($results->total()); ?> <?php echo e(__('shop::app.search.found-result')); ?>

                        </h2>
                    <?php else: ?>
                        <h2 class="fw6 col-12 mb20">
                            <?php echo e($results->total()); ?> <?php echo e(__('shop::app.search.found-results')); ?>

                        </h2>
                    <?php endif; ?>

                    <div class="container">

			        	<div class="row">

                            <div class="col-lg-9 pr-lg-4">

                                <div class="row">
                                    <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productFlat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   
                                            <?php echo $__env->make('shop::products.list.card', [
                                                'list' => true,
                                                'product' => $productFlat->product
                                            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                       
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>

                            </div>
                            
                            <div class="col-lg-3 sidebar">

                                <div class="sidebar-box bg-white p-4">
                                    <h3 class="heading-sidebar">Browse Category</h3>
                                    <form action="#" class="search-form mb-3">
                                        <div class="form-group">
                                        <span class="icon icon-search"></span>
                                        <input type="text" class="form-control" placeholder="Search...">
                                        </div>
                                    </form>

                                    <form action="#" class="browse-form">
                                        <label for="option-job-1"><input type="checkbox" id="option-job-1" name="vehicle" value="" checked> Website &amp; Software</label><br>
                                        <label for="option-job-2"><input type="checkbox" id="option-job-2" name="vehicle" value=""> Education &amp; Training</label><br>
                                        <label for="option-job-3"><input type="checkbox" id="option-job-3" name="vehicle" value=""> Graphics Design</label><br>
                                        <label for="option-job-4"><input type="checkbox" id="option-job-4" name="vehicle" value=""> Accounting &amp; Finance</label><br>
                                        <label for="option-job-5"><input type="checkbox" id="option-job-5" name="vehicle" value=""> Restaurant &amp; Food</label><br>
                                        <label for="option-job-6"><input type="checkbox" id="option-job-6" name="vehicle" value=""> Health &amp; Hospital</label><br>
                                    </form>
                                </div>

                                <div class="sidebar-box bg-white p-4">

                                    <h3 class="heading-sidebar">Select Location</h3>

                                    <form action="#" class="search-form mb-3">
                                        <div class="form-group">
                                        <span class="icon icon-search"></span>
                                        <input type="text" class="form-control" placeholder="Search...">
                                        </div>
                                    </form>

                                    <form action="#" class="browse-form">
                                        <label for="option-location-1"><input type="checkbox" id="option-location-1" name="vehicle" value="" checked> Sydney, Australia</label><br>
                                        <label for="option-location-2"><input type="checkbox" id="option-location-2" name="vehicle" value=""> New York, United States</label><br>
                                        <label for="option-location-3"><input type="checkbox" id="option-location-3" name="vehicle" value=""> Tokyo, Japan</label><br>
                                        <label for="option-location-4"><input type="checkbox" id="option-location-4" name="vehicle" value=""> Manila, Philippines</label><br>
                                        <label for="option-location-5"><input type="checkbox" id="option-location-5" name="vehicle" value=""> Seoul, South Korea</label><br>
                                        <label for="option-location-6"><input type="checkbox" id="option-location-6" name="vehicle" value=""> Western City, UK</label><br>
                                    </form>

                                </div>

                                <div class="sidebar-box bg-white p-4">
                                
                                    <h3 class="heading-sidebar">Job Type</h3>

                                    <form action="#" class="browse-form">
                                        <label for="option-job-type-1"><input type="checkbox" id="option-job-type-1" name="vehicle" value="" checked> Partime</label><br>
                                        <label for="option-job-type-2"><input type="checkbox" id="option-job-type-2" name="vehicle" value=""> Fulltime</label><br>
                                        <label for="option-job-type-3"><input type="checkbox" id="option-job-type-3" name="vehicle" value=""> Intership</label><br>
                                        <label for="option-job-type-4"><input type="checkbox" id="option-job-type-4" name="vehicle" value=""> Temporary</label><br>
                                        <label for="option-job-type-5"><input type="checkbox" id="option-job-type-5" name="vehicle" value=""> Freelance</label><br>
                                        <label for="option-job-type-6"><input type="checkbox" id="option-job-type-6" name="vehicle" value=""> Fixed</label><br>
                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php echo $__env->make('ui::datagrid.pagination', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            <?php endif; ?>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\Agencia - Proyectos en curso\bagisto-flaya/resources/themes/velocity/views/search/search.blade.php ENDPATH**/ ?>