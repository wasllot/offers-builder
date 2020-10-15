<?php $productImageHelper = app('Webkul\Product\Helpers\ProductImage'); ?>
<?php $productRatingHelper = app('Webkul\Product\Helpers\Review'); ?>


<?php
    $channel = core()->getCurrentChannel();

    $homeSEO = $channel->home_seo;

    if (isset($homeSEO)) {
        $homeSEO = json_decode($channel->home_seo);

        $metaTitle = $homeSEO->meta_title;

        $metaDescription = $homeSEO->meta_description;

        $metaKeywords = $homeSEO->meta_keywords;
    }
?>

<?php $__env->startSection('page_title'); ?>
    <?php echo e(isset($metaTitle) ? $metaTitle : ""); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('head'); ?>

    <?php if(isset($homeSEO)): ?>
        <?php if(isset($metaTitle)): ?>
            <meta name="title" content="<?php echo e($metaTitle); ?>" />
        <?php endif; ?>

        <?php if(isset($metaDescription)): ?>
            <meta name="description" content="<?php echo e($metaDescription); ?>" />
        <?php endif; ?>

        <?php if(isset($metaKeywords)): ?>
            <meta name="keywords" content="<?php echo e($metaKeywords); ?>" />
        <?php endif; ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <style type="text/css">
        .product-price span:first-child, .product-price span:last-child {
            font-size: 18px;
            font-weight: 600;
        }

		.product-detail .right div {
			border-bottom: none !important;
		}

</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('full-content-wrapper'); ?>

    <div class="full-content-wrapper">
        <?php echo view_render_event('bagisto.shop.home.content.before'); ?>

		

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
                                                <strong class="number" data-number="46">0</strong>
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

		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="category-wrap">
							<div class="row no-gutters">
								<div class="col-md-2">
									<div class="top-category text-center no-border-left">
										<h3><a href="#">Páginas web &amp; Software</a></h3>
										<span class="icon flaticon-contact"></span>
										<p><span class="number">143</span> <span>Ofertas</span></p>
									</div>
								</div>
								<div class="col-md-2">
									<div class="top-category text-center active">
										<h3><a href="#">Educaciión &amp; Cursos</a></h3>
										<span class="icon flaticon-mortarboard"></span>
										<p><span class="number">143</span> <span>Ifertas</span></p>
									</div>
								</div>
								<div class="col-md-2">
									<div class="top-category text-center">
										<h3><a href="#">Diseño Gráfico &amp; UI/UX </a></h3>
										<span class="icon flaticon-idea"></span>
										<p><span class="number">143</span> <span>Ofertas</span></p>
									</div>
								</div>
								<div class="col-md-2">
									<div class="top-category text-center">
										<h3><a href="#">Finanzas</a></h3>
										<span class="icon flaticon-accounting"></span>
										<p><span class="number">143</span> <span>Ofertas</span></p>
									</div>
								</div>
								<div class="col-md-2">
									<div class="top-category text-center">
										<h3><a href="#">Gastronomía &amp; Hostelería</a></h3>
										<span class="icon flaticon-dish"></span>
										<p><span class="number">143</span> <span>Ofertas</span></p>
									</div>
								</div>
								<div class="col-md-2">
									<div class="top-category text-center">
										<h3><a href="#">Salud &amp; Bienestar</a></h3>
										<span class="icon flaticon-stethoscope"></span>
										<p><span class="number">143</span> <span>Ofertas</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5">
			<div class="col-md-7 heading-section text-center">
				<span class="subheading">Rubros o Categorías</span>
				<h2 class="mb-0">Categorías principales</h2>
			</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<ul class="category text-center">
						<li><a href="#">Desarrollo Web <br><span class="number">354</span> <span>Ofertas</span><i class="ion-ios-arrow-forward"></i></a></li>
						<li><a href="#">Diseño Gráfico <br><span class="number">143</span> <span>Ofertas</span><i class="ion-ios-arrow-forward"></i></a></li>
						<li><a href="#">Multimedia <br><span class="number">100</span> <span>Ofertas</span><i class="ion-ios-arrow-forward"></i></a></li>
						<li><a href="#">Publicidad <br><span class="number">90</span> <span>Ofertas</span><i class="ion-ios-arrow-forward"></i></a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="category text-center">
						<li><a href="#">Educación &amp; Cursos <br><span class="number">100</span> <span>Ofertas</span><i class="ion-ios-arrow-forward"></i></a></li>
						<li><a href="#">Inglés <br><span class="number">200</span> <span>Ofertas</span><i class="ion-ios-arrow-forward"></i></a></li>
						<li><a href="#">Social Media <br><span class="number">300</span> <span>Ofertas</span><i class="ion-ios-arrow-forward"></i></a></li>
						<li><a href="#">Escrituraa <br><span class="number">150</span> <span>Ofertas</span><i class="ion-ios-arrow-forward"></i></a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="category text-center">
						<li><a href="#">Programación PHP <br><span class="number">400</span> <span>Ofertas</span><i class="ion-ios-arrow-forward"></i></a></li>
						<li><a href="#">Gestión de Proyectos <br><span class="number">100</span> <span>Ofertas</span><i class="ion-ios-arrow-forward"></i></a></li>
						<li><a href="#">Manejo de Finanzas <br><span class="number">222</span> <span>Ofertas</span><i class="ion-ios-arrow-forward"></i></a></li>
						<li><a href="#">Oficina &amp; Administración <br><span class="number">123</span> <span>Ofertas</span><i class="ion-ios-arrow-forward"></i></a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="category text-center">
						<li><a href="#">Diseño Web <br><span class="number">324</span> <span>Ofertas</span></span><i class="ion-ios-arrow-forward"></i></a></li>
						<li><a href="#">Servicio al Cliente <br><span class="number">564</span> <span>Ofertas</span><i class="ion-ios-arrow-forward"></i></a></li>
						<li><a href="#">Marketing &amp; Ventas <br><span class="number">234</span> <span>Ofertas</span><i class="ion-ios-arrow-forward"></i></a></li>
						<li><a href="#">Desarrollo de Software <br><span class="number">425</span> <span>Ofertas</span><i class="ion-ios-arrow-forward"></i></a></li>
					</ul>
				</div>
			</div>
			</div>
		</section>

		<section class="ftco-section services-section">
			<div class="container">
				<div class="row d-flex">
				<div class="col-md-3 d-flex align-self-stretch">
					<div class="media block-6 services d-block">
					<div class="icon"><span class="flaticon-resume"></span></div>
					<div class="media-body">
						<h3 class="heading mb-3">Busca cientos de ofertas</h3>
						<p>A small river named Duden flows by their place and supplies.</p>
					</div>
					</div>      
				</div>
				<div class="col-md-3 d-flex align-self-stretch">
					<div class="media block-6 services d-block">
					<div class="icon"><span class="flaticon-team"></span></div>
					<div class="media-body">
						<h3 class="heading mb-3">Maneja las ofertas de forma sencilla</h3>
						<p>A small river named Duden flows by their place and supplies.</p>
					</div>
					</div>    
				</div>
				<div class="col-md-3 d-flex align-self-stretch">
					<div class="media block-6 services d-block">
					<div class="icon"><span class="flaticon-career"></span></div>
					<div class="media-body">
						<h3 class="heading mb-3">Rubros más demandados</h3>
						<p>A small river named Duden flows by their place and supplies.</p>
					</div>
					</div>      
				</div>
				<div class="col-md-3 d-flex align-self-stretch">
					<div class="media block-6 services d-block">
					<div class="icon"><span class="flaticon-employees"></span></div>
					<div class="media-body">
						<h3 class="heading mb-3">Atención de Calidad</h3>
						<p>A small river named Duden flows by their place and supplies.</p>
					</div>
					</div>      
				</div>
				</div>
			</div>
		</section>

		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 pr-lg-5">
						<div class="row justify-content-center pb-3">
					<div class="col-md-12 heading-section">
					<span class="subheading">Ofertas recientemente añadidas</span>
					<h2 class="mb-4">Principales ofertas para esta semana</h2>
					</div>
				</div>
						<div class="row">
							<div class="col-md-12">
					<div class="job-post-item p-4 d-block d-lg-flex align-items-center">
						<div class="one-third mb-4 mb-md-0">
						<div class="job-post-item-header align-items-center">
							<span class="subadge">Medio tiempo</span>
							<h2 class="mr-3 text-black"><a href="#">Diseño Web</a></h2>
						</div>
						<div class="job-post-item-body d-block d-md-flex">
							<div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a></div>
							<div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
						</div>
						</div>

						<div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
						<div>
							<a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
								<span class="icon-heart"></span>
							</a>
						</div>
						<a href="job-single.html" class="btn btn-primary py-2">Obtener Oferta</a>
						</div>
					</div>
					</div><!-- end -->

							<div class="col-md-12">
					<div class="job-post-item p-4 d-block d-lg-flex align-items-center">
						<div class="one-third mb-4 mb-md-0">
						<div class="job-post-item-header align-items-center">
											<span class="subadge">Tiempo Completo</span>
							<h2 class="mr-3 text-black"><a href="#">Full Stack Developer</a></h2>
						</div>
						<div class="job-post-item-body d-block d-md-flex">
							<div class="mr-3"><span class="icon-layers"></span> <a href="#">Google, Inc.</a></div>
							<div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
						</div>
						</div>

						<div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
						<div>
							<a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
								<span class="icon-heart"></span>
							</a>
						</div>
						<a href="job-single.html" class="btn btn-primary py-2">Obtener Oferta</a>
						</div>
					</div>
					</div><!-- end -->

					<div class="col-md-12">
					<div class="job-post-item p-4 d-block d-lg-flex align-items-center">
						<div class="one-third mb-4 mb-md-0">
						<div class="job-post-item-header align-items-center">
							<span class="subadge">Freelance</span>
							<h2 class="mr-3 text-black"><a href="#">Open Source Interactive Developer</a></h2>
						</div>
						<div class="job-post-item-body d-block d-md-flex">
							<div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
							<div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
						</div>
						</div>

						<div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
						<div>
							<a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
								<span class="icon-heart"></span>
							</a>
						</div>
						<a href="job-single.html" class="btn btn-primary py-2">Obtener Oferta</a>
						</div>
					</div>
					</div><!-- end -->

					<div class="col-md-12">
					<div class="job-post-item p-4 d-block d-lg-flex align-items-center">
						<div class="one-third mb-4 mb-md-0">
						<div class="job-post-item-header align-items-center">
							<span class="subadge">Medio tiempo</span>
							<h2 class="mr-3 text-black"><a href="#">Frontend Development</a></h2>
						</div>
						<div class="job-post-item-body d-block d-md-flex">
							<div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a></div>
							<div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
						</div>
						</div>

						<div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
						<div>
							<a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
								<span class="icon-heart"></span>
							</a>
						</div>
						<a href="job-single.html" class="btn btn-primary py-2">Obtener Oferta</a>
						</div>
					</div>
					</div><!-- end -->

					<div class="col-md-12">
					<div class="job-post-item p-4 d-block d-lg-flex align-items-center">
						<div class="one-third mb-4 mb-md-0">
						<div class="job-post-item-header align-items-center">
							<span class="subadge">Temporary</span>
							<h2 class="mr-3 text-black"><a href="#">Open Source Interactive Developer</a></h2>
						</div>
						<div class="job-post-item-body d-block d-md-flex">
							<div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
							<div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
						</div>
						</div>

						<div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
						<div>
							<a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
								<span class="icon-heart"></span>
							</a>
						</div>
						<a href="job-single.html" class="btn btn-primary py-2">Obtener Oferta</a>
						</div>
					</div>
					</div><!-- end -->

					<div class="col-md-12">
					<div class="job-post-item p-4 d-block d-lg-flex align-items-center">
						<div class="one-third mb-4 mb-md-0">
						<div class="job-post-item-header align-items-center">
							<span class="subadge">Tiempo Completo</span>
							<h2 class="mr-3 text-black"><a href="#">Full Stack Developer</a></h2>
						</div>
						<div class="job-post-item-body d-block d-md-flex">
							<div class="mr-3"><span class="icon-layers"></span> <a href="#">Google, Inc.</a></div>
							<div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
						</div>
						</div>

						<div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
						<div>
							<a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
								<span class="icon-heart"></span>
							</a>
						</div>
						<a href="job-single.html" class="btn btn-primary py-2">Obtener Oferta</a>
						</div>
					</div>
					</div><!-- end -->

					<div class="col-md-12">
					<div class="job-post-item p-4 d-block d-lg-flex align-items-center">
						<div class="one-third mb-4 mb-md-0">
						<div class="job-post-item-header align-items-center">
							<span class="subadge">Freelance</span>
							<h2 class="mr-3 text-black"><a href="#">Open Source Interactive Developer</a></h2>
						</div>
						<div class="job-post-item-body d-block d-md-flex">
							<div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
							<div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
						</div>
						</div>

						<div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
						<div>
							<a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
								<span class="icon-heart"></span>
							</a>
						</div>
						<a href="job-single.html" class="btn btn-primary py-2">Obtener Oferta</a>
						</div>
					</div>
					</div><!-- end -->

					<div class="col-md-12">
					<div class="job-post-item p-4 d-block d-lg-flex align-items-center">
						<div class="one-third mb-4 mb-md-0">
						<div class="job-post-item-header align-items-center">
							<span class="subadge">Internship</span>
							<h2 class="mr-3 text-black"><a href="#">Frontend Development</a></h2>
						</div>
						<div class="job-post-item-body d-block d-md-flex">
							<div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook, Inc.</a></div>
							<div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
						</div>
						</div>

						<div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
						<div>
							<a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
								<span class="icon-heart"></span>
							</a>
						</div>
						<a href="job-single.html" class="btn btn-primary py-2">Obtener Oferta</a>
						</div>
					</div>
					</div><!-- end -->

					<div class="col-md-12">
					<div class="job-post-item p-4 d-block d-lg-flex align-items-center">
						<div class="one-third mb-4 mb-md-0">
						<div class="job-post-item-header align-items-center">
							<span class="subadge">Temporary</span>
							<h2 class="mr-3 text-black"><a href="#">Open Source Interactive Developer</a></h2>
						</div>
						<div class="job-post-item-body d-block d-md-flex">
							<div class="mr-3"><span class="icon-layers"></span> <a href="#">New York Times</a></div>
							<div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
						</div>
						</div>

						<div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
						<div>
							<a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
								<span class="icon-heart"></span>
							</a>
						</div>
						<a href="job-single.html" class="btn btn-primary py-2">Obtener Oferta</a>
						</div>
					</div>
					</div><!-- end -->
				</div>
				</div>
				<div class="col-lg-3 sidebar">
				<div class="row justify-content-center pb-3">
					<div class="col-md-12 heading-section">
					<h2 class="mb-4">Principales contrataciones</h2>
					</div>
				</div>
				<div class="sidebar-box">
					<div class="">
						<a href="#" class="company-wrap"><img src="<?php echo e(asset('themes/website/assets/images/company-1.jpg')); ?>" class="img-fluid" alt="Colorlib Free Template"></a>
						<div class="text p-3">
							<h3><a href="#">Compañía de Ejemplo</a></h3>
							<p><span class="number">500</span> <span>Ofertas</span></p>
						</div>
					</div>
				</div>
				<div class="sidebar-box">
					<div class="">
						<a href="#" class="company-wrap"><img src="<?php echo e(asset('themes/website/assets/images/company-2.jpg')); ?>" class="img-fluid" alt="Colorlib Free Template"></a>
						<div class="text p-3">
							<h3><a href="#">Facebook</a></h3>
							<p><span class="number">700</span> <span>Ofertas</span></p>
						</div>
					</div>
				</div>
				<div class="sidebar-box">
					<div class="">
						<a href="#" class="company-wrap"><img src="<?php echo e(asset('themes/website/assets/images/company-3.jpg')); ?>" class="img-fluid" alt="Colorlib Free Template"></a>
						<div class="text p-3">
							<h3><a href="#">IT Programming INC</a></h3>
							<p><span class="number">700</span> <span>Ofertas</span></p>
						</div>
					</div>
				</div>
				<div class="sidebar-box">
					<div class="">
						<a href="#" class="company-wrap"><img src="<?php echo e(asset('themes/website/assets/images/company-4.jpg')); ?>" class="img-fluid" alt="Colorlib Free Template"></a>
						<div class="text p-3">
							<h3><a href="#">IT Programming INC</a></h3>
							<p><span class="number">700</span> <span>Ofertas</span></p>
						</div>
					</div>
				</div>
				</div>
				</div>
			</div>
		</section>

			
		<section class="ftco-section-parallax">
			<div class="parallax-img d-flex align-items-center">
				<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-7 text-center heading-section heading-section-white">
					<h2>Suscríbete a nuestro boletín</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
					<div class="row d-flex justify-content-center mt-4 mb-4">
						<div class="col-md-12">
						<form action="<?php echo e(route('shop.subscribe')); ?>" class="subscribe-form">
							<div class="form-group d-flex">
							<input type="email" class="form-control" name="subscriber_email" placeholder="Ingresa tu correo">
							<input type="submit" value="Suscribirse" class="submit px-3">
							</div>
						</form>
						</div>
					</div>
					</div>
				</div>
				</div>
			</div>
		</section>
            

        <?php echo e(view_render_event('bagisto.shop.home.content.after')); ?>

    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('shop::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\Agencia - Proyectos en curso\bagisto-flaya/resources/themes/velocity/views/home/index.blade.php ENDPATH**/ ?>