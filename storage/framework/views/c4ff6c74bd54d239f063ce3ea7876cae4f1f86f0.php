<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

    <head>
        <title><?php echo $__env->yieldContent('page_title'); ?></title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta http-equiv="content-language" content="<?php echo e(app()->getLocale()); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="<?php echo e(asset('themes/velocity/assets/css/velocity.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('themes/velocity/assets/css/bootstrap.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('themes/velocity/assets/css/google-font.css')); ?>" />

        <link rel="stylesheet" href="<?php echo e(asset('themes/website/assets/css/open-iconic-bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('themes/website/assets/css/animate.css')); ?>">

        <link rel="stylesheet" href="<?php echo e(asset('themes/website/assets/css/owl.carousel.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('themes/website/assets/css/owl.theme.default.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('themes/website/assets/css/magnific-popup.css')); ?>">

        <link rel="stylesheet" href="<?php echo e(asset('themes/website/assets/css/aos.css')); ?>">

        <link rel="stylesheet" href="<?php echo e(asset('themes/website/assets/css/ionicons.min.css')); ?>">

        <link rel="stylesheet" href="<?php echo e(asset('themes/website/assets/css/bootstrap-datepicker.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('themes/website/assets/css/jquery.timepicker.css')); ?>">


        <link rel="stylesheet" href="<?php echo e(asset('themes/website/assets/css/flaticon.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('themes/website/assets/css/icomoon.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('themes/website/assets/css/style.css')); ?>">

        <?php if(core()->getCurrentLocale()->direction == 'rtl'): ?>
            <link href="<?php echo e(asset('themes/velocity/assets/css/bootstrap-flipped.css')); ?>" rel="stylesheet">
        <?php endif; ?>

        <?php if($favicon = core()->getCurrentChannel()->favicon_url): ?>
            <link rel="icon" sizes="16x16" href="<?php echo e($favicon); ?>" />
        <?php else: ?>
            <link rel="icon" sizes="16x16" href="<?php echo e(asset('/themes/velocity/assets/images/static/v-icon.png')); ?>" />
        <?php endif; ?>

        <script
            type="text/javascript"
            src="<?php echo e(asset('themes/velocity/assets/js/jquery.min.js')); ?>">
        </script>

        <script
            type="text/javascript"
            baseUrl="<?php echo e(url()->to('/')); ?>"
            src="<?php echo e(asset('themes/velocity/assets/js/velocity.js')); ?>">
        </script>

        <script
            type="text/javascript"
            src="<?php echo e(asset('themes/velocity/assets/js/jquery.ez-plus.js')); ?>">
        </script>

        <?php echo $__env->yieldContent('head'); ?>

        <?php $__env->startSection('seo'); ?>
            <meta name="description" content="<?php echo e(core()->getCurrentChannel()->description); ?>"/>
        <?php echo $__env->yieldSection(); ?>

        <?php echo $__env->yieldPushContent('css'); ?>

        <?php echo view_render_event('bagisto.shop.layout.head'); ?>


    </head>

    <body <?php if(core()->getCurrentLocale()->direction == 'rtl'): ?> class="rtl" <?php endif; ?>>
        <?php echo view_render_event('bagisto.shop.layout.body.before'); ?>


        <?php echo $__env->make('shop::UI.particals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div id="app">
        <product-quick-view v-if="$root.quickView"></product-quick-view>
  
            <nav style="z-index: 10000001 !important" class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
                <div class="container-fluid px-md-4	">
                <a class="navbar-brand" href="index.html">Offer Builder</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>

                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="/" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Encuentra ofertas</a></li>
                    <li class="nav-item"><a href="/page/about-us" class="nav-link">Acerca</a></li>
                    <li class="nav-item"><a href="/page/contact-us" class="nav-link">Contacto</a></li>
                    <?php echo view_render_event('bagisto.shop.layout.header.account-item.before'); ?>


                    <?php if(auth()->guard('customer')->guest()): ?>
                        <div class="dropdown show">
                            <a class="btn btn-secondary cta cta-colored dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo e(__('shop::app.header.title')); ?>

                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="<?php echo e(route('customer.session.index')); ?>"><?php echo e(__('shop::app.header.sign-in')); ?></a>
                                <a class="dropdown-item" href="<?php echo e(route('customer.register.index')); ?>"><?php echo e(__('shop::app.header.sign-up')); ?></a>
                            </div>
                        </div>

                    <?php endif; ?>
                    
                    <?php if(auth()->guard('customer')->check()): ?>
                    <div class="dropdown show">
                            <a class="btn btn-secondary cta cta-colored dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo e(auth()->guard('customer')->user()->first_name); ?>

                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="<?php echo e(route('customer.profile.index')); ?>"><?php echo e(__('shop::app.header.profile')); ?></a>
                                <a class="dropdown-item" href="<?php echo e(route('customer.wishlist.index')); ?>"><?php echo e(__('shop::app.header.wishlist')); ?></a>
                                <a class="dropdown-item" href="<?php echo e(route('shop.checkout.cart.index')); ?>"><?php echo e(__('shop::app.header.cart')); ?></a>
                                <a class="dropdown-item" href="<?php echo e(route('customer.session.destroy')); ?>"><?php echo e(__('shop::app.header.logout')); ?></a>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php echo view_render_event('bagisto.shop.layout.header.account-item.after'); ?>



                    <?php echo view_render_event('bagisto.shop.layout.header.cart-item.before'); ?>

                                        
                        <li class="cart-dropdown-container">

                        <?php echo $__env->make('shop::checkout.cart.mini-cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        </li>

                    <?php echo view_render_event('bagisto.shop.layout.header.cart-item.after'); ?>

                        
                    </ul>
                </div>
                </div>
            </nav>


            <?php echo view_render_event('bagisto.shop.layout.full-content.before'); ?>


            <?php echo $__env->yieldContent('full-content-wrapper'); ?>

            <?php echo view_render_event('bagisto.shop.layout.full-content.after'); ?>

        </div>

        <!-- below footer -->
        <?php $__env->startSection('footer'); ?>
            <?php echo view_render_event('bagisto.shop.layout.footer.before'); ?>


                <?php echo $__env->make('shop::layouts.footer.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo view_render_event('bagisto.shop.layout.footer.after'); ?>

        <?php echo $__env->yieldSection(); ?>

        <?php echo view_render_event('bagisto.shop.layout.body.after'); ?>


        <div id="alert-container"></div>

        <script type="text/javascript">
            (() => {
                window.showAlert = (messageType, messageLabel, message) => {
                    if (messageType && message !== '') {
                        let alertId = Math.floor(Math.random() * 1000);

                        let html = `<div class="alert ${messageType} alert-dismissible" id="${alertId}">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>${messageLabel ? messageLabel + '!' : ''} </strong> ${message}.
                        </div>`;

                        $('#alert-container').append(html).ready(() => {
                            window.setTimeout(() => {
                                $(`#alert-container #${alertId}`).remove();
                            }, 5000);
                        });
                    }
                }

                let messageType = '';
                let messageLabel = '';

                <?php if($message = session('success')): ?>
                    messageType = 'alert-success';
                    messageLabel = "<?php echo e(__('velocity::app.shop.general.alert.success')); ?>";
                <?php elseif($message = session('warning')): ?>
                    messageType = 'alert-warning';
                    messageLabel = "<?php echo e(__('velocity::app.shop.general.alert.warning')); ?>";
                <?php elseif($message = session('error')): ?>
                    messageType = 'alert-danger';
                    messageLabel = "<?php echo e(__('velocity::app.shop.general.alert.error')); ?>";
                <?php elseif($message = session('info')): ?>
                    messageType = 'alert-info';
                    messageLabel = "<?php echo e(__('velocity::app.shop.general.alert.info')); ?>";
                <?php endif; ?>

                if (messageType && '<?php echo e($message); ?>' !== '') {
                    window.showAlert(messageType, messageLabel, '<?php echo e($message); ?>');
                }

                window.serverErrors = [];
                <?php if(isset($errors)): ?>
                    <?php if(count($errors)): ?>
                        window.serverErrors = <?php echo json_encode($errors->getMessages(), 15, 512) ?>;
                    <?php endif; ?>
                <?php endif; ?>

                window._translations = <?php echo json_encode(app('Webkul\Velocity\Helpers\Helper')->jsonTranslations(), 15, 512) ?>;
            })();
        </script>

        <script
            type="text/javascript"
            src="<?php echo e(asset('vendor/webkul/ui/assets/js/ui.js')); ?>">
        </script>


        <?php echo $__env->yieldPushContent('scripts'); ?>        	<script src="<?php echo e(asset('themes/website/assets/js/jquery.min.js')); ?>"></script>
	<script src="<?php echo e(asset('themes/website/assets/js/jquery-migrate-3.0.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('themes/website/assets/js/popper.min.js')); ?>"></script>
	<script src="<?php echo e(asset('themes/website/assets/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('themes/website/assets/js/jquery.easing.1.3.js')); ?>"></script>
	<script src="<?php echo e(asset('themes/website/assets/js/jquery.waypoints.min.js')); ?>"></script>
	<script src="<?php echo e(asset('themes/website/assets/js/jquery.stellar.min.js')); ?>"></script>
	<script src="<?php echo e(asset('themes/website/assets/js/owl.carousel.min.js')); ?>"></script>
	<script src="<?php echo e(asset('themes/website/assets/js/jquery.magnific-popup.min.js')); ?>"></script>
	<script src="<?php echo e(asset('themes/website/assets/js/aos.js')); ?>"></script>
	<script src="<?php echo e(asset('themes/website/assets/js/jquery.animateNumber.min.js')); ?>"></script>
	<script src="<?php echo e(asset('themes/website/assets/js/scrollax.min.js')); ?>"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="<?php echo e(asset('themes/website/assets/js/google-map.js')); ?>"></script>
	<script src="<?php echo e(asset('themes/website/assets/js/main.js')); ?>"></script>
    </body>
</html>
<?php /**PATH C:\Users\user\Desktop\Agencia - Proyectos en curso\bagisto-flaya/resources/themes/velocity/views/layouts/master.blade.php ENDPATH**/ ?>