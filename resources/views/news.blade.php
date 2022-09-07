<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')



    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">{{__('trans.News')}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('index',$lang)}}">{{__('trans.home')}}</a></li>
                    <li class="breadcrumb-item"></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">{{__('trans.News')}}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->




<!-- Articles Start -->
<div class="container-xxl bg-light my-5 py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">{{__('trans.Our Blog')}}
            </div>
            <h1 class="display-6 mb-5">{{__('trans.Our Blog Sub')}}</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>10 May 2022</small>
                        </div>
                        <h5 class="mb-3">{{__('trans.article title')}}</h5>
                        <p>{{__('trans.subarticle')}}</p>

                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{asset('assets/img/courses-1.jpg')}}" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="{{route('articleDetails',$lang)}}">
                                {{__('trans.View')}}
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>10 May 2022</small>
                        </div>
                        <h5 class="mb-3">{{__('trans.article title')}}</h5>
                        <p>{{__('trans.subarticle')}}</p>

                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{asset('assets/img/courses-2.jpg')}}" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="{{route('articleDetails',$lang)}}">
                                {{__('trans.View')}}
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>12 May 2022</small>
                        </div>
                        <h5 class="mb-3">{{__('trans.article title')}}</h5>
                        <p>{{__('trans.subarticle')}}</p>

                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{asset('assets/img/courses-3.jpg')}}" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="{{route('articleDetails',$lang)}}">
                                {{__('trans.View')}}
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>12 May 2022</small>
                        </div>
                        <h5 class="mb-3">{{__('trans.article title')}}</h5>
                        <p>{{__('trans.subarticle')}}</p>

                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{asset('assets/img/courses-3.jpg')}}" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="{{route('articleDetails',$lang)}}">
                                {{__('trans.View')}}
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>12 May 2022</small>
                        </div>
                        <h5 class="mb-3">{{__('trans.article title')}}</h5>
                        <p>{{__('trans.subarticle')}}</p>

                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{asset('assets/img/courses-3.jpg')}}" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="{{route('articleDetails',$lang)}}">
                                {{__('trans.View')}}
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div
                    class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>12 May 2022</small>
                        </div>
                        <h5 class="mb-3">{{__('trans.article title')}}</h5>
                        <p>{{__('trans.subarticle')}}</p>

                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{asset('assets/img/courses-3.jpg')}}" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="{{route('articleDetails',$lang)}}">
                                {{__('trans.View')}}
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


       



    </div>
</div>
<!-- Articles End -->






@endsection