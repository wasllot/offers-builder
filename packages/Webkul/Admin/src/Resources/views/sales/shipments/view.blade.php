@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.sales.shipments.view-title', ['shipment_id' => $shipment->id]) }}
@stop

@section('content-wrapper')
    <?php $order = $shipment->order; ?>

    <div class="content full-page">
    
        <div class="page-header">
            <div class="page-title">
                <h1>
                    <i class="icon angle-left-icon back-link" onclick="history.length > 1 ? history.go(-1) : window.location = '{{ route('admin.dashboard.index') }}';"></i>

                    {{ __('admin::app.sales.shipments.view-title', ['shipment_id' => $shipment->id]) }}
                </h1>
                
                <h1>

                       - {{ __('admin::app.catalog.products.status') }}: 
                    </h1>
                    <div class="control-group" style="margin-right: 1rem;">
                        <h1>{{ $shipment->status}}</h1>
                    </div>
                   
            </div>


            <div class="page-action">
                <form method="POST" action="{{ route('admin.sales.shipments.status')}}" @submit.prevent="onSubmit" enctype="multipart/form-data">
                    @csrf()
                    <div class="control-group mr-2">
                            <select class="control" name="shipment-status">
                                
                                <option value="pending">Pendiente</option>
                                <option value="processed">Procesado</option>
                                <option value="dispatched">Remitido</option>
                                <option value="shipped">Enviado</option>
                                <option value="delivered">Entregado</option>

                            </select>

                    </div>

                    <input type="hidden" value="{{$shipment->id}}" name="shipment_id">
                    <button type="submit" class="btn btn-lg btn-primary">
                        Cambiar Estado
                    </button>
                </form>

            </div>

        </div>

        <div class="page-content">
            <div class="sale-container">

                <accordian :title="'{{ __('admin::app.sales.orders.order-and-account') }}'" :active="true">
                    <div slot="body">

                        <div class="sale-section">
                            <div class="secton-title">
                                <span>{{ __('admin::app.sales.orders.order-info') }}</span>
                            </div>

                            <div class="section-content">
                                <div class="row">
                                    <span class="title">
                                        {{ __('admin::app.sales.shipments.order-id') }}
                                    </span>

                                    <span class="value">
                                        <a href="{{ route('admin.sales.orders.view', $order->id) }}">#{{ $order->increment_id }}</a>
                                    </span>
                                </div>

                                <div class="row">
                                    <span class="title">
                                        {{ __('admin::app.sales.orders.order-date') }}
                                    </span>

                                    <span class="value">
                                        {{ $order->created_at }}
                                    </span>
                                </div>

                                <div class="row">
                                    <span class="title">
                                        {{ __('admin::app.sales.orders.order-status') }}
                                    </span>

                                    <span class="value">
                                        {{ $order->status_label }}
                                    </span>
                                </div>

                                <div class="row">
                                    <span class="title">
                                        {{ __('admin::app.sales.orders.channel') }}
                                    </span>

                                    <span class="value">
                                        {{ $order->channel_name }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="sale-section">
                            <div class="secton-title">
                                <span>{{ __('admin::app.sales.orders.account-info') }}</span>
                            </div>

                            <div class="section-content">
                                <div class="row">
                                    <span class="title">
                                        {{ __('admin::app.sales.orders.customer-name') }}
                                    </span>

                                    <span class="value">
                                        {{ $shipment->order->customer_full_name }}
                                    </span>
                                </div>

                                <div class="row">
                                    <span class="title">
                                        {{ __('admin::app.sales.orders.email') }}
                                    </span>

                                    <span class="value">
                                        {{ $shipment->order->customer_email }}
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </accordian>

                @if ($order->billing_address || $order->shipping_address)
                    <accordian :title="'{{ __('admin::app.sales.orders.address') }}'" :active="true">
                        <div slot="body">

                            @if ($order->billing_address)
                                <div class="sale-section">
                                    <div class="secton-title">
                                        <span>{{ __('admin::app.sales.orders.billing-address') }}</span>
                                    </div>

                                    <div class="section-content">

                                        @include ('admin::sales.address', ['address' => $order->billing_address])

                                    </div>
                                </div>
                            @endif

                            @if ($order->shipping_address)
                                <div class="sale-section">
                                    <div class="secton-title">
                                        <span>{{ __('admin::app.sales.orders.shipping-address') }}</span>
                                    </div>

                                    <div class="section-content">

                                        @include ('admin::sales.address', ['address' => $order->shipping_address])

                                    </div>
                                </div>
                            @endif

                        </div>
                    </accordian>
                @endif

                <accordian :title="'{{ __('admin::app.sales.orders.payment-and-shipping') }}'" :active="true">
                    <div slot="body">

                        <div class="sale-section">
                            <div class="secton-title">
                                <span>{{ __('admin::app.sales.orders.payment-info') }}</span>
                            </div>

                            <div class="section-content">
                                <div class="row">
                                    <span class="title">
                                        {{ __('admin::app.sales.orders.payment-method') }}
                                    </span>

                                    <span class="value">
                                        {{ core()->getConfigData('sales.paymentmethods.' . $order->payment->method . '.title') }}
                                    </span>
                                </div>

                                <div class="row">
                                    <span class="title">
                                        {{ __('admin::app.sales.orders.currency') }}
                                    </span>

                                    <span class="value">
                                        {{ $order->order_currency_code }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="sale-section">
                            <div class="secton-title">
                                <span>{{ __('admin::app.sales.orders.shipping-info') }}</span>
                            </div>

                            <div class="section-content">
                                <div class="row">
                                    <span class="title">
                                        {{ __('admin::app.sales.orders.shipping-method') }}
                                    </span>

                                    <span class="value">
                                        {{ $order->shipping_title }}
                                    </span>
                                </div>

                                <div class="row">
                                    <span class="title">
                                        {{ __('admin::app.sales.orders.shipping-price') }}
                                    </span>

                                    <span class="value">
                                        {{ core()->formatBasePrice($order->base_shipping_amount) }}
                                    </span>
                                </div>

                                @if ($shipment->inventory_source || $shipment->inventory_source_name)
                                    <div class="row">
                                        <span class="title">
                                            {{ __('admin::app.sales.shipments.inventory-source') }}
                                        </span>

                                        <span class="value">
                                            {{ $shipment->inventory_source ? $shipment->inventory_source->name : $shipment->inventory_source_name }}
                                        </span>
                                    </div>
                                @endif

                                <div class="row">
                                    <span class="title">
                                        {{ __('admin::app.sales.shipments.carrier-title') }}
                                    </span>

                                    <span class="value">
                                        {{ $shipment->carrier_title }}
                                    </span>
                                </div>

                                <div class="row">
                                    <span class="title">
                                        {{ __('admin::app.sales.shipments.tracking-number') }}
                                    </span>

                                    <span class="value">
                                        {{ $shipment->track_number }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </accordian>

                <accordian :title="'{{ __('admin::app.sales.orders.products-ordered') }}'" :active="true">
                    <div slot="body">

                        <div class="table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>{{ __('admin::app.sales.orders.SKU') }}</th>
                                        <th>{{ __('admin::app.sales.orders.product-name') }}</th>
                                        <th>{{ __('admin::app.sales.orders.qty') }}</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach ($shipment->items as $item)
                                        <tr>
                                            <td>{{ $item->sku }}</td>
                                            <td>
                                                {{ $item->name }}

                                                @if (isset($item->additional['attributes']))
                                                    <div class="item-options">

                                                        @foreach ($item->additional['attributes'] as $attribute)
                                                            <b>{{ $attribute['attribute_name'] }} : </b>{{ $attribute['option_label'] }}</br>
                                                        @endforeach

                                                    </div>
                                                @endif
                                            </td>
                                            <td>{{ $item->qty }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </accordian>

            </div>
        </div>
    </div>
@stop