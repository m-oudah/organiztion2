<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')



 <!-- Page Header Start -->
 <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">{{__('trans.Success Stories')}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('index',$lang)}}">{{__('trans.home')}}</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">{{__('trans.Success Stories')}}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


<!-- Success Stories Start -->
<div class="container-xxl py-5">
    <div class="container">
       
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="membership-item position-relative">
                    <img class="img-fluid" src="{{asset('assets/img/success.jpg')}}" alt="">
                    <h1 class="display-1"></h1>
                    <h5 class="text-white mt-6 mb-3">{{__('trans.Program Category')}}</h5>
                    <h3 class="text-primary mb-2">{{__('trans.article title')}}1</h3>

                    <a class="btn btn-outline-light px-4 mt-3" href="{{route('storyDetails',$lang)}}">
                        {{__('trans.View')}}</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="membership-item position-relative">
                    <img class="img-fluid" src="{{asset('assets/img/success.jpg')}}" alt="">
                    <h1 class="display-1"></h1>
                    <h5 class="text-white mt-6 mb-3">{{__('trans.Program Category')}}</h5>
                    <h3 class="text-primary mb-2">{{__('trans.article title')}}2</h3>

                    <a class="btn btn-outline-light px-4 mt-3" href="{{route('storyDetails',$lang)}}">
                        {{__('trans.View')}}</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="membership-item position-relative">
                    <img class="img-fluid" src="{{asset('assets/img/success.jpg')}}" alt="">
                    <h1 class="display-1"></h1>
                    <h5 class="text-white mt-6 mb-3">{{__('trans.Program Category')}}</h5>
                    <h3 class="text-primary mb-2">{{__('trans.article title')}}1</h3>

                    <a class="btn btn-outline-light px-4 mt-3" href="{{route('storyDetails',$lang)}}">
                        {{__('trans.View')}}</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="membership-item position-relative">
                    <img class="img-fluid" src="{{asset('assets/img/success.jpg')}}" alt="">
                    <h1 class="display-1"></h1>
                    <h5 class="text-white mt-6 mb-3">{{__('trans.Program Category')}}</h5>
                    <h3 class="text-primary mb-2">{{__('trans.article title')}}2</h3>

                    <a class="btn btn-outline-light px-4 mt-3" href="{{route('storyDetails',$lang)}}">
                        {{__('trans.View')}}</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="membership-item position-relative">
                    <img class="img-fluid" src="{{asset('assets/img/success.jpg')}}" alt="">
                    <h1 class="display-1"></h1>
                    <h5 class="text-white mt-6 mb-3">{{__('trans.Program Category')}}</h5>
                    <h3 class="text-primary mb-2">{{__('trans.article title')}}3</h3>

                    <a class="btn btn-outline-light px-4 mt-3" href="{{route('storyDetails',$lang)}}">
                        {{__('trans.View')}}</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="membership-item position-relative">
                    <img class="img-fluid" src="{{asset('assets/img/success.jpg')}}" alt="">
                    <h1 class="display-1"></h1>
                    <h5 class="text-white mt-6 mb-3">{{__('trans.Program Category')}}</h5>
                    <h3 class="text-primary mb-2">{{__('trans.article title')}}2</h3>

                    <a class="btn btn-outline-light px-4 mt-3" href="{{route('storyDetails',$lang)}}">
                        {{__('trans.View')}}</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="membership-item position-relative">
                    <img class="img-fluid" src="{{asset('assets/img/success.jpg')}}" alt="">
                    <h1 class="display-1"></h1>
                    <h5 class="text-white mt-6 mb-3">{{__('trans.Program Category')}}</h5>
                    <h3 class="text-primary mb-2">{{__('trans.article title')}}2</h3>

                    <a class="btn btn-outline-light px-4 mt-3" href="{{route('storyDetails',$lang)}}">
                        {{__('trans.View')}}</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="membership-item position-relative">
                    <img class="img-fluid" src="{{asset('assets/img/success.jpg')}}" alt="">
                    <h1 class="display-1"></h1>
                    <h5 class="text-white mt-6 mb-3">{{__('trans.Program Category')}}</h5>
                    <h3 class="text-primary mb-2">{{__('trans.article title')}}2</h3>

                    <a class="btn btn-outline-light px-4 mt-3" href="{{route('storyDetails',$lang)}}">
                        {{__('trans.View')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Success Stories End -->





@endsection