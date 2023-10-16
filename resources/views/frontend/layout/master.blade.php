<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fastkart">
    <meta name="keywords" content="Fastkart">
    <meta name="author" content="Fastkart">
    <link rel="icon" href="{{asset('frontend//images/favicon/1.png')}}" type="image/x-icon">
    <title>@yield('title','E-Commerce Project ')| Online Shop</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{asset('frontend/css/vendors/bootstrap.css')}}">

    <!-- wow css -->
    <link rel="stylesheet" href="{{asset('frontend//css/animate.min.css')}}" />

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend//css/vendors/font-awesome.css')}}">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend//css/vendors/feather-icon.css')}}">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend//css/vendors/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend//css/vendors/slick/slick-theme.css')}}">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend//css/bulk-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend//css/vendors/animate.css')}}">
    @stack('css_link')

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{asset('frontend//css/style.css')}}">
    @stack('css')
</head>

<body class="bg-effect">

    <!-- Loader Start -->
    <!-- <div class="fullpage-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div> -->
    <!-- Loader End -->

    <!-- Header Start -->
    <header class="pb-md-4 pb-0">
        {{-- Top Header Start --}}
        @include('frontend.include.header.top')
        {{-- Top Header End --}}

     {{-- Middle Header Start  --}}
     @include('frontend.include.header.middle')
     {{-- Middle Header End --}}

      {{-- Buttom Header Start --}}
      @include('frontend.include.header.end')
      {{-- Buttom Header End --}}

    </header>
    {{-- <!-- Header End --> --}}

    {{-- <!-- mobile fix menu start --> --}}
    @include('frontend.include.header.mobile_menu')
    <!-- mobile fix menu end -->

@yield('content')

 {{-- <!-- main content --> --}}

    {{-- <!-- Footer Section Start --> --}}
    @include('frontend.include.footer.footer')
    {{-- <!-- Footer Sect/ion End --> --}}

    {{-- <!-- Quick View Modal Box Start --> --}}
    @include('frontend.include.modal.quick_view')
    {{-- <!-- Quick View Modal Box End --> --}}

    {{-- <!-- Location Modal Start --> --}}
        @include('frontend.include.modal.location')
    {{-- <!-- Location Modal End --> --}}

    {{-- <!-- Cookie Bar Box Start --> --}}
        @include('frontend.include.cookie')
    <!-- Cookie Bar Box End -->

    <!-- Deal Box Modal Start -->
    <div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title w-100" id="deal_today">Deal Today</h5>
                        <p class="mt-1 text-content">Recommended deals for you.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="deal-offer-box">
                        <ul class="deal-offer-list">
                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="{{asset('frontend//images/vegetable/product/10.png')}}" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-2">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="{{asset('frontend//images/vegetable/product/11.png')}}" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-3">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="{{asset('frontend//images/vegetable/product/12.png')}}" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="{{asset('frontend//images/vegetable/product/13.png')}}" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deal Box Modal End -->

    <!-- Tap to top start -->
    <div class="theme-option">
        <div class="back-to-top">
            <a id="back-to-top" href="#">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <!-- Tap to top end -->

    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->

    <!-- latest jquery-->
    <script src="{{asset('frontend//js/jquery-3.6.0.min.js')}}"></script>

    <!-- jquery ui-->
    <script src="{{asset('frontend//js/jquery-ui.min.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('frontend//js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend//js/bootstrap/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('frontend//js/bootstrap/popper.min.js')}}"></script>

    <!-- feather icon js-->
    <script src="{{asset('frontend//js/feather/feather.min.js')}}"></script>
    <script src="{{asset('frontend//js/feather/feather-icon.js')}}"></script>

    <!-- Lazyload Js -->
    <script src="{{asset('frontend//js/lazysizes.min.js')}}"></script>

    <!-- Slick js-->
    <script src="{{asset('frontend//js/slick/slick.js')}}"></script>
    <script src="{{asset('frontend//js/slick/slick-animation.min.js')}}"></script>
    <script src="{{asset('frontend//js/slick/custom_slick.js')}}"></script>

    <!-- Auto Height Js -->
    <script src="{{asset('frontend//js/auto-height.js')}}"></script>

    <!-- Timer Js -->
    <script src="{{asset('frontend//js/timer1.js')}}"></script>

    <!-- Fly Cart Js -->
    <script src="{{asset('frontend//js/fly-cart.js')}}"></script>

    <!-- Quantity js -->
    <script src="{{asset('frontend//js/quantity-2.js')}}"></script>

    @stack('js_link')
    <!-- WOW js -->
    <script src="{{asset('frontend//js/wow.min.js')}}"></script>
    <script src="{{asset('frontend//js/custom-wow.js')}}"></script>

    <!-- script js -->
    <script src="{{asset('frontend//js/script.js')}}"></script>
    @stack('js')
</body>

</html>
