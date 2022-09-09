<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')


     <!-- Page Header Start -->
 <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">{{__('trans.Annual Reports')}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('index',$lang)}}">{{__('trans.home')}}</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">{{__('trans.Annual Reports')}}</li>
                </ol>
            </nav>
        </div>
 </div>
<!-- Page Header End -->



<!-- Articles Start -->
<div class="container my-5 ">
    <div class="container py-5">
       
        <div class="row g-4 ">
            <div class="col-lg-4 col-md-6 wow  fadeInUp" data-wow-delay="0.1s">
                <div
                    class="causes-item d-flex flex-column bg-light  border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>15 May 2022</small>
                        </div>
                        <h5 class="mb-3">{{__('trans.report title')}}</h5>
                        <p><a href="#">{{__('trans.download file')}}</a>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div
                    class="causes-item d-flex flex-column bg-light  border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>15 May 2022</small>
                        </div>
                        <h5 class="mb-3">{{__('trans.report title')}}</h5>
                        <p><a href="#">{{__('trans.download file')}}</a>

                    </div>
                   
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div
                    class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>15 May 2022</small>
                        </div>
                        <h5 class="mb-3">{{__('trans.report title')}}</h5>
                        <p><a href="#">{{__('trans.download file')}}</a>

                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div
                    class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>15 May 2022</small>
                        </div>
                        <h5 class="mb-3">{{__('trans.report title')}}</h5>
                        <p><a href="#">{{__('trans.download file')}}</a>

                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div
                    class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>15 May 2022</small>
                        </div>
                        <h5 class="mb-3">{{__('trans.report title')}}</h5>
                        <p><a href="#">{{__('trans.download file')}}</a>

                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div
                    class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>15 May 2022</small>
                        </div>
                        <h5 class="mb-3">{{__('trans.report title')}}</h5>
                        <p><a href="#">{{__('trans.download file')}}</a>

                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div
                    class="causes-item d-flex flex-column bg-light border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>15 May 2022</small>
                        </div>
                        <h5 class="mb-3">{{__('trans.report title')}}</h5>
                        <p><a href="#">{{__('trans.download file')}}</a>

                    </div>
                    
                </div>
            </div>
            
        </div>





    </div>
</div>
<!-- Articles End -->






@endsection