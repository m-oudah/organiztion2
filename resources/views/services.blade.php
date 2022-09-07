<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')



<!-- Page Header Start -->
<div class="container-fluid page-header">
    <h1 class="display-3 text-uppercase text-white mb-3">{{__('trans.Services')}}</h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a class="text-white" href="{{route('index',$lang)}}">{{__('trans.home')}}</a></h6>
        <h6 class="text-body m-0 px-3">/</h6>
        <h6 class="text-uppercase text-body m-0">{{__('trans.Services')}}</h6>
    </div>
</div>
<!-- Page Header Start -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <h5 class="display-6 text-primary text-center">{{__('trans.What We Offer')}}</h5>
        <h1 class="display-4 text-uppercase text-center mb-5">{{__('trans.Our Services')}}</h1>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4" src="{{asset('assets/img/serv.jpg')}}" alt="">
                    <h4 class="text-uppercase mb-4">{{__('trans.service title')}}</h4>

                    <a class="btn btn-primary px-3" href="{{route('serviceDetails',$lang)}}">{{__('trans.View')}} > </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4" src="{{asset('assets/img/serv2.jpg')}}" alt="">
                    <h4 class="text-uppercase mb-4">{{__('trans.service title')}}</h4>
                    <a class="btn btn-primary px-3" href="{{route('serviceDetails',$lang)}}">{{__('trans.View')}} ></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4" src="{{asset('assets/img/serv.jpg')}}" alt="">
                    <h4 class="text-uppercase mb-4">{{__('trans.service title')}}</h4>
                 
                    <a class="btn btn-primary px-3" href="{{route('serviceDetails',$lang)}}">{{__('trans.View')}} ></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4" src="{{asset('assets/img/serv2.jpg')}}" alt="">
                    <h4 class="text-uppercase mb-4">{{__('trans.service title')}}</h4>
                    <a class="btn btn-primary px-3" href="{{route('serviceDetails',$lang)}}">{{__('trans.View')}} ></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4" src="{{asset('assets/img/serv.jpg')}}" alt="">
                    <h4 class="text-uppercase mb-4">{{__('trans.service title')}}</h4>
                    <a class="btn btn-primary px-3" href="{{route('serviceDetails',$lang)}}">{{__('trans.View')}} ></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="rent-item mb-4">
                    <img class="img-fluid mb-4" src="{{asset('assets/img/serv2.jpg')}}" alt="">
                    <h4 class="text-uppercase mb-4">{{__('trans.service title')}}</h4>
                    <a class="btn btn-primary px-3" href="{{route('serviceDetails',$lang)}}">{{__('trans.View')}} ></a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- About End -->


<!-- Vendor Start -->
<div class="container-fluid py-2">
    <div class="container py-5">
        <div class="owl-carousel vendor-carousel">
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-1.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-2.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-3.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-4.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-5.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-6.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-7.png')}}" alt="">
            </div>
            <div class="bg-light p-4">
                <img src="{{asset('assets/img/vendor-8.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->






@endsection