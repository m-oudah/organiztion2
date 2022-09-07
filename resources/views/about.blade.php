<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')



    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">{{__('trans.About')}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('index',$lang)}}">{{__('trans.home')}}</a></li>
                    <li class="breadcrumb-item"> </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">{{__('trans.About')}}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



    
<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100 pt-5 pe-5" src="{{asset('assets/img/about-1.jpg')}}"
                        alt="" style="object-fit: cover;">
                    <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2"
                        src="{{asset('assets/img/about-2.jpg')}}" alt="" style="width: 200px; height: 200px;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                        {{__('trans.abouttitle')}}</div>
                    <h1 class="display-6 mb-5">{{__('trans.abouttitle2')}}</h1>
                    <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                        <div class="text-dark mb-2" style="text-align:justify">{{__('trans.aboutdetails1')}}</div>

                    </div>

                   
                    <a class="btn btn-outline-primary py-2 px-3" href="">
                        {{__('trans.Contact Us')}}
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->





@endsection