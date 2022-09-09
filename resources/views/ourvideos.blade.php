<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')

<!-- Page Header Start -->
<div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-4 text-white mb-3 animated slideInDown">{{__('trans.Our Video Library')}}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-white"
                        href="{{route('index',$lang)}}">{{__('trans.home')}}</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">{{__('trans.Our Video Library')}}
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Portofolio  Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <!-- <h3 class="display-5 mb-0"><span class="text-primary">{{__('trans.PortfolioSub')}}</span> </h3> -->
            </div>
            <div class="col-lg-6 text-lg-end">
                <!-- <a class="btn btn-primary py-3 px-5" href="">Explore More Animals</a> -->
            </div>
        </div>
        <div class="row g-4">

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="animal-item" href="{{asset('assets/img/article-1.jpg')}}" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{asset('assets/img/article-1.jpg')}}" style="min-height:240px" alt="">
                                <div class="animal-text p-4">
                                    <!-- <p class="text-white small text-uppercase mb-0">{{__('trans.category')}}</p>
                                    <h5 class="text-white mb-0">{{__('trans.prev work title')}}</h5> -->
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="animal-item" href="{{asset('assets/img/article-2.jpg')}}"  data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{asset('assets/img/article-2.jpg')}}" style="min-height:240px" alt="">
                                <div class="animal-text p-4">
                                    <!-- <p class="text-white small text-uppercase mb-0">{{__('trans.category')}}</p>
                                    <h5 class="text-white mb-0">{{__('trans.prev work title')}}</h5> -->
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="animal-item" href="{{asset('assets/img/article-3.jpg')}}">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{asset('assets/img/article-3.jpg')}}" style="min-height:240px" alt="">
                                <div class="animal-text p-4">
                                    <!-- <p class="text-white small text-uppercase mb-0">{{__('trans.category')}}</p>
                                    <h5 class="text-white mb-0">{{__('trans.prev work title')}}</h5> -->
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="animal-item" href="{{asset('assets/img/article-1.jpg')}}" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{asset('assets/img/article-1.jpg')}}" style="min-height:240px" alt="">
                                <div class="animal-text p-4">
                                    <!-- <p class="text-white small text-uppercase mb-0">{{__('trans.category')}}</p>
                                    <h5 class="text-white mb-0">{{__('trans.prev work title')}}</h5> -->
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="animal-item" href="{{asset('assets/img/article-3.jpg')}}" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{asset('assets/img/article-3.jpg')}}" style="min-height:240px" alt="">
                                <div class="animal-text p-4">
                                    <!-- <p class="text-white small text-uppercase mb-0">{{__('trans.category')}}</p>
                                    <h5 class="text-white mb-0">{{__('trans.prev work title')}}</h5> -->
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="animal-item" href="{{asset('assets/img/article-2.jpg')}}" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{asset('assets/img/article-2.jpg')}}" style="min-height:240px" alt="">
                                <div class="animal-text p-4">
                                    <!-- <p class="text-white small text-uppercase mb-0">{{__('trans.category')}}</p>
                                    <h5 class="text-white mb-0">{{__('trans.prev work title')}}</h5> -->
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="animal-item" href="{{asset('assets/img/article-3.jpg')}}" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{asset('assets/img/article-3.jpg')}}" style="min-height:240px" alt="">
                                <div class="animal-text p-4">
                                    <!-- <p class="text-white small text-uppercase mb-0">{{__('trans.category')}}</p>
                                    <h5 class="text-white mb-0">{{__('trans.prev work title')}}</h5> -->
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</div>
<!-- Portofolio End -->


@endsection