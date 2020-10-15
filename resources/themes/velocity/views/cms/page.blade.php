@extends('shop::layouts.master')

@section('page_title')
    {{ $page->page_title }}
@endsection

@section('head')
    @isset($page->meta_title)
        <meta name="title" content="{{ $page->meta_title }}" />
    @endisset

    @isset($page->meta_description)
        <meta name="description" content="{{ $page->meta_description }}" />
    @endisset

    @isset($page->meta_keywords)
        <meta name="keywords" content="{{ $page->meta_keywords }}" />
    @endisset
@endsection

@section('full-content-wrapper')
<div class="hero-wrap hero-wrap-2" style="background-image: url('themes/website/assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-12 text-center mb-5">
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span><span>@isset($page->meta_title)
        {{ $page->meta_title }}
    @endisset</span></p>
            <h1 class="mb-3 bread">    @isset($page->meta_title)
        {{ $page->meta_title }}
    @endisset</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="cms-page-container cart-details row offset-1">
        {!! DbView::make($page)->field('html_content')->render() !!}
    </div>
@endsection