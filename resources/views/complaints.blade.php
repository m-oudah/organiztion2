<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')



<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">{{__('trans.Complaints')}}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white"
                        href="{{route('index',$lang)}}">{{__('trans.home')}}</a></li>
                <li class="breadcrumb-item"> </li>
                <li class="breadcrumb-item text-primary active" aria-current="page">{{__('trans.Contact')}}</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="h-100">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                    {{__('trans.Contact')}}</div>
                    <h1 class="display-6 mb-3">{{__('trans.subcomplaints')}}</h1>
                    <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                        <div class="text-dark mb-2" style="text-align:justify">{{__('trans.aboutcomplaints')}}</div>
                    </div>
                </div>



            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">


                <!-- <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name"
                                    placeholder="{{__('trans.Your Name')}}">
                                <label for="name">{{__('trans.Your Name')}}</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email"
                                    placeholder="{{__('trans.Your Email')}}">
                                <label for="email">{{__('trans.Your Email')}}</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject"
                                    placeholder="{{__('trans.Subject')}}">
                                <label for="subject">{{__('trans.Subject')}}</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="{{__('trans.Message')}}" id="message"
                                    style="height: 100px"></textarea>
                                <label for="message">{{__('trans.Message')}}</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary py-2 px-3 me-3">
                                {{__('trans.Send Message')}}
                                <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- Contact End -->




@endsection