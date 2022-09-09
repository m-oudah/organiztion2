<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')


 <!-- Page Header Start -->
 <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">{{__('trans.About')}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('index',$lang)}}">{{__('trans.home')}}</a></li>
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
                <p><span class="text-primary me-2">#</span> {{__('trans.abouttitle')}}</p>
                <h1 class="display-5 mb-4"><span class="text-primary">{{__('trans.abouttitle2')}} </span></h1>
                <div class="mb-4">{!! __('trans.aboutdetails') !!}</div>

                
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="img-border">
                    <img class="img-fluid" src="{{asset('assets/img/about.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->




@endsection