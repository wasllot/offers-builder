<!doctype html>
<html lang="en">
  <head>
  <title>Descripción del producto {{$product->name}}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" sizes="16x16" href="{{ asset('vendor/webkul/ui/assets/images/favicon.ico') }}" />
        <link rel="stylesheet" href="{{ asset('vendor/webkul/admin/assets/css/grapes.min.css') }}">

        <script src="{{ asset('vendor/webkul/admin/assets/js/grapes.min.js') }}"></script>
        <script src="{{ asset('vendor/webkul/admin/assets/js/grapesjs-blocks-basic.min.js') }}"></script>

    <style>
          .full-width {
                width: 100% !important;
            }
            body,
            html {
              height: 100%;
              margin: 0;
            }

          * {
            box-sizing: border-box;
            outline: none;
          }
          body {
            margin: 0;
            font-family: Sans-serif;
            overflow: hidden;
          }
          .dashboard {
            height: 100vh;
            display: flex;
          }
          .left {
            height: 100%;
            display: flex;
          }
          .sidebar {
            width: 80px;
            height: 100%;
            background-image: linear-gradient(
              -225deg,
              #5271c4 0%,
              #b19fff 48%,
              #eca1fe 100%
            );
            display: flex;
          }
          .wrapper {
            padding: 0 25px;
            height: 100vh;
            display: flex;
            flex-direction: column;
          }

          .items {
            margin-top: 50px;
          }

          .items > img {
            margin-bottom: 25px;
          }

          .profile > img {
            border-radius: 50%;
            width: 305x;
            height: 35px;
            border: 1px solid white;
          }
          .profile {
            margin-top: auto;
          }
          .menu {
            margin-top: 20px;
          }
          .navigation {
            width: 270px;
            border-right: 1px solid #ddd;
          }
          .abilan > img {
            width: 120px;
            margin-bottom: 30px;
            margin-left: -8px;
          }

          .wrapper2 {
            padding: 0 25px;
            height: 100%;
            overflow: auto;
          }

          .compose {
            width: 150px;
            text-align: center;
            height: 50px;
            border-radius: 13px;
            border: 1px solid;
            background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%);
            color: white;
            font-size: 16px;
            padding-left: 20px;
            position: relative;
          }
          .folders {
            margin-top: 30px;
            color: #b8b8b8;
            font-size: 14px;
          }
          .folder-icons {
            margin-top: 20px;
            display: flex;
            align-items: center;
          }

          .icon-name1 {
            margin-left: 10px;
            color: #8b47a9;
          }

          .icon-name {
            margin-left: 10px;
            color: grey;
          }
          .names {
            margin-left: 10px;
            font-weight: bold;
            font-size: 15px;
          }

          .avatar > img {
            width: 35px;
            border-radius: 10px;
          }
          .section1 {
            margin-top: 25px;
            margin-bottom: 10px;
          }

          .btn {
            border-radius: 3px;
            border: 1px;
            padding: 0 10px 0 30px;
            height: 30px;
            font-weight: bold;
            position: relative;
          }

          .buton1 {
            background-color: #f8f1ff;
            color: #a84bfe;
          }
          .buton2 {
            background-color: #fff1f6;
            color: #fe4b85;
          }
          .buton3 {
            background-color: #eef0ff;
            color: #2632fe;
          }
          .buton4 {
            background-color: #ebfbf8;
            color: #01c991;
          }
          .tag {
            position: absolute;
            left: 8px;
            top: 10px;
          }
          .plus > img {
            width: 16px;
            height: 16px;
          }
          .plus {
            left: 10px;
            position: absolute;
          }
          .buton-span {
            border-radius: 15px;
            padding: 5px 10px;
            border: 1px;
            color: white;
            background-color: #fe365c;
            box-shadow: 0px 0px 10px 2px #f7bfc9;
            margin-left: 70px;
          }
          .online {
            position: absolute;
            top: -5px;
            right: -5px;
            border: 4px solid #fbfcf8;
            box-sizing: unset;
            background-color: #02c997;
            width: 10px;
            height: 10px;
            border-radius: 50%;
          }
          .avatar {
            position: relative;
          }
          .red {
            background-color: #fe4663;
          }

          .big-inbox {
            font-size: 25px;
            font-weight: 500;
          }
          .right-side {
            background-color: #f2f3f7;
            width: 100%;
            padding: 8px 30px;
            display: flex;
            flex-direction: column;
          }
          .right-body {
            flex: 1;
            display: flex;
            overflow: hidden;
          }
          .top-bar {
            display: flex;
            align-items: center;
            text-align: center;
          }
          .top-bar-justify {
            display: flex;
            justify-content: space-between;
            width: 100%;
          }
          .top-bar-items {
            align-items: center;
            display: flex;
            justify-content: space-between;
            width: 180px;
          }
          .profile2 > img {
            border-radius: 50%;
            width: 28x;
            height: 28px;
            border: 2px solid white;
            margin-left: 25px;
            margin-right: 5px;
          }
          .profile2 {
            display: flex;
            align-items: center;

            width: 120px;
          }
          .icon-name5 {
            font-size: 13px;
            color: grey;
          }
          .new-hr {
            border: 0.6px solid #ddd;
            margin-bottom: 25px;
          }
          .notif {
            position: relative;
          }
          .pink {
            background-color: #fe96db;
            width: 7px;
            height: 7px;
            margin: -3px;
          }

          .checkbox > input {
            width: 20px;
            height: 20px;
          }

          .right-bottom {
            display: flex;
            align-items: center;
            justify-content: space-between;
          }

          .down-arrow > img {
            width: 12px;
            height: 14px;
            margin-bottom: -2px;
            margin-left: 5px;
          }
          .new:hover {
            background-color: white;
          }
          .new {
            border-radius: 4px;
            border: none;
            width: 40px;
            height: 30px;
            background-color: #edeef5;
          }


          .check {
            display: flex;
            align-items: center;
          }
          .has-search .text {
            padding-left: 30px;
            margin-left: 45px;
          }
          .form {
            display: flex;
            align-items: center;
          }
          .searchIcon {
            margin-left: 53px;
            position: absolute;
            margin-top: 2px;
          }
          .text {
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 280px;
            height: 30px;
            background-color: #edeef5;
          }
          .buttons {
            display: flex;
            cursor: pointer !important;
            
          }

          .button{
            cursor: pointer !important;
            
          }
          .middle-buttons {
            display: flex;
          }

          .scroll-cards {
            width: 370px;
            height: 100%;
            overflow: auto;

            padding: 20px 0px 5px 0px;
          }
          .card {
            background-color: white;
            border-radius: 4px;
            margin-top: 8px;
            margin-bottom: 5px;
            padding: 25px 25px 15px 25px;
            transition: 0.3s;
          }
          .card:hover {
            box-shadow: 5px 1px 20px 1px #ddd;
            transform: scale(0.96);
          }

          .mail-names {
            color: grey;
            font-weight: bold;
            font-size: 15px;
            margin-left: 10px;
          }

          .mails {
            display: flex;
            align-items: center;
          }
          .mails > img {
            width: 35px;
            border-radius: 10px;
          }
          .mail-info {
            margin: 10px 65px;
            margin-left: 0px;
            line-height: 1.7;
            font-weight: 600;
          }
          .check1 {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100px;
          }
          .bottom-info {
            display: flex;
            justify-content: space-between;
          }
          .date {
            color: grey;
          }
          .person {
            width: 25px;
            height: 25px;
            border-radius: 10px;
            text-align: center;
            color: white;
            padding: 5px 3px 0px;
          }
          .border1 {
            background-color: #5f4bfd;
          }
          .border2 {
            background-color: #e32553;
          }
          .border3 {
            background-color: #01c828;
          }
          .message {
            margin: 20px 10px;
            flex: 1;
            background-color: white;
            padding: 25px;
            overflow: auto;
          }
          .mes-date {
            color: grey;
            font-size: 14px;
          }
          .who {
            font-weight: 600;
          }
          .title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            margin-top: 10px;
          }

          .message-from {
            margin-top: 20px;
            color: grey;
            font-size: 17px;
          }
          .attachment-last {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 350px;
          }
          .att-write {
            color: grey;
          }
          .buton0 {
            background-color: #ecefff;
            color: #7175c0;
          }
          .buton9 {
            background-color: #e0f8e3;
            color: #79b992;
          }

          .btn1 {
            border-radius: 3px;
            border: 1px;
            height: 25px;
            font-weight: bold;
          }
          .inside-img > img {
            width: 100px;
            border-radius: 10px;
            margin-top: 20px;
          }
          .inside-img > img:hover {
            transform: scale(0.95);
          }
          .son-buton {
            width: 100px;
            height: 68px;
            border-radius: 10px;
            border: 1px;
            margin-top: 17px;
            background-color: #f5e9f9;
            color: #b79ed8;
            font-weight: 500;
            font-size: 20px;
          }
          .son-images {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 520px;
          }
          .btn2 {
            margin-top: 40px;
            border-radius: 3px;
            border: 1px;
            height: 35px;
            padding: 5px 30px;
            color: white;
            position: relative;
          }
          .butona {
            background-color: #8e44ad;
          }
          .butonb {
            background-color: #fe4a85;
          }
          .butona:hover {
            background-color: #892bb4;
          }
          .butonb:hover {
            background-color: #ec195f;
          }
          ::-webkit-scrollbar {
            width: 10px;
          }

          /* Track */
          ::-webkit-scrollbar-track {
            background: #f1f1f1;
          }

          /* Handle */
          ::-webkit-scrollbar-thumb {
            background: #888;
          }

          /* Handle on hover */
          ::-webkit-scrollbar-thumb:hover {
            background: #555;
          }

          .right-header{
            padding: 1rem;
          }

    </style>

  </head>
  <body>

    <div class="right-header">

        <div class="right-bottom">
          <div class="check">
            <button class="new button" id="upload-template" title="Cargar template"> 
              <img width="21px" src="https://cdn0.iconfinder.com/data/icons/very-basic-2-android-l-lollipop-icon-pack/24/upload-2-512.png" />
            </button>
          </div>

          <div class="middle-buttons">
            <div class="buttons">
              <button class="new button" title="Recargar" id="button-reload"> 
                <img src="https://i.ibb.co/X4j3TZR/reload.png" />
              </button>

            <button class="new button" title="Visualizar"> 
              <img src="https://i.ibb.co/L60Yr87/eye.png" />
            </button
            >
              <button  class="new button" id="save-template" title="Guardar"> 
                <img width="15px" src="https://icons.iconarchive.com/icons/icons8/windows-8/512/Programming-Save-icon.png" />
            </button>
          </div>
          <div class="form has-search">
            
          </div>
        </div>

          <div class="search-arrow">
            <a href="#" class="button" id="save-template" title="Volver"> 
              <img width="25px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Small_arrow_pointing_left.svg/1280px-Small_arrow_pointing_left.svg.png" />
            </a>
          </div>
        </div>
  </div>

    <div id="gjs" style="height:0px; overflow:hidden;">
      {!! $product->description !!}
    </div>
    <div class="content" style="display:none !important;">
        <?php $locale = request()->get('locale') ?: app()->getLocale(); ?>
        <?php $channel = request()->get('channel') ?: core()->getDefaultChannelCode(); ?>

        {!! view_render_event('bagisto.admin.catalog.product.edit.before', ['product' => $product]) !!}

        <form method="POST" id="product-form"  action="" @submit.prevent="onSubmit" enctype="multipart/form-data">

            <div class="page-header">

                <div class="page-title">
                    <h1>
                        <i class="icon angle-left-icon back-link"
                           onclick="history.length > 1 ? history.go(-1) : window.location = '{{ route('admin.dashboard.index') }}';"></i>

                        {{ __('admin::app.catalog.products.edit-title') }}
                    </h1>

                    <div class="control-group">
                        <select class="control" id="channel-switcher" name="channel">
                            @foreach (core()->getAllChannels() as $channelModel)

                                <option
                                    value="{{ $channelModel->code }}" {{ ($channelModel->code) == $channel ? 'selected' : '' }}>
                                    {{ $channelModel->name }}
                                </option>

                            @endforeach
                        </select>
                    </div>

                    <div class="control-group">
                        <select class="control" id="locale-switcher" name="locale">
                            @foreach (core()->getAllLocales() as $localeModel)

                                <option
                                    value="{{ $localeModel->code }}" {{ ($localeModel->code) == $locale ? 'selected' : '' }}>
                                    {{ $localeModel->name }}
                                </option>

                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="page-action">
                    <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('admin::app.catalog.products.save-btn-title') }}
                    </button>
                </div>
            </div>

            <div class="page-content">
                @csrf()

                <input name="_method" type="hidden" value="PUT">

                @foreach ($product->attribute_family->attribute_groups as $index => $attributeGroup)
                    <?php $customAttributes = $product->getEditableAttributes($attributeGroup); ?>

                    @if (count($customAttributes))

                        {!! view_render_event('bagisto.admin.catalog.product.edit_form_accordian.' . $attributeGroup->name . '.before', ['product' => $product]) !!}

                        <accordian :title="'{{ __($attributeGroup->name) }}'"
                                   :active="{{$index == 0 ? 'true' : 'false'}}">
                            <div slot="body">
                                {!! view_render_event('bagisto.admin.catalog.product.edit_form_accordian.' . $attributeGroup->name . '.controls.before', ['product' => $product]) !!}

                                @foreach ($customAttributes as $attribute)

                                    <?php
                                        if ($attribute->code == 'guest_checkout' && ! core()->getConfigData('catalog.products.guest-checkout.allow-guest-checkout')) {
                                            continue;
                                        }

                                        $validations = [];

                                        if ($attribute->is_required) {
                                            array_push($validations, 'required');
                                        }

                                        if ($attribute->type == 'price') {
                                            array_push($validations, 'decimal');
                                        }

                                        if ($attribute->type == 'file') {
                                            $retVal = (core()->getConfigData('catalog.products.attribute.file_attribute_upload_size')) ? core()->getConfigData('catalog.products.attribute.file_attribute_upload_size') : '2048' ;
                                            array_push($validations, 'size:' . $retVal);
                                        }

                                        if ($attribute->type == 'image') { 
                                            $retVal = (core()->getConfigData('catalog.products.attribute.image_attribute_upload_size')) ? core()->getConfigData('catalog.products.attribute.image_attribute_upload_size') : '2048' ;
                                            array_push($validations, 'size:' . $retVal . '|mimes:jpeg, bmp, png, jpg');      
                                        }

                                        array_push($validations, $attribute->validation);

                                        $validations = implode('|', array_filter($validations));
                                    ?>

                                    @if (view()->exists($typeView = 'admin::catalog.products.field-types.' . $attribute->type))

                                        <div class="control-group {{ $attribute->type }}"
                                             @if ($attribute->type == 'multiselect') :class="[errors.has('{{ $attribute->code }}[]') ? 'has-error' : '']"
                                             @else :class="[errors.has('{{ $attribute->code }}') ? 'has-error' : '']" @endif>

                                            <label
                                                for="{{ $attribute->code }}" {{ $attribute->is_required ? 'class=required' : '' }}>
                                                {{ $attribute->admin_name }}

                                                @if ($attribute->type == 'price')
                                                    <span class="currency-code">({{ core()->currencySymbol(core()->getBaseCurrencyCode()) }})</span>
                                                @endif

                                                <?php
                                                $channel_locale = [];

                                                if ($attribute->value_per_channel) {
                                                    array_push($channel_locale, $channel);
                                                }

                                                if ($attribute->value_per_locale) {
                                                    array_push($channel_locale, $locale);
                                                }
                                                ?>

                                                @if (count($channel_locale))
                                                    <span class="locale">[{{ implode(' - ', $channel_locale) }}]</span>
                                                @endif
                                            </label>

                                            @include ($typeView)

                                            <span class="control-error"
                                                  @if ($attribute->type == 'multiselect') v-if="errors.has('{{ $attribute->code }}[]')"
                                                  @else  v-if="errors.has('{{ $attribute->code }}')"  @endif>
                                                @if ($attribute->type == 'multiselect')
                                                    @{{ errors.first('{!! $attribute->code !!}[]') }}
                                                @else
                                                    @{{ errors.first('{!! $attribute->code !!}') }}
                                                @endif
                                            </span>
                                        </div>

                                    @endif

                                @endforeach

                                @if ($attributeGroup->name == 'Price')

                                    @include ('admin::catalog.products.accordians.customer-group-price')

                                @endif

                                {!! view_render_event('bagisto.admin.catalog.product.edit_form_accordian.' . $attributeGroup->name . '.controls.after', ['product' => $product]) !!}
                            </div>
                        </accordian>

                        {!! view_render_event('bagisto.admin.catalog.product.edit_form_accordian.' . $attributeGroup->name . '.after', ['product' => $product]) !!}

                    @endif

                @endforeach

                {!! view_render_event(
                  'bagisto.admin.catalog.product.edit_form_accordian.additional_views.before',
                   ['product' => $product])
                !!}
                @foreach ($product->getTypeInstance()->getAdditionalViews() as $view)

                    @include ($view)

                @endforeach

                {!! view_render_event(
                  'bagisto.admin.catalog.product.edit_form_accordian.additional_views.after',
                   ['product' => $product])
                !!}
            </div>

        </form>

        {!! view_render_event('bagisto.admin.catalog.product.edit.after', ['product' => $product]) !!}
    </div>

    <script type="text/javascript">
        var editor = grapesjs.init({
            showOffsets: 1,
            noticeOnUnload: 0,
            container: '#gjs',
            plugins: ["gjs-blocks-basic"],
            pluginsOpts: {
            "gjs-blocks-basic": {
                /* ...options */
            }
            },
            height: '100%',
            fromElement: true,
            storageManager: { autoload: 0 },
            styleManager : {
            sectors: [{
                name: 'General',
                open: false,
                buildProps: ['float', 'display', 'position', 'top', 'right', 'left', 'bottom']
                },{
                name: 'Flex',
                open: false,
                buildProps: ['flex-direction', 'flex-wrap', 'justify-content', 'align-items', 'align-content', 'order', 'flex-basis', 'flex-grow', 'flex-shrink', 'align-self']
                },{
                name: 'Dimension',
                open: false,
                buildProps: ['width', 'height', 'max-width', 'min-height', 'margin', 'padding'],
                },{
                name: 'Typography',
                open: false,
                buildProps: ['font-family', 'font-size', 'font-weight', 'letter-spacing', 'color', 'line-height', 'text-shadow'],
                },{
                name: 'Decorations',
                open: false,
                buildProps: ['border-radius-c', 'background-color', 'border-radius', 'border', 'box-shadow', 'background'],
                },{
                name: 'Extra',
                open: false,
                buildProps: ['transition', 'perspective', 'transform'],
                }
            ],
            },
        });

        editor.BlockManager.add('testBlock', {
            label: 'Block',
            attributes: { class:'gjs-fonts gjs-f-b1' },
            content: `<div style="padding-top:50px; padding-bottom:50px; text-align:center">Test block</div>`
        })

        var button = document.getElementById("save-template");
      var uploadTemplate = document.getElementById("upload-template");
      var reset = document.getElementById("button-reload");




      button.addEventListener("click",function(e){
       
          document.getElementById('description').value = editor.getHtml() + '<style>'+editor.getCss()+'</style>';
          document.getElementById("product-form").submit();

      },false);

      reset.addEventListener("click",function(e){
          window.location.reload();

      },false);

      uploadTemplate.addEventListener("click",function(e){
        
        editor.setComponents(`<header id="i162" class="header-banner">
              <section id="i29cw" class="flex-sect">
                <div id="ityih" class="container-width">
                  <div class="flex-title">Flex is the new black
                  </div>
                  <div class="flex-desc">With flexbox system you're able to build complex layouts easily and with free responsivity
                  </div>
                  <div id="i966q" class="cards">
                    <div class="card">
                      <img id="iawm4j" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAiIHZpZXdCb3g9IjAgMCAyNCAyNCIgc3R5bGU9ImZpbGw6IHJnYmEoMCwwLDAsMC4xNSk7IHRyYW5zZm9ybTogc2NhbGUoMC43NSkiPgogICAgICAgIDxwYXRoIGQ9Ik04LjUgMTMuNWwyLjUgMyAzLjUtNC41IDQuNSA2SDVtMTYgMVY1YTIgMiAwIDAgMC0yLTJINWMtMS4xIDAtMiAuOS0yIDJ2MTRjMCAxLjEuOSAyIDIgMmgxNGMxLjEgMCAyLS45IDItMnoiPjwvcGF0aD4KICAgICAgPC9zdmc+"/>
                      <div class="card-body">
                        <div class="card-title">Title one
                        </div>
                        <div class="card-sub-title">Subtitle one
                        </div>
                        <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAiIHZpZXdCb3g9IjAgMCAyNCAyNCIgc3R5bGU9ImZpbGw6IHJnYmEoMCwwLDAsMC4xNSk7IHRyYW5zZm9ybTogc2NhbGUoMC43NSkiPgogICAgICAgIDxwYXRoIGQ9Ik04LjUgMTMuNWwyLjUgMyAzLjUtNC41IDQuNSA2SDVtMTYgMVY1YTIgMiAwIDAgMC0yLTJINWMtMS4xIDAtMiAuOS0yIDJ2MTRjMCAxLjEuOSAyIDIgMmgxNGMxLjEgMCAyLS45IDItMnoiPjwvcGF0aD4KICAgICAgPC9zdmc+" id="i86sxs"/>
                      <div class="card-body">
                        <div class="card-title">Title two
                        </div>
                        <div class="card-sub-title">Subtitle two
                        </div>
                        <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAiIHZpZXdCb3g9IjAgMCAyNCAyNCIgc3R5bGU9ImZpbGw6IHJnYmEoMCwwLDAsMC4xNSk7IHRyYW5zZm9ybTogc2NhbGUoMC43NSkiPgogICAgICAgIDxwYXRoIGQ9Ik04LjUgMTMuNWwyLjUgMyAzLjUtNC41IDQuNSA2SDVtMTYgMVY1YTIgMiAwIDAgMC0yLTJINWMtMS4xIDAtMiAuOS0yIDJ2MTRjMCAxLjEuOSAyIDIgMmgxNGMxLjEgMCAyLS45IDItMnoiPjwvcGF0aD4KICAgICAgPC9zdmc+" id="ijvz3l"/>
                      <div class="card-body">
                        <div class="card-title">Title three
                        </div>
                        <div class="card-sub-title">Subtitle three
                        </div>
                        <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAiIHZpZXdCb3g9IjAgMCAyNCAyNCIgc3R5bGU9ImZpbGw6IHJnYmEoMCwwLDAsMC4xNSk7IHRyYW5zZm9ybTogc2NhbGUoMC43NSkiPgogICAgICAgIDxwYXRoIGQ9Ik04LjUgMTMuNWwyLjUgMyAzLjUtNC41IDQuNSA2SDVtMTYgMVY1YTIgMiAwIDAgMC0yLTJINWMtMS4xIDAtMiAuOS0yIDJ2MTRjMCAxLjEuOSAyIDIgMmgxNGMxLjEgMCAyLS45IDItMnoiPjwvcGF0aD4KICAgICAgPC9zdmc+" id="i14ivu"/>
                      <div class="card-body">
                        <div class="card-title">Title four
                        </div>
                        <div class="card-sub-title">Subtitle four
                        </div>
                        <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAiIHZpZXdCb3g9IjAgMCAyNCAyNCIgc3R5bGU9ImZpbGw6IHJnYmEoMCwwLDAsMC4xNSk7IHRyYW5zZm9ybTogc2NhbGUoMC43NSkiPgogICAgICAgIDxwYXRoIGQ9Ik04LjUgMTMuNWwyLjUgMyAzLjUtNC41IDQuNSA2SDVtMTYgMVY1YTIgMiAwIDAgMC0yLTJINWMtMS4xIDAtMiAuOS0yIDJ2MTRjMCAxLjEuOSAyIDIgMmgxNGMxLjEgMCAyLS45IDItMnoiPjwvcGF0aD4KICAgICAgPC9zdmc+" id="ipr9gx"/>
                      <div class="card-body">
                        <div class="card-title">Title five
                        </div>
                        <div class="card-sub-title">Subtitle five
                        </div>
                        <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAiIHZpZXdCb3g9IjAgMCAyNCAyNCIgc3R5bGU9ImZpbGw6IHJnYmEoMCwwLDAsMC4xNSk7IHRyYW5zZm9ybTogc2NhbGUoMC43NSkiPgogICAgICAgIDxwYXRoIGQ9Ik04LjUgMTMuNWwyLjUgMyAzLjUtNC41IDQuNSA2SDVtMTYgMVY1YTIgMiAwIDAgMC0yLTJINWMtMS4xIDAtMiAuOS0yIDJ2MTRjMCAxLjEuOSAyIDIgMmgxNGMxLjEgMCAyLS45IDItMnoiPjwvcGF0aD4KICAgICAgPC9zdmc+" id="igahgt"/>
                      <div class="card-body">
                        <div class="card-title">Title six
                        </div>
                        <div class="card-sub-title">Subtitle six
                        </div>
                        <div class="card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <img id="iw55ui" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAiIHZpZXdCb3g9IjAgMCAyNCAyNCIgc3R5bGU9ImZpbGw6IHJnYmEoMCwwLDAsMC4xNSk7IHRyYW5zZm9ybTogc2NhbGUoMC43NSkiPgogICAgICAgIDxwYXRoIGQ9Ik04LjUgMTMuNWwyLjUgMyAzLjUtNC41IDQuNSA2SDVtMTYgMVY1YTIgMiAwIDAgMC0yLTJINWMtMS4xIDAtMiAuOS0yIDJ2MTRjMCAxLjEuOSAyIDIgMmgxNGMxLjEgMCAyLS45IDItMnoiPjwvcGF0aD4KICAgICAgPC9zdmc+"/>
            </header>
            <section id="i93ks" class="am-sect">
              <div id="iczvl" class="container-width">
                <div id="idmsi" class="am-container">
                  <img id="itwa8s" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAiIHZpZXdCb3g9IjAgMCAyNCAyNCIgc3R5bGU9ImZpbGw6IHJnYmEoMCwwLDAsMC4xNSk7IHRyYW5zZm9ybTogc2NhbGUoMC43NSkiPgogICAgICAgIDxwYXRoIGQ9Ik04LjUgMTMuNWwyLjUgMyAzLjUtNC41IDQuNSA2SDVtMTYgMVY1YTIgMiAwIDAgMC0yLTJINWMtMS4xIDAtMiAuOS0yIDJ2MTRjMCAxLjEuOSAyIDIgMmgxNGMxLjEgMCAyLS45IDItMnoiPjwvcGF0aD4KICAgICAgPC9zdmc+"/>
                  <div class="am-content">
                    <div class="am-pre">ASSET MANAGER
                    </div>
                    <div class="am-title">Manage your images with Asset Manager
                    </div>
                    <div class="am-desc">You can create image blocks with the command from the left panel and edit them with double click
                    </div>
                    <div class="am-post">Image uploading is not allowed in this demo
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section id="i3zx6" class="blk-sect">
              <div class="container-width">
                <div class="blk-title">Blocks
                </div>
                <div class="blk-desc">Each element in HTML page could be seen as a block. On the left panel you could find different kind of blocks that you can create, move and style
                </div>
                <div class="price-cards">
                  <div class="price-card-cont">
                    <div class="price-card">
                      <div class="pc-title">Starter
                      </div>
                      <div class="pc-desc">Some random list
                      </div>
                      <div class="pc-feature odd-feat">+ Starter feature 1
                      </div>
                      <div class="pc-feature">+ Starter feature 2
                      </div>
                      <div class="pc-feature odd-feat">+ Starter feature 3
                      </div>
                      <div class="pc-feature">+ Starter feature 4
                      </div>
                      <div class="pc-amount odd-feat">$ 9,90/mo
                      </div>
                    </div>
                  </div>
                  <div class="price-card-cont">
                    <div class="price-card pc-regular">
                      <div class="pc-title">Regular
                      </div>
                      <div class="pc-desc">Some random list
                      </div>
                      <div class="pc-feature odd-feat">+ Regular feature 1
                      </div>
                      <div class="pc-feature">+ Regular feature 2
                      </div>
                      <div class="pc-feature odd-feat">+ Regular feature 3
                      </div>
                      <div class="pc-feature">+ Regular feature 4
                      </div>
                      <div class="pc-amount odd-feat">$ 19,90/mo
                      </div>
                    </div>
                  </div>
                  <div class="price-card-cont">
                    <div class="price-card pc-enterprise">
                      <div class="pc-title">Enterprise
                      </div>
                      <div class="pc-desc">Some random list
                      </div>
                      <div class="pc-feature odd-feat">+ Enterprise feature 1
                      </div>
                      <div class="pc-feature">+ Enterprise feature 2
                      </div>
                      <div class="pc-feature odd-feat">+ Enterprise feature 3
                      </div>
                      <div class="pc-feature">+ Enterprise feature 4
                      </div>
                      <div class="pc-amount odd-feat">$ 29,90/mo
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section id="iwtvgk" class="bdg-sect">
              <div class="container-width">
                <h1 class="bdg-title">The team
                </h1>
                <div class="badges">
                  <div class="badge">
                    <div class="badge-header">
                    </div>
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAiIHZpZXdCb3g9IjAgMCAyNCAyNCIgc3R5bGU9ImZpbGw6IHJnYmEoMCwwLDAsMC4xNSk7IHRyYW5zZm9ybTogc2NhbGUoMC43NSkiPgogICAgICAgIDxwYXRoIGQ9Ik04LjUgMTMuNWwyLjUgMyAzLjUtNC41IDQuNSA2SDVtMTYgMVY1YTIgMiAwIDAgMC0yLTJINWMtMS4xIDAtMiAuOS0yIDJ2MTRjMCAxLjEuOSAyIDIgMmgxNGMxLjEgMCAyLS45IDItMnoiPjwvcGF0aD4KICAgICAgPC9zdmc+" class="badge-avatar"/>
                    <div class="badge-body">
                      <div class="badge-name">Adam Smith
                      </div>
                      <div class="badge-role">CEO
                      </div>
                      <div class="badge-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ipsum dolor sit
                      </div>
                    </div>
                    <div class="badge-foot">
                      <span class="badge-link">f</span>
                      <span class="badge-link">t</span>
                      <span class="badge-link">ln</span>
                    </div>
                  </div>
                  <div class="badge">
                    <div class="badge-header">
                    </div>
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAiIHZpZXdCb3g9IjAgMCAyNCAyNCIgc3R5bGU9ImZpbGw6IHJnYmEoMCwwLDAsMC4xNSk7IHRyYW5zZm9ybTogc2NhbGUoMC43NSkiPgogICAgICAgIDxwYXRoIGQ9Ik04LjUgMTMuNWwyLjUgMyAzLjUtNC41IDQuNSA2SDVtMTYgMVY1YTIgMiAwIDAgMC0yLTJINWMtMS4xIDAtMiAuOS0yIDJ2MTRjMCAxLjEuOSAyIDIgMmgxNGMxLjEgMCAyLS45IDItMnoiPjwvcGF0aD4KICAgICAgPC9zdmc+" class="badge-avatar"/>
                    <div class="badge-body">
                      <div class="badge-name">John Black
                      </div>
                      <div class="badge-role">Software Engineer
                      </div>
                      <div class="badge-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ipsum dolor sit
                      </div>
                    </div>
                    <div class="badge-foot">
                      <span class="badge-link">f</span>
                      <span class="badge-link">t</span>
                      <span class="badge-link">ln</span>
                    </div>
                  </div>
                  <div class="badge">
                    <div class="badge-header">
                    </div>
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAiIHZpZXdCb3g9IjAgMCAyNCAyNCIgc3R5bGU9ImZpbGw6IHJnYmEoMCwwLDAsMC4xNSk7IHRyYW5zZm9ybTogc2NhbGUoMC43NSkiPgogICAgICAgIDxwYXRoIGQ9Ik04LjUgMTMuNWwyLjUgMyAzLjUtNC41IDQuNSA2SDVtMTYgMVY1YTIgMiAwIDAgMC0yLTJINWMtMS4xIDAtMiAuOS0yIDJ2MTRjMCAxLjEuOSAyIDIgMmgxNGMxLjEgMCAyLS45IDItMnoiPjwvcGF0aD4KICAgICAgPC9zdmc+" class="badge-avatar"/>
                    <div class="badge-body">
                      <div class="badge-name">Jessica White
                      </div>
                      <div class="badge-role">Web Designer
                      </div>
                      <div class="badge-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ipsum dolor sit
                      </div>
                    </div>
                    <div class="badge-foot">
                      <span class="badge-link">f</span>
                      <span class="badge-link">t</span>
                      <span class="badge-link">ln</span>
                    </div>
                  </div>
                </div>
              </div>
            </section>

              <style>
              * {
                    box-sizing: border-box;
                  }
                  body {
                    margin: 0;
                  }
                  .clearfix{
                    clear:both;
                  }
                  .header-banner{
                    padding-top:35px;
                    padding-bottom:100px;
                    color:#ffffff;
                    font-family:Helvetica, serif;
                    font-weight:100;
                    background-attachment:scroll, scroll;
                    background-position:left top, center center;
                    background-repeat:repeat-y, no-repeat;
                    background-size:contain, cover;
                  }
                  .container-width{
                    width:90%;
                    max-width:1150px;
                    margin:0 auto;
                  }
                  .logo-container{
                    float:left;
                    width:50%;
                  }
                  .logo{
                    background-color:#fff;
                    border-radius:5px;
                    width:130px;
                    padding:10px;
                    min-height:30px;
                    text-align:center;
                    line-height:30px;
                    color:#4d114f;
                    font-size:23px;
                  }
                  .menu{
                    float:right;
                    width:50%;
                  }
                  .menu-item{
                    float:right;
                    font-size:15px;
                    color:#eee;
                    width:130px;
                    padding:10px;
                    min-height:50px;
                    text-align:center;
                    line-height:30px;
                    font-weight:400;
                  }
                  .lead-title{
                    margin:150px 0 30px 0;
                    font-size:40px;
                  }
                  .sub-lead-title{
                    max-width:650px;
                    line-height:30px;
                    margin-bottom:30px;
                    color:#c6c6c6;
                  }
                  .lead-btn{
                    margin-top:15px;
                    padding:10px;
                    width:190px;
                    min-height:30px;
                    font-size:20px;
                    text-align:center;
                    letter-spacing:3px;
                    line-height:30px;
                    background-color:#d983a6;
                    border-radius:5px;
                    transition:all 0.5s ease;
                    cursor:pointer;
                  }
                  .lead-btn:hover{
                    background-color:#ffffff;
                    color:#4c114e;
                  }
                  .lead-btn:active{
                    background-color:#4d114f;
                    color:#fff;
                  }
                  .flex-sect{
                    background-color:#fafafa;
                    padding:100px 0;
                    font-family:Helvetica, serif;
                  }
                  .flex-title{
                    margin-bottom:15px;
                    font-size:2em;
                    text-align:center;
                    font-weight:700;
                    color:#555;
                    padding:5px;
                  }
                  .flex-desc{
                    margin-bottom:55px;
                    font-size:1em;
                    color:rgba(0, 0, 0, 0.5);
                    text-align:center;
                    padding:5px;
                  }
                  .cards{
                    padding:20px 0;
                    display:flex;
                    justify-content:space-around;
                    flex-flow:wrap;
                  }
                  .card{
                    background-color:white;
                    height:300px;
                    width:300px;
                    margin-bottom:30px;
                    box-shadow:0 1px 2px 0 rgba(0, 0, 0, 0.2);
                    border-radius:2px;
                    transition:all 0.5s ease;
                    font-weight:100;
                    overflow:hidden;
                  }
                  .card:hover{
                    margin-top:-5px;
                    box-shadow:0 20px 30px 0 rgba(0, 0, 0, 0.2);
                  }
                  .card-header{
                    height:155px;
                    background-size:cover;
                    background-position:center center;
                  }
                  
                  .card-body{
                    padding:15px 15px 5px 15px;
                    color:#555;
                  }
                  .card-title{
                    font-size:1.4em;
                    margin-bottom:5px;
                  }
                  .card-sub-title{
                    color:#b3b3b3;
                    font-size:1em;
                    margin-bottom:15px;
                  }
                  .card-desc{
                    font-size:0.85rem;
                    line-height:17px;
                  }
                  .am-sect{
                    padding-top:100px;
                    padding-bottom:100px;
                    font-family:Helvetica, serif;
                  }
                  .img-phone{
                    float:left;
                  }
                  .am-container{
                    display:flex;
                    flex-wrap:wrap;
                    align-items:center;
                    justify-content:space-around;
                  }
                  .am-content{
                    float:left;
                    padding:7px;
                    width:490px;
                    color:#444;
                    font-weight:100;
                    margin-top:50px;
                  }
                  .am-pre{
                    padding:7px;
                    color:#b1b1b1;
                    font-size:15px;
                  }
                  .am-title{
                    padding:7px;
                    font-size:25px;
                    font-weight:400;
                  }
                  .am-desc{
                    padding:7px;
                    font-size:17px;
                    line-height:25px;
                  }
                  .am-post{
                    padding:7px;
                    line-height:25px;
                    font-size:13px;
                  }
                  .blk-sect{
                    padding-top:100px;
                    padding-bottom:100px;
                    background-color:#222222;
                    font-family:Helvetica, serif;
                  }
                  .blk-title{
                    color:#fff;
                    font-size:25px;
                    text-align:center;
                    margin-bottom:15px;
                  }
                  .blk-desc{
                    color:#b1b1b1;
                    font-size:15px;
                    text-align:center;
                    max-width:700px;
                    margin:0 auto;
                    font-weight:100;
                  }
                  .price-cards{
                    margin-top:70px;
                    display:flex;
                    flex-wrap:wrap;
                    align-items:center;
                    justify-content:space-around;
                  }
                  .price-card-cont{
                    width:300px;
                    padding:7px;
                    float:left;
                  }
                  .price-card{
                    margin:0 auto;
                    min-height:350px;
                    background-color:#d983a6;
                    border-radius:5px;
                    font-weight:100;
                    color:#fff;
                    width:90%;
                  }
                  .pc-title{
                    font-weight:100;
                    letter-spacing:3px;
                    text-align:center;
                    font-size:25px;
                    background-color:rgba(0, 0, 0, 0.1);
                    padding:20px;
                  }
                  .pc-desc{
                    padding:75px 0;
                    text-align:center;
                  }
                  .pc-feature{
                    color:rgba(255,255,255,0.5);
                    background-color:rgba(0, 0, 0, 0.1);
                    letter-spacing:2px;
                    font-size:15px;
                    padding:10px 20px;
                  }
                  .pc-feature:nth-of-type(2n){
                    background-color:transparent;
                  }
                  .pc-amount{
                    background-color:rgba(0, 0, 0, 0.1);
                    font-size:35px;
                    text-align:center;
                    padding:35px 0;
                  }
                  .pc-regular{
                    background-color:#da78a0;
                  }
                  .pc-enterprise{
                    background-color:#d66a96;
                  }
                  .footer-under{
                    background-color:#312833;
                    padding-bottom:100px;
                    padding-top:100px;
                    min-height:500px;
                    color:#eee;
                    position:relative;
                    font-weight:100;
                    font-family:Helvetica,serif;
                  }
                  .copyright{
                    background-color:rgba(0, 0, 0, 0.15);
                    color:rgba(238, 238, 238, 0.5);
                    bottom:0;
                    padding:1em 0;
                    position:absolute;
                    width:100%;
                    font-size:0.75em;
                  }
                  .made-with{
                    float:left;
                    width:50%;
                    padding:5px 0;
                  }
                  .foot-social-btns{
                    display:none;
                    float:right;
                    width:50%;
                    text-align:right;
                    padding:5px 0;
                  }
                  .footer-container{
                    display:flex;
                    flex-wrap:wrap;
                    align-items:stretch;
                    justify-content:space-around;
                  }
                  .foot-list{
                    float:left;
                    width:200px;
                  }
                  .foot-list-title{
                    font-weight:400;
                    margin-bottom:10px;
                    padding:0.5em 0;
                  }
                  .foot-list-item{
                    color:rgba(238, 238, 238, 0.8);
                    font-size:0.8em;
                    padding:0.5em 0;
                  }
                  .foot-list-item:hover{
                    color:rgba(238, 238, 238, 1);
                  }
                  .foot-form-cont{
                    width:300px;
                    float:right;
                  }
                  .foot-form-title{
                    color:rgba(255,255,255,0.75);
                    font-weight:400;
                    margin-bottom:10px;
                    padding:0.5em 0;
                    text-align:right;
                    font-size:2em;
                  }
                  .foot-form-desc{
                    font-size:0.8em;
                    color:rgba(255,255,255,0.55);
                    line-height:20px;
                    text-align:right;
                    margin-bottom:15px;
                  }
                  .sub-input{
                    width:100%;
                    margin-bottom:15px;
                    padding:7px 10px;
                    border-radius:2px;
                    color:#fff;
                    background-color:#554c57;
                    border:none;
                  }
                  .sub-btn{
                    width:100%;
                    margin:15px 0;
                    background-color:#785580;
                    border:none;
                    color:#fff;
                    border-radius:2px;
                    padding:7px 10px;
                    font-size:1em;
                    cursor:pointer;
                  }
                  .sub-btn:hover{
                    background-color:#91699a;
                  }
                  .sub-btn:active{
                    background-color:#573f5c;
                  }
                  .bdg-sect{
                    padding-top:100px;
                    padding-bottom:100px;
                    font-family:Helvetica, serif;
                    background-color:#fafafa;
                  }
                  .bdg-title{
                    text-align:center;
                    font-size:2em;
                    margin-bottom:55px;
                    color:#555555;
                  }
                  .badges{
                    padding:20px;
                    display:flex;
                    justify-content:space-around;
                    align-items:flex-start;
                    flex-wrap:wrap;
                  }
                  .badge{
                    width:290px;
                    font-family:Helvetica, serif;
                    background-color:white;
                    margin-bottom:30px;
                    box-shadow:0 2px 2px 0 rgba(0, 0, 0, 0.2);
                    border-radius:3px;
                    font-weight:100;
                    overflow:hidden;
                    text-align:center;
                  }
                  .badge-header{
                    height:115px;
                    background-position:left top, center center;
                    background-attachment:scroll, fixed;
                    overflow:hidden;
                  }
                  .badge-name{
                    font-size:1.4em;
                    margin-bottom:5px;
                  }
                  .badge-role{
                    color:#777;
                    font-size:1em;
                    margin-bottom:25px;
                  }
                  .badge-desc{
                    font-size:0.85rem;
                    line-height:20px;
                  }
                  .badge-avatar{
                    width:100px;
                    height:100px;
                    border-radius:100%;
                    border:5px solid #fff;
                    box-shadow:0 1px 1px 0 rgba(0, 0, 0, 0.2);
                    margin-top:-75px;
                    position:relative;
                  }
                  .badge-body{
                    margin:35px 10px;
                  }
                  .badge-foot{
                    color:#fff;
                    background-color:#a290a5;
                    padding-top:13px;
                    padding-bottom:13px;
                    display:flex;
                    justify-content:center;
                  }
                  .badge-link{
                    height:35px;
                    width:35px;
                    line-height:35px;
                    font-weight:700;
                    background-color:#fff;
                    color:#a290a5;
                    display:block;
                    border-radius:100%;
                    margin:0 10px;
                  }
                  #imjoij{
                    color:black;
                  }
                  .row{
                    display:flex;
                    justify-content:flex-start;
                    align-items:stretch;
                    flex-wrap:nowrap;
                    padding:10px;
                  }
                  .cell{
                    min-height:75px;
                    flex-grow:1;
                    flex-basis:100%;
                  }
                  @media (max-width: 768px){
                    .foot-form-cont{
                      width:400px;
                    }
                    .foot-form-title{
                      width:autopx;
                    }
                    .row{
                      flex-wrap:wrap;
                    }
                  }
                  @media (max-width: 480px){
                    .foot-lists{
                      display:none;
                    }
                  }

              </style>`);
      
      },false);

      

    </script>
  </body>
</html>
