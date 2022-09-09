<?php $lang = app()->getLocale(); ?>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>{{__('trans.location')}}</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="{{route('index',$lang)}}" class="navbar-brand p-0">
            <!-- <img class="img-fluid me-3" src="{{asset('assets/img/icon/icon-10.png')}}" alt="Icon"> -->
            <h1 class="m-0 text-primary">Organ. Profile</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
          
        <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{route('index',$lang)}}" class="nav-item nav-link active">{{__('trans.home')}}</a>
                    <a href="{{route('about',$lang)}}" class="nav-item nav-link">{{__('trans.About')}}</a>
                    <a href="{{route('programs',$lang)}}" class="nav-item nav-link">{{__('trans.Programs')}}</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('trans.Media')}}</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{route('blog',$lang)}}" class="dropdown-item">{{__('trans.Blog')}}</a>
                            <a href="{{route('ourImages',$lang)}}" class="dropdown-item">{{__('trans.Galleries')}}</a>
                            <a href="{{route('ourVideos',$lang)}}" class="dropdown-item">{{__('trans.Videos')}}</a>
                        </div>
                    </div>
                    <a href="{{route('news',$lang)}}" class="nav-item nav-link">{{__('trans.News')}}</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('trans.Success Stories')}}</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{route('successStories',$lang)}}" class="dropdown-item">{{__('trans.Success Stories')}}</a>
                            <a href="{{route('ourVideos',$lang)}}" class="dropdown-item">{{__('trans.Videos')}}</a>
                        </div>
                    </div>
                    <a href="{{route('annualReports',$lang)}}" class="nav-item nav-link">{{__('trans.Annual Reports')}}</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('trans.Contact')}}</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{route('contact',$lang)}}" class="dropdown-item">{{__('trans.Contact Us')}}</a>
                            <a href="{{route('complaints',$lang)}}" class="dropdown-item">{{__('trans.Complaints')}}</a>
                            <a href="{{route('contributions',$lang)}}" class="dropdown-item">{{__('trans.Contribute')}}</a>
                        </div>
                    </div>
                </div>
                @if ($lang=='en')
                    <a class="btn btn-primary" href="/ar">
                        العربية                        
                    </a>
                    @else
                    <a class="btn btn-primary" href="/en">
                        English                        
                    </a>
                    @endif

        </div>
    </nav>
    <!-- Navbar End -->
