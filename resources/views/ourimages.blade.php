<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')




<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">{{__('trans.Our Media Library')}}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white"
                        href="{{route('index',$lang)}}">{{__('trans.home')}}</a></li>
                <li class="breadcrumb-item"></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">{{__('trans.Our Media Library')}}
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-fluid py-3">
    <div class="container pt-5 pb-3">
        <h2 class="display-5 text-uppercase text-center mb-5">{{__('trans.Explore Our Library of Media')}}</h2>

        <div class="row">

            <div class="col-lg-3 col-md-6 mb-2">
                <div class="team-item">
                    <a href=""><img class="img-fluid w-100" src="{{asset('assets/img/team-1.jpg')}}" alt=""> </a>
                    <div class="position-relative py-3">
                        <div
                            class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="team-item">
                    <a href=""><img class="img-fluid w-100" src="{{asset('assets/img/team-1.jpg')}}" alt=""> </a>
                    <div class="position-relative py-3">
                        <div
                            class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="team-item">
                    <a href=""><img class="img-fluid w-100" src="{{asset('assets/img/team-1.jpg')}}" alt=""> </a>
                    <div class="position-relative py-3">
                        <div
                            class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="team-item">
                    <a href=""><img class="img-fluid w-100" src="{{asset('assets/img/team-1.jpg')}}" alt=""> </a>
                    <div class="position-relative py-3">
                        <div
                            class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="team-item">
                    <a href=""><img class="img-fluid w-100" src="{{asset('assets/img/team-1.jpg')}}" alt=""> </a>
                    <div class="position-relative py-3">
                        <div
                            class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="team-item">
                    <a href=""><img class="img-fluid w-100" src="{{asset('assets/img/team-1.jpg')}}" alt=""> </a>
                    <div class="position-relative py-3">
                        <div
                            class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="team-item">
                    <a href=""><img class="img-fluid w-100" src="{{asset('assets/img/team-1.jpg')}}" alt=""> </a>
                    <div class="position-relative py-3">
                        <div
                            class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-2">
                <div class="team-item">
                    <a href=""><img class="img-fluid w-100" src="{{asset('assets/img/team-1.jpg')}}" alt=""> </a>
                    <div class="position-relative py-3">
                        <div
                            class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- About End -->






@endsection