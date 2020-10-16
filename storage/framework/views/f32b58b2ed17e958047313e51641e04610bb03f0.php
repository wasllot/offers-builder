<?php $__env->startSection('page_title'); ?>
    <?php echo e($page->page_title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('head'); ?>
    <?php if(isset($page->meta_title)): ?>
        <meta name="title" content="<?php echo e($page->meta_title); ?>" />
    <?php endif; ?>

    <?php if(isset($page->meta_description)): ?>
        <meta name="description" content="<?php echo e($page->meta_description); ?>" />
    <?php endif; ?>

    <?php if(isset($page->meta_keywords)): ?>
        <meta name="keywords" content="<?php echo e($page->meta_keywords); ?>" />
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('full-content-wrapper'); ?>
<div class="hero-wrap hero-wrap-2" style="background-image: url('themes/website/assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-12 text-center mb-5">
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span><span><?php if(isset($page->meta_title)): ?>
        <?php echo e($page->meta_title); ?>

    <?php endif; ?></span></p>
            <h1 class="mb-3 bread">    <?php if(isset($page->meta_title)): ?>
        <?php echo e($page->meta_title); ?>

    <?php endif; ?></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="cms-page-container cart-details row offset-1">
        <?php echo DbView::make($page)->field('html_content')->render(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('shop::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\Agencia - Proyectos en curso\bagisto-flaya/resources/themes/velocity/views/cms/page.blade.php ENDPATH**/ ?>