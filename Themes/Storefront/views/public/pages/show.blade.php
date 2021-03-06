@extends('public.layout')

@section('title', $page->name)

@push('meta')
    <meta name="title" content="{{ $page->meta->meta_title ?: $page->name }}">
    <meta name="description" content="{{ $page->meta->meta_description }}">
    <meta name="twitter:card" content="summary">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $page->meta->meta_title ?: $page->name }}">
    <meta property="og:description" content="{{ $page->meta->meta_description }}">
    <meta property="og:image" content="{{ $logo }}">
    <meta property="og:locale" content="{{ locale() }}">

    @foreach (supported_locale_keys() as $code)
        <meta property="og:locale:alternate" content="{{ $code }}">
    @endforeach
@endpush

@section('content')
    <section class="custom-page-wrap clearfix">
        <div class="container">
            <div class="row">
                <div class="col products-left">
                    <div class="custom-page-content clearfix">
                        {!! $page->body !!}
                    </div>
                </div>
                <div class="right-sidebar col-lg-5 col-xl-5">
                    @include('public.layout.right_sidebar')
                </div>
            </div>
        </div>
    </section>
@endsection
