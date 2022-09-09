<?php $lang = app()->getLocale(); ?>

@extends('mainlayout')


@section('content')

@include('slider')




<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">{{__('trans.abouttitle')}}</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p><span class="text-primary me-2">#</span> {{__('trans.abouttitle')}}</p>
                <h1 class="display-5 mb-4"><span class="text-primary">{{__('trans.abouttitle2')}} </span></h1>
                <div class="mb-4">{!! __('trans.aboutdetails1') !!}</div>

                <a class="btn btn-primary py-3 px-5 mt-3" href="{{route('about',$lang)}}">
                    {{__('trans.Learn More')}}</a>
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


<!-- Facts Start -->
<div class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fas fa-globe fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">12</h1>
                <h3 class="text-white mb-0">{{__('trans.Working Countries')}}</h3>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fa fa-users fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">30</h1>
                <h3 class="text-white mb-0">{{__('trans.Satisfied Clients')}}</h3>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fa fa-certificate fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">120</h1>
                <h3 class="text-white mb-0">{{__('trans.Achieved Projects')}}</h3>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
                <h1 class="text-white mb-2" data-toggle="counter-up">20</h1>
                <h3 class="text-white mb-0">{{__('trans.Awards')}}</h3>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


<!-- Programs Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <p><span class="text-primary me-2">#</span> {{__('trans.What We Offer')}}</p>
                <h1 class="display-5 mb-0"> <span class="text-primary">{{__('trans.Our programs')}}</span></h1>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a class="btn btn-primary py-3 px-5"
                    href="{{route('programs',$lang)}}">{{__('trans.View More Services')}}</a>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="membership-item position-relative">
                    <img class="img-fluid" src="{{asset('assets/img/success.jpg')}}" alt="">
                    <h1 class="display-1"></h1>
                    <h5 class="text-white mt-6 mb-3">{{__('trans.Program Category')}}</h5>
                    <h3 class="text-primary mb-4">{{__('trans.service title')}}</h3>

                    <a class="btn btn-outline-light px-4 mt-3" href="{{route('programDetails',$lang)}}">
                        {{__('trans.View')}}</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="membership-item position-relative">
                    <img class="img-fluid" src="{{asset('assets/img/success.jpg')}}" alt="">
                    <h1 class="display-1"></h1>
                    <h5 class="text-white mt-6 mb-3">{{__('trans.Program Category')}}</h5>
                    <h3 class="text-primary mb-4">{{__('trans.service title')}}</h3>

                    <a class="btn btn-outline-light px-4 mt-3" href="{{route('programDetails',$lang)}}">
                        {{__('trans.View')}}</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="membership-item position-relative">
                    <img class="img-fluid" src="{{asset('assets/img/success.jpg')}}" alt="">
                    <h1 class="display-1"></h1>
                    <h5 class="text-white mt-6 mb-3">{{__('trans.Program Category')}}</h5>
                    <h3 class="text-primary mb-4">{{__('trans.service title')}}</h3>

                    <a class="btn btn-outline-light px-4 mt-3" href="{{route('programDetails',$lang)}}">
                        {{__('trans.View')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Programs End -->


<!-- Portofolio  Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <p><span class="text-primary me-2">#</span> {{__('trans.Latest Portfolio')}}</p>
                <h1 class="display-5 mb-0"><span class="text-primary">{{__('trans.PortfolioSub')}}</span> </h1>
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
                                <img class="img-fluid" style="min-height:240px" src="{{asset('assets/img/article-1.jpg')}}" alt="">
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">{{__('trans.category')}}</p>
                                    <h5 class="text-white mb-0">{{__('trans.prev work title')}}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

             <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="animal-item" href="{{asset('assets/img/article-2.jpg')}}" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" style="min-height:240px" src="{{asset('assets/img/article-2.jpg')}}" alt="">
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">{{__('trans.category')}}</p>
                                    <h5 class="text-white mb-0">{{__('trans.prev work title')}}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="animal-item" href="{{asset('assets/img/article-3.jpg')}}" data-lightbox="animal">
                            <div class="position-relative">
                                <img class="img-fluid" style="min-height:240px" src="{{asset('assets/img/article-3.jpg')}}" alt="">
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">{{__('trans.category')}}</p>
                                    <h5 class="text-white mb-0">{{__('trans.prev work title')}}</h5>
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
                                <img class="img-fluid" style="min-height:240px" src="{{asset('assets/img/article-1.jpg')}}" alt="">
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">{{__('trans.category')}}</p>
                                    <h5 class="text-white mb-0">{{__('trans.prev work title')}}</h5>
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
                                <img class="img-fluid" style="min-height:240px" src="{{asset('assets/img/article-3.jpg')}}" alt="">
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">{{__('trans.category')}}</p>
                                    <h5 class="text-white mb-0">{{__('trans.prev work title')}}</h5>
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
                                <img class="img-fluid" style="min-height:240px" src="{{asset('assets/img/article-2.jpg')}}" alt="">
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">{{__('trans.category')}}</p>
                                    <h5 class="text-white mb-0">{{__('trans.prev work title')}}</h5>
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

<!-- Service Start -->
<!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Our Services</p>
                    <h1 class="display-5 mb-0">Special Services For <span class="text-primary">Zoofari</span> Visitors</h1>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5">
                        <i class="fa fa-3x fa-mobile-alt text-white"></i>
                        <div class="ms-4">
                            <p class="text-white mb-0">Call for more info</p>
                            <h2 class="text-white mb-0">+012 345 6789</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid mb-3" src="{{asset('assets/img/icon/icon-2.png')}}" alt="Icon">
                    <h5 class="mb-3">Car Parking</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid mb-3" src="{{asset('assets/img/icon/icon-3.png')}}" alt="Icon">
                    <h5 class="mb-3">Animal Photos</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid mb-3" src="{{asset('assets/img/icon/icon-4.png')}}" alt="Icon">
                    <h5 class="mb-3">Guide Services</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <img class="img-fluid mb-3" src="{{asset('assets/img/icon/icon-5.png')}}" alt="Icon">
                    <h5 class="mb-3">Food & Beverages</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid mb-3" src="{{asset('assets/img/icon/icon-6.png')}}" alt="Icon">
                    <h5 class="mb-3">Zoo Shopping</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid mb-3" src="{{asset('assets/img/icon/icon-7.png')}}" alt="Icon">
                    <h5 class="mb-3">Free Hi Speed Wi-Fi</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid mb-3" src="{{asset('assets/img/icon/icon-8.png')}}" alt="Icon">
                    <h5 class="mb-3">Play Ground</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <img class="img-fluid mb-3" src="{{asset('assets/img/icon/icon-9.png')}}" alt="Icon">
                    <h5 class="mb-3">Rest House</h5>
                    <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</span>
                </div>
            </div>
        </div>
    </div> -->
<!-- Service End -->


<!-- Video Start -->
<div class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 vertical-align-middle wow fadeIn" data-wow-delay="0.3s">
                <h1 class=" mt-6 text-primary  mb-5">{{__('trans.video title')}}</h1>
                <span class="text-white">{{__('trans.video description')}}</span>

                <!-- <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                        </li>
                        <li class="list-group-item">
                            <span>Tuesday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Wednesday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Thursday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Friday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Saturday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Sunday</span>
                            <span>Closed</span>
                        </li>
                    </ul> -->
            </div>
            <div class="col-md-6 text-light wow fadeIn" data-wow-delay="0.5s">
                <!-- <h1 class="display-6 text-white mb-5">Contact Info</h1> -->

                <iframe width="100%" height="350px" src="https://www.youtube.com/embed/fjrprh9SvKw"
                    title="Watch To Donate Yemen - Donate with no Money Yemen #SafeYemen" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>

            </div>
        </div>
    </div>
</div>
<!-- Visiting Hours End -->



<!-- Articles Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <p><span class="text-primary me-2">#</span>{{__('trans.Our Blog')}}</p>
                <h1 class="display-5 mb-0"><span class="text-primary">{{__('trans.Our Blog Sub')}}</span></h1>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a class="btn btn-primary py-3 px-5" href="{{route('blog',$lang)}}"> {{__('trans.View More')}}</a>
            </div>
        </div>
        <div class="row g-4">

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="animal-item" href="{{route('articleDetails',$lang)}}" >
                            <div class="position-relative">
                                <img class="img-fluid" style="min-height:240px" src="{{asset('assets/img/article-1.jpg')}}" alt="">
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">{{__('trans.category')}}</p>
                                    <h5 class="text-white mb-0">{{__('trans.article title')}}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="animal-item" href="{{route('articleDetails',$lang)}}" >
                            <div class="position-relative">
                                <img class="img-fluid" style="min-height:240px" src="{{asset('assets/img/article-2.jpg')}}" alt="">
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">{{__('trans.category')}}</p>
                                    <h5 class="text-white mb-0">{{__('trans.article title')}}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4">
                    <div class="col-12">
                        <a class="animal-item" href="{{route('articleDetails',$lang)}}" >
                            <div class="position-relative">
                                <img class="img-fluid" style="min-height:240px" src="{{asset('assets/img/article-1.jpg')}}" alt="">
                                <div class="animal-text p-4">
                                    <p class="text-white small text-uppercase mb-0">{{__('trans.category')}}</p>
                                    <h5 class="text-white mb-0">{{__('trans.article title')}}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Articles End -->


<!-- Success Stories Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <p><span class="text-primary me-2">#</span> {{ __('trans.Success Stories')}}</p>
                <h1 class="display-5 mb-0"> <span class="text-primary">{{__('trans.Lets Meet With Our Ordinary Soldiers')}}</span></h1>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a class="btn btn-primary py-3 px-5"
                    href="{{route('successStories',$lang)}}">{{__('trans.View More')}}</a>
            </div>
        </div>
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
                    <h3 class="text-primary mb-2">{{__('trans.article title')}}3</h3>

                    <a class="btn btn-outline-light px-4 mt-3" href="{{route('storyDetails',$lang)}}">
                        {{__('trans.View')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Success Stories End -->

@endsection