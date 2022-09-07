<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')



    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">{{__('trans.Success Stories')}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('index',$lang)}}">{{__('trans.home')}}</a></li>
                    <li class="breadcrumb-item"></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">{{__('trans.Success Stories')}}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



    <!-- Success Stories Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">

            <h1 class="display-6 mb-5">{{__('trans.Lets Meet With Our Ordinary Soldiers')}}</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{asset('assets/img/team-1.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5><a href="{{route('storyDetails',$lang) }}">{{__('trans.article title')}}</a></h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{asset('assets/img/team-1.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5><a href="{{route('storyDetails',$lang) }}">{{__('trans.article title')}}</a></h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{asset('assets/img/team-4.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5><a href="{{route('storyDetails',$lang) }}">{{__('trans.article title')}}</a></h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{asset('assets/img/team-2.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5><a href="{{route('storyDetails',$lang) }}">{{__('trans.article title')}}</a></h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{asset('assets/img/team-1.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5><a href="{{route('storyDetails',$lang) }}">{{__('trans.article title')}}</a></h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{asset('assets/img/team-2.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5><a href="{{route('storyDetails',$lang) }}">{{__('trans.article title')}}</a></h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{asset('assets/img/team-3.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5><a href="{{route('storyDetails',$lang) }}">{{__('trans.article title')}}</a></h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{asset('assets/img/team-4.jpg')}}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5><a href="{{route('storyDetails',$lang) }}">{{__('trans.article title')}}</a></h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Success Stories End -->






@endsection