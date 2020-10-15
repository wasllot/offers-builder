<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <title>@yield('page_title')</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="content-language" content="{{ app()->getLocale() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="{{ asset('themes/velocity/assets/css/velocity.css') }}" />
        <link rel="stylesheet" href="{{ asset('themes/velocity/assets/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('themes/velocity/assets/css/google-font.css') }}" />

        <link rel="stylesheet" href="{{ asset('themes/website/assets/css/open-iconic-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('themes/website/assets/css/animate.css') }}">

        <link rel="stylesheet" href="{{ asset('themes/website/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('themes/website/assets/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('themes/website/assets/css/magnific-popup.css') }}">

        <link rel="stylesheet" href="{{ asset('themes/website/assets/css/aos.css') }}">

        <link rel="stylesheet" href="{{ asset('themes/website/assets/css/ionicons.min.css') }}">

        <link rel="stylesheet" href="{{ asset('themes/website/assets/css/bootstrap-datepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('themes/website/assets/css/jquery.timepicker.css') }}">


        <link rel="stylesheet" href="{{ asset('themes/website/assets/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('themes/website/assets/css/icomoon.css') }}">
        <link rel="stylesheet" href="{{ asset('themes/website/assets/css/style.css') }}">

        @if (core()->getCurrentLocale()->direction == 'rtl')
            <link href="{{ asset('themes/velocity/assets/css/bootstrap-flipped.css') }}" rel="stylesheet">
        @endif

        @if ($favicon = core()->getCurrentChannel()->favicon_url)
            <link rel="icon" sizes="16x16" href="{{ $favicon }}" />
        @else
            <link rel="icon" sizes="16x16" href="{{ asset('/themes/velocity/assets/images/static/v-icon.png') }}" />
        @endif

        <script
            type="text/javascript"
            src="{{ asset('themes/velocity/assets/js/jquery.min.js') }}">
        </script>

        <script
            type="text/javascript"
            baseUrl="{{ url()->to('/') }}"
            src="{{ asset('themes/velocity/assets/js/velocity.js') }}">
        </script>

        <script
            type="text/javascript"
            src="{{ asset('themes/velocity/assets/js/jquery.ez-plus.js') }}">
        </script>

        @yield('head')

        @section('seo')
            <meta name="description" content="{{ core()->getCurrentChannel()->description }}"/>
        @show

        @stack('css')

        {!! view_render_event('bagisto.shop.layout.head') !!}

    </head>

    <body @if (core()->getCurrentLocale()->direction == 'rtl') class="rtl" @endif>
        {!! view_render_event('bagisto.shop.layout.body.before') !!}

        @include('shop::UI.particals')

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
                    {!! view_render_event('bagisto.shop.layout.header.account-item.before') !!}

                    @guest('customer')
                        <div class="dropdown show">
                            <a class="btn btn-secondary cta cta-colored dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ __('shop::app.header.title') }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('customer.session.index') }}">{{ __('shop::app.header.sign-in') }}</a>
                                <a class="dropdown-item" href="{{ route('customer.register.index') }}">{{ __('shop::app.header.sign-up') }}</a>
                            </div>
                        </div>

                    @endguest
                    
                    @auth('customer')
                    <div class="dropdown show">
                            <a class="btn btn-secondary cta cta-colored dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ auth()->guard('customer')->user()->first_name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('customer.profile.index') }}">{{ __('shop::app.header.profile') }}</a>
                                <a class="dropdown-item" href="{{ route('customer.wishlist.index') }}">{{ __('shop::app.header.wishlist') }}</a>
                                <a class="dropdown-item" href="{{ route('shop.checkout.cart.index') }}">{{ __('shop::app.header.cart') }}</a>
                                <a class="dropdown-item" href="{{ route('customer.session.destroy') }}">{{ __('shop::app.header.logout') }}</a>
                            </div>
                        </div>
                    @endauth
                    {!! view_render_event('bagisto.shop.layout.header.account-item.after') !!}


                    {!! view_render_event('bagisto.shop.layout.header.cart-item.before') !!}
                                        
                        <li class="cart-dropdown-container">

                        @include('shop::checkout.cart.mini-cart')

                        </li>

                    {!! view_render_event('bagisto.shop.layout.header.cart-item.after') !!}
                        
                    </ul>
                </div>
                </div>
            </nav>


            {!! view_render_event('bagisto.shop.layout.full-content.before') !!}

            @yield('full-content-wrapper')

            {!! view_render_event('bagisto.shop.layout.full-content.after') !!}
        </div>

        <!-- below footer -->
        @section('footer')
            {!! view_render_event('bagisto.shop.layout.footer.before') !!}

                @include('shop::layouts.footer.index')

            {!! view_render_event('bagisto.shop.layout.footer.after') !!}
        @show

        {!! view_render_event('bagisto.shop.layout.body.after') !!}

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

                @if ($message = session('success'))
                    messageType = 'alert-success';
                    messageLabel = "{{ __('velocity::app.shop.general.alert.success') }}";
                @elseif ($message = session('warning'))
                    messageType = 'alert-warning';
                    messageLabel = "{{ __('velocity::app.shop.general.alert.warning') }}";
                @elseif ($message = session('error'))
                    messageType = 'alert-danger';
                    messageLabel = "{{ __('velocity::app.shop.general.alert.error') }}";
                @elseif ($message = session('info'))
                    messageType = 'alert-info';
                    messageLabel = "{{ __('velocity::app.shop.general.alert.info') }}";
                @endif

                if (messageType && '{{ $message }}' !== '') {
                    window.showAlert(messageType, messageLabel, '{{ $message }}');
                }

                window.serverErrors = [];
                @if (isset($errors))
                    @if (count($errors))
                        window.serverErrors = @json($errors->getMessages());
                    @endif
                @endif

                window._translations = @json(app('Webkul\Velocity\Helpers\Helper')->jsonTranslations());
            })();
        </script>

        <script
            type="text/javascript"
            src="{{ asset('vendor/webkul/ui/assets/js/ui.js') }}">
        </script>


        @stack('scripts')        	<script src="{{ asset('themes/website/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('themes/website/assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
	<script src="{{ asset('themes/website/assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('themes/website/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('themes/website/assets/js/jquery.easing.1.3.js') }}"></script>
	<script src="{{ asset('themes/website/assets/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('themes/website/assets/js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('themes/website/assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('themes/website/assets/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('themes/website/assets/js/aos.js') }}"></script>
	<script src="{{ asset('themes/website/assets/js/jquery.animateNumber.min.js') }}"></script>
	<script src="{{ asset('themes/website/assets/js/scrollax.min.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="{{ asset('themes/website/assets/js/google-map.js') }}"></script>
	<script src="{{ asset('themes/website/assets/js/main.js') }}"></script>
    </body>
</html>
