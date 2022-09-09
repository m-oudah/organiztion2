
    <!-- Header Start -->
    <div class="container-fluid bg-dark p-0 mb-5">
        <div class="row g-0 flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
                <div class="header-bg h-100 d-flex flex-column justify-content-center p-5">
                <p class="fs-5 text-white mb-2 animated slideInDown">{{__('trans.slider1sub')}}</p>
   
                <h1 class="display-4 text-light mb-5">{{__('trans.slider1')}}</h1>

                    <div class="d-flex align-items-center pt-4 animated slideInDown">
                        <a href="{{route('contact',$lang)}}" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5">{{__('trans.Contact')}}</a>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel" style="direction:ltr;">
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{asset('assets/img/carousel-1.jpg')}}" style="min-height:520px" alt="">
                    </div>
                    <div class="owl-carousel-item">
                    <img class="img-fluid" src="{{asset('assets/img/carousel-3.jpg')}}" style="min-height:520px" alt="">
                    </div>
                    <!-- <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{asset('assets/img/carousel-3.jpg')}}" alt="">
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->