<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')



<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">{{__('trans.Our Video Library')}}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white"
                        href="{{route('index',$lang)}}">{{__('trans.home')}}</a></li>
                <li class="breadcrumb-item"></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">{{__('trans.Our Video Library')}}
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->



<!-- About Start -->
<div class="container-fluid py-3">
    <div class="container pt-5 pb-3">
        <h2 class="display-5 text-uppercase text-center mb-5">{{__('trans.Explore Our Library of Videos')}}</h2>

        <div class="row">

            <div class="col-lg-4 col-md-6 mb-2 text-center">
                <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                    title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                    <h5 class="text-uppercase mt-2 mb-4">{{__('trans.article title')}}</h5>
            </div>
            <div class="col-lg-4 col-md-6 mb-2 text-center">
                <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                    title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                    <h5 class="text-uppercase mt-2 mb-4">{{__('trans.article title')}}</h5>
            </div>
            <div class="col-lg-4 col-md-6 mb-2 text-center">
                <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                    title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                    <h5 class="text-uppercase mt-2 mb-4">{{__('trans.article title')}}</h5>
            </div>
            <div class="col-lg-4 col-md-6 mb-2 text-center">
                <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                    title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                    <h5 class="text-uppercase mt-2 mb-4">{{__('trans.article title')}}</h5>
            </div>
            <div class="col-lg-4 col-md-6 mb-2 text-center">
                <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                    title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                    <h5 class="text-uppercase mt-2 mb-4">{{__('trans.article title')}}</h5>
            </div>
            <div class="col-lg-4 col-md-6 mb-2 text-center">
                <iframe src="https://www.youtube.com/embed/4Z9mUjtFJYY"
                    title="The USA 4K - Scenic Relaxation Film With Calming Music" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                    <h5 class="text-uppercase mt-2 mb-4">{{__('trans.article title')}}</h5>
            </div>
        </div>

    </div>
</div>
<!-- About End -->






@endsection