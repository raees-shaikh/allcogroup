@extends('frontend.layouts.app')
@section('title')
@section('content')

<section>
<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide newimg">

        <div class="item slide ">
            <div class=""></div>
            <div class="hero ">
         <div class="pt-xl-40-title">
            <hgroup class=" ">
                <h1 class="text-white ">Construction, Architecture,<br> and Engineering</h1>
                <p class="font-weight-400">Find a perfect blend at Allco.</p>
            </hgroup>
            <div class="pt-8 mt-20">

                <a href="{{ url('our-projects') }}" class="btn btn-sm   get-touch about-btn">Check Out Our Projects</a>
            </div>
         </div>
            </div>
        </div>
    </div>
    <div class="swiper-slide newimg-2">

        <div class="item slides ">
            <div class="slide-2"></div>
            <div class="hero">
                <hgroup>
                    <h1 class="text-white">Discover the<br>
                        Art of Building</h1>
                    <p class="font-weight-400">And the joy of creating masterpieces with us.</p>
                </hgroup>
                <div class="pt-8 mt-20">
                    <a href="#services" class="btn btn-sm   get-touch about-btn">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-slide newimg-3">

        <div class="item slides ">
            <div class="slide-3"></div>
            <div class="hero">
                <hgroup>
                    <h1 class="text-white">Construction is our<br>
                        Passion</h1>
                    <p class="font-weight-400">As our customers are equally passionate.</p>
                </hgroup>
                <div class="pt-8 mt-20">
                    <a href="#allco" class="btn btn-sm   get-touch about-btn">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-slide newimg-4">

        <div class="item slides">
            <div class="slide-4"></div>
            <div class="hero">
                <hgroup>
                    <h1 class="text-white">Architecture<br>
                        You Can Trust</h1>
                    <p class="font-weight-400">Reliability is one of the core values of Allco.</p>
                </hgroup>
                <div class="pt-8 mt-20">
                    <a href="#values" class="btn btn-sm   get-touch about-btn">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-slide newimg-5">

        <div class="item slides">
            <div class="slide-5"></div>
            <div class="hero">
          <div class="pt-xl-40-allco">
            <hgroup>
                <h1 class="text-white">Feel the <span class="text-sky-blue"> Allco</span><br>
                    Difference</h1>
                <p class="font-weight-400">In the projects we deliver.</p>
            </hgroup>
            <div class="pt-8 mt-20">
                <a href="{{ url('our-projects') }}" class="btn btn-sm   get-touch about-btn">Learn More</a>
            </div>
          </div>
            </div>
        </div>
    </div>

  </div>
{{--
  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div> --}}

</div>
</section>
{{--

    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="3000" id="bs-carousel">
        <!-- Overlay -->
        <div class="overlay"></div>
        <!-- Indicators -->
        <ol class="carousel-indicators ">
            <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#bs-carousel" data-slide-to="1"></li>
            <li data-target="#bs-carousel" data-slide-to="2"></li>
            <li data-target="#bs-carousel" data-slide-to="3"></li>
            <li data-target="#bs-carousel" data-slide-to="4"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slides active">
                <div class="slide-1"></div>
                <div class="hero ">
             <div class="pt-xl-40-title">
                <hgroup class=" ">
                    <h1 class="text-white ">Construction, Architecture,<br> and Engineering</h1>
                    <p class="font-weight-400">Find a perfect blend at Allco.</p>
                </hgroup>
                <div class="pt-8 mt-20">

                    <a href="{{ url('our-projects') }}" class="btn btn-sm   get-touch about-btn">Check Out Our Projects</a>
                </div>
             </div>
                </div>
            </div>
            <div class="item slides">
                <div class="slide-2"></div>
                <div class="hero">
                    <hgroup>
                        <h1 class="text-white">Discover the<br>
                            Art of Building</h1>
                        <p class="font-weight-400">And the joy of creating masterpieces with us.</p>
                    </hgroup>
                    <div class="pt-8 mt-20">
                        <a href="#services" class="btn btn-sm   get-touch about-btn">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="item slides">
                <div class="slide-3"></div>
                <div class="hero">
                    <hgroup>
                        <h1 class="text-white">Construction is our<br>
                            Passion</h1>
                        <p class="font-weight-400">As our customers are equally passionate.</p>
                    </hgroup>
                    <div class="pt-8 mt-20">
                        <a href="#allco" class="btn btn-sm   get-touch about-btn">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="item slides">
                <div class="slide-4"></div>
                <div class="hero">
                    <hgroup>
                        <h1 class="text-white">Architecture<br>
                            You Can Trust</h1>
                        <p class="font-weight-400">Reliability is one of the core values of Allco.</p>
                    </hgroup>
                    <div class="pt-8 mt-20">
                        <a href="#values" class="btn btn-sm   get-touch about-btn">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="item slides">
                <div class="slide-5"></div>
                <div class="hero">
              <div class="pt-xl-40-allco">
                <hgroup>
                    <h1 class="text-white">Feel the <span class="text-sky-blue"> Allco</span><br>
                        Difference</h1>
                    <p class="font-weight-400">In the projects we deliver.</p>
                </hgroup>
                <div class="pt-8 mt-20">
                    <a href="{{ url('our-projects') }}" class="btn btn-sm   get-touch about-btn">Learn More</a>
                </div>
              </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="section-bg-image parallax-window white ken-burn-center no-padding-bottom" data-natural-height="1080"
        data-natural-width="1920" data-parallax="scroll" data-image-src="frontend/images/hd-5.jpg">
        <div class="content">
            <hr class="space">
            <hr class="space">
            <div class="flexslider slider" data-options="controlNav:true,directionNav:true">
                <ul class="slides">
                    <li>
                        <div class="row vertical-row">
                            <div class="col-md-7 text-left-sm">
                                <h1 class="text-uppercase hero-title"><span class="text-sky-blue">Construction,</span>
                                    Architecture, and Engineering </h1>
                                <hr class="space m">
                                <p class="hero-text">
                                    Find a perfect blend at Allco.
                                </p>
                            </div>
                            <div class="col-md-6 text-right text-left-sm " id="slide-btn">
                                <hr class="space visible-sm">
                                <a href="{{ url('/our-projects') }}" class="btn btn-border btn-yellow btn-lg">Check out our
                                    projects</a>
                            </div>
                        </div>
                    </li> --}}
    {{-- <li>
                        <div class="row vertical-row">
                            <div class="col-md-7 text-left-sm">
                                <h1 class="text-uppercase">Discover the Art of Building </h1>
                                <hr class="space m">
                                <p>
                                    And the joy of creating masterpieces with us.
                                </p>
                            </div>
                            <div class="col-md-6 text-center text-left-sm">
                                <hr class="space visible-sm">
                                <a href="https://www.youtube.com/watch?v=j_-2dUvlEdY" data-lightbox-anima="fade-right"
                                    class="btn btn-lg btn-play text-color lightbox mfp-iframe">Watch video <i></i></a>
                                    <a href="#" class="btn btn-border btn-yellow btn-lg">Services we offer</a>
                            </div>
                        </div>
                    </li> --}}

    {{-- <li>
                        <div class="row vertical-row">
                            <div class="col-md-7 text-left-sm">
                                <h1 class="text-uppercase hero-title">Discover the Art of <span
                                        class="text-sky-blue">Building</span></h1>
                                <hr class="space m">
                                <p class="hero-text">
                                    And the joy of creating masterpieces with us.
                                </p>
                            </div>
                            <div class="col-md-6 text-right text-left-sm" id="slide-btn">
                                <hr class="space visible-sm">
                                <a href="{{ url('/') }}" class="btn btn-border btn-yellow btn-lg">Services we offer</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row vertical-row">
                            <div class="col-md-7 text-left-sm">
                                <h1 class="text-uppercase hero-title"><span class="text-sky-blue">Construction</span> is our
                                    PASSION</h1>
                                <hr class="space m">
                                <p class="hero-text">
                                    As our customers are equally passionate.
                                </p>
                            </div>
                            <div class="col-md-6 text-right text-left-sm " id="slide-btn">
                                <hr class="space visible-sm">
                                <a href="{{ url('/about-us') }}" class="btn btn-border btn-yellow btn-lg">Why choose
                                    Allco?</a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="row vertical-row">
                            <div class="col-md-7 text-left-sm">
                                <h1 class="text-uppercase hero-title"><span class="text-sky-blue">Architecture </span> You
                                    Can Trust</h1>
                                <hr class="space m">
                                <p class="hero-text">
                                    Reliability is one of the core values of Allco.
                                </p>
                            </div>
                            <div class="col-md-6 text-right text-left-sm" id="slide-btn">
                                <hr class="space visible-sm">
                                <a href="{{ url('/') }}" class="btn btn-border btn-yellow btn-lg">Our core values</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row vertical-row">
                            <div class="col-md-7 text-left-sm">
                                <h1 class="text-uppercase hero-title">Feel the<span class="text-sky-blue"> Allco</span>
                                    Difference</h1>
                                <hr class="space m">
                                <p class="hero-text">
                                    in the projects we deliver.
                                </p>
                            </div>
                            <div class="col-md-6 text-right text-left-sm" id="slide-btn">
                                <hr class="space visible-sm">
                                <a href="{{ url('/our-projects') }}" class="btn btn-border btn-yellow btn-lg">Check out our
                                    projects</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}
    {{-- <div class="section-empty">
        <div class="container content">
            <table class="grid-table border-table grid-table-xs-12 text-left">
                <tbody>
                    <tr>
                        <td>
                            <h2>Technical Industrial Solutions</h2>
                        </td>
                        <td>
                            <hr class="space visible-xs">
                            <p>
                                Large-scale construction requires collaboration across multiple disciplines.
                                A project manager normally manages the job and a architect supervises it.
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <hr class="space">
            <div class="flexslider carousel outer-navs"
                data-options="minWidth:200,itemMargin:30,numItems:3,controlNav:true,directionNav:true">
                <ul class="slides">
                    <li>
                        <div class="advs-box advs-box-multiple boxed-inverse" data-anima="scale-up" data-trigger="hover">
                            <a class="img-box"><img class="anima" src="frontend/images/resized/gallery/image-9.jpg"
                                    alt=""></a>
                            <div class="circle"><i class="im-solar"></i></div>
                            <div class="advs-box-content">
                                <h3>Oil and gas</h3>
                                <p>
                                    Interdum iusto pulvinar consequuntur augu s est odit mi quosliquid semper, veritatis
                                    dignissimos pericello constro pretese mertolo.
                                </p>
                                <a class="btn-text" href="#">Enter now </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="advs-box advs-box-multiple boxed-inverse" data-anima="scale-up" data-trigger="hover">
                            <a class="img-box"><img class="anima" src="frontend/images/resized/gallery/image-8.jpg"
                                    alt=""></a>
                            <div class="circle"><i class="im-pencil-ruler"></i></div>
                            <div class="advs-box-content">
                                <h3>Mechanical</h3>
                                <p>
                                    Interdum iusto pulvinar consequuntur augu s est odit mi quosliquid semper, veritatis
                                    dignissimos pericello constro pretese mertolo.
                                </p>
                                <a class="btn-text" href="#">Enter now </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="advs-box advs-box-multiple boxed-inverse" data-anima="scale-up" data-trigger="hover">
                            <a class="img-box"><img class="anima" src="frontend/images/resized/gallery/image-10.jpg"
                                    alt=""></a>
                            <div class="circle"><i class="im-suitcase"></i></div>
                            <div class="advs-box-content">
                                <h3>Manufacturing</h3>
                                <p>
                                    Interdum iusto pulvinar consequuntur augu s est odit mi quosliquid semper, veritatis
                                    dignissimos pericello constro pretese mertolo.
                                </p>
                                <a class="btn-text" href="#">Enter now </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="advs-box advs-box-multiple boxed-inverse" data-anima="scale-up" data-trigger="hover">
                            <a class="img-box"><img class="anima" src="frontend/images/resized/gallery/image-9.jpg"
                                    alt=""></a>
                            <div class="circle"><i class="im-worker"></i></div>
                            <div class="advs-box-content">
                                <h3>Constructions</h3>
                                <p>
                                    Interdum iusto pulvinar consequuntur augu s est odit mi quosliquid semper, veritatis
                                    dignissimos pericello constro pretese mertolo.
                                </p>
                                <a class="btn-text" href="#">Enter now </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}
    {{-- <div class="section-empty bg-white">
        <div class="container content">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="text-color">Headquorter</h4>
                    <p class="text-s">
                        201 LIVERPOOL STREET, SUITE 721
                        LONDON, LN 10010
                    </p>
                    <hr class="space m">
                    <h4 class="text-color">Working Hours</h4>
                    <p class="text-s">
                        MONDAY TO FRIDAY: 9AM TO 8PM
                    </p>
                    <hr class="space m">
                    <h4 class="text-color">Email</h4>
                    <p class="text-s">
                        YOUREMAIL@YOURDOMAIN.COM
                    </p>
                    <hr class="space m">
                    <h4 class="text-color">Contact phone</h4>
                    <p class="text-s">
                        +44 (0) 101 0000 000
                    </p>
                </div>
                <div class="col-md-2">
                    <ul class="fa-ul text-s ul-dots" data-anima="fade-right" data-timeline="asc"
                        data-timeline-time="300">
                        <li class="anima">Pakistan</li>
                        <li class="anima">China</li>
                        <li class="anima">Japan</li>
                        <li class="anima">Indonesia</li>
                        <li class="anima">Portugal</li>
                        <li class="anima">Peru</li>
                        <li class="anima">Africa</li>
                        <li class="anima">France</li>
                        <li class="anima">Africa</li>
                        <li class="anima">France</li>
                        <li class="anima">Argentina</li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="fa-ul text-s ul-dots" data-anima="fade-right" data-timeline="asc"
                        data-timeline-time="300">
                        <li class="anima">Unites States</li>
                        <li class="anima">Italy</li>
                        <li class="anima">German</li>
                        <li class="anima">United kingdoms</li>
                        <li class="anima">Argentina</li>
                        <li class="anima">Brasil</li>
                        <li class="anima">India</li>
                        <li class="anima">Spain</li>
                        <li class="anima">Peru</li>
                        <li class="anima">Africa</li>
                        <li class="anima">France</li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12">
                    <hr class="space visible-sm">
                    <h2>We operate worldwide in more than 50 countries</h2>
                    <p>
                        Lorem ipsum dolor sit co laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <a href="#" class="btn btn-sm">More informations</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-two-blocks blocks-right" data-parallax="scroll" data-image-src="frontend/images/hd-4.jpg"
        data-natural-height="1080" data-natural-width="1920">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="content">
                    <h2>Trusted experience<br>by more than 20 years</h2>
                    <p>
                        Aincididunt utlabore et dolore magna aliqua.
                        Utenim ad minim veniam quis nostrud exercitation u o nsequat. Duis aute irure dolor in rep rehe
                        nderit
                        in volup tate velit esse cillum dolore eu fugiat nulla pariature mertillo.
                    </p>
                    <hr class="space l">
                    <table class="grid-table border-table text-left">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="icon-box counter-box-icon">
                                        <div class="icon-box-cell">
                                            <i class="im-gears text-xl text-color"></i>
                                        </div>
                                        <div class="icon-box-cell">
                                            <label class="counter text-l" data-speed="5000" data-to="25">25</label>
                                            <p class="text-s">Years of experience</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="icon-box counter-box-icon">
                                        <div class="icon-box-cell">
                                            <i class="im-engineering text-xl  text-color"></i>
                                        </div>
                                        <div class="icon-box-cell">
                                            <label class="counter text-l" data-speed="5000" data-to="95">95</label>
                                            <p class="text-s">Team members</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty bg-white">
        <div class="container content">
            <div class="flexslider carousel png-over"
                data-options="numItems:5,minWidth:100,itemMargin:60,controlNav:false,directionNav:false">
                <ul class="slides">
                    <li>
                        <a class="img-box" href="#">
                            <img src="frontend/images/resized/logos/logo-1.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="frontend/images/resized/logos/logo-2.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="frontend/images/resized/logos/logo-3.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="frontend/images/resized/logos/logo-4.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="frontend/images/resized/logos/logo-5.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="frontend/images/resized/logos/logo-6.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="frontend/images/resized/logos/logo-4.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="frontend/images/resized/logos/logo-1.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="frontend/images/resized/logos/logo-2.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="img-box" href="#">
                            <img src="frontend/images/resized/logos/logo-3.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}

    <div class="section-empty no-padding-bottom ">
        <div class="container content pt-20">
            <div class="row">
                <div class="col-md-6   cust-box">
                    <img class="home-about" src="frontend/images/gallery/about-new.png" alt="Alternate Text" />
                </div>
                <div class="col-xs-1"></div>
                <div class="col-md-5 mt-20-991px">
                    <h2 class="about "><b>About Us</b></h2>
                    <h4 class="text-blue about-sub pt-10">Building Dreams,<br>
                        One Project at a Time</h4>
                    <p class=" paragraph pt-10 fs-18 about-lh">
                        Welcome to Allco, a premier construction company committed to delivering exceptional building
                        solutions tailored to meet your unique needs. With a solid foundation of expertise and a relentless
                        pursuit of excellence, we are dedicated to turning your vision into reality.
                    </p>
                    <div class="pt-15">
                        <a href="{{ url('/about-us') }}" class=" about-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty ">
        <div class="container content pt-0 mx-0" id="services" style="scroll-margin-top: 50px;">

            <h2 class="text-center font-weight-900 text-capitalize pb-till-767">Services We Offer</h2>

            <div class="row mmt-767 custom-container ">

                <div class="col-md-7 px-0">
                    <hr class="space visible-xs">
                    <div class="row px--20">
                        <div class="col-xs-2 px-0-img">
                            <img src="{{ url('frontend/images/gallery/gen.png') }}" alt="">
                        </div>
                        <div class="col-xs-9 text-div ">

                            <h4 class="mb-0 mt-4 font-weight-600 text-capitalize service-head">General Contracting</h4>
                            <small class="sm-text paragraph pt-3 ">We oversee the entire construction process, from site
                                preparation to the final touches, ensuring seamless coordination and timely project
                                completion.</small>
                        </div>

                    </div>



                    <hr class="space visible-xs">
                    <div class="row mt-20-991 px--20">
                        <div class="col-xs-2 px-0-img">
                            <img src="{{ url('frontend/images/gallery/bd.png') }}" alt="">
                        </div>
                        <div class="col-xs-9 text-div ">

                            <h4 class="mb-0 mt-4 font-weight-600 text-capitalize service-head">Design-Build</h4>
                            <small class="sm-text paragraph">By combining the design and construction phases, we streamline
                                the process, minimize risks, and optimize efficiency, delivering projects that exceed
                                expectations.</small>
                        </div>

                    </div>


                    <hr class="space visible-xs">
                    <div class="row mt-20-991 px--20">
                        <div class="col-xs-2 px-0-img">
                            <img src="{{ url('frontend/images/gallery/cm.png') }}" alt="">
                        </div>
                        <div class="col-xs-9 text-div ">

                            <h4 class="mb-0 mt-4 font-weight-600 text-capitalize service-head">Construction Management</h4>
                            <small class="sm-text paragraph">Our dedicated project managers work closely with you to
                                oversee every aspect of your project, from budgeting and scheduling to quality control and
                                subcontractor coordination.</small>
                        </div>

                    </div>




                    <hr class="space visible-xs">
                    <div class="row mt-20-991 px--20">
                        <div class="col-xs-2 px-0-img">
                            <img src="{{ url('frontend/images/gallery/rr.png') }}" alt="">
                        </div>
                        <div class="col-xs-9 text-div ">

                            <h4 class="mb-0 mt-4 font-weight-600 text-capitalize service-head">Renovations and Remodeling
                            </h4>
                            <small class="sm-text paragraph">Whether you're looking to revitalize an existing space or
                                transform it completely, our team brings innovation, creativity, and attention to detail to
                                every renovation or remodeling project.</small>
                        </div>

                    </div>


                    <hr class="space visible-xs">
                    <div class="row mt-20-991 px--20">
                        <div class="col-xs-2 px-0-img">
                            <img src="{{ url('frontend/images/gallery/gbs.png') }}" alt="">
                        </div>
                        <div class="col-xs-9 text-div ">

                            <h4 class="mb-0 mt-4 font-weight-600 text-capitalize service-head">Green Building Solutions
                            </h4>
                            <small class="sm-text paragraph">As advocates for sustainable construction practices, we offer
                                eco-friendly options, incorporating energy-efficient materials and technologies into our
                                projects to minimize environmental impact.</small>
                        </div>

                    </div>
                </div>

                <div class="col-md-5 px-10 mt-img serrvice-img mt-after-991">
                    <img class="" src="{{ url('frontend/images/gallery/renovation.jpg') }}" alt="">
                </div>

            </div>
            <p class="text-center paragraph fs-18 about-lh mt-custom">

                Allco offers a comprehensive range of construction services to cater to diverse project
                requirements. Whether you need residential, commercial, or industrial construction, restoration,
                and/or a complete overhaul, we have the expertise to handle projects of any scale or complexity.
            </p>

            <div class="pt-15 text-center">
                <a href="{{ url('/about-us') }}" class=" about-btn">Read More</a>
            </div>
        </div>


    </div>
    {{-- <div class="section-two-blocks" data-parallax="scroll" data-image-src="frontend/images/hd-3.jpg"
        data-natural-height="1080" data-natural-width="1920">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="content">
                    <h2>We build strong relationships<br>with our clients</h2>
                    <p>
                        Aincididunt utlabore et dolore magna aliqua.
                        Utenim ad minim veniam quis nostrud exercitation u o nsequat. Duis aute irure dolor in rep rehe
                        nderit
                        in volup tate velit esse cillum dolore eu fugiat nulla pariature mertillo.
                    </p>
                    <a href="#" class=" btn btn-sm">Read more</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <h2 class="text-center text-left-xs">Featured projects</h2>
            <hr class="space l">
            <div class="maso-list">
                <div class="navbar navbar-inner text-center">
                    <div class="navbar-toggle"><i class="fa fa-bars"></i><span>Menu</span><i
                            class="fa fa-angle-down"></i></div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav over inner maso-filters">
                            <li class="current-active active"><a data-filter="maso-item">All</a></li>
                            <li><a data-filter="cat1">Technology</a></li>
                            <li><a data-filter="cat2" href="#">Buildings</a></li>
                            <li><a data-filter="cat2" href="#">Interiors</a></li>
                            <li><a class="maso-order" data-sort="asc"><i class="fa fa-arrow-down"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="maso-box row">
                    <div data-sort="2" class="maso-item col-md-4 cat3">
                        <div class="advs-box advs-box-side boxed-inverse" data-href="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="frontend/images/resized/gallery/image-11.jpg"
                                            alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>PIANO SKYSCRAPER</h3>
                                    <hr>
                                    <p>
                                        Interdum iusto pulvinar consequuntur augue Purus exp laboris nisi ut aliquip ex ea
                                        commodo consequat.
                                    </p>
                                    <a href="#" class="btn-text">Open project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="2" class="maso-item col-md-4 cat1">
                        <div class="advs-box advs-box-side boxed-inverse" data-href="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="frontend/images/resized/gallery/image-15.jpg"
                                            alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>NTF METRO RAILS</h3>
                                    <hr>
                                    <p>
                                        Interdum iusto pulvinar consequuntur augue Purus exp laboris nisi ut aliquip ex ea
                                        commodo consequat.
                                    </p>
                                    <a href="#" class="btn-text">Open project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="2" class="maso-item col-md-4 cat1">
                        <div class="advs-box advs-box-side boxed-inverse" data-href="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="frontend/images/resized/gallery/image-13.jpg"
                                            alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>LONDON TECH LAB</h3>
                                    <hr>
                                    <p>
                                        Interdum iusto pulvinar consequuntur augue Purus exp laboris nisi ut aliquip ex ea
                                        commodo consequat.
                                    </p>
                                    <a href="#" class="btn-text">Open project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="2" class="maso-item col-md-4 cat1">
                        <div class="advs-box advs-box-side boxed-inverse" data-href="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="frontend/images/resized/gallery/image-14.jpg"
                                            alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>MARTIN'S STUDIO</h3>
                                    <hr>
                                    <p>
                                        Interdum iusto pulvinar consequuntur augue Purus exp laboris nisi ut aliquip ex ea
                                        commodo consequat.
                                    </p>
                                    <a href="#" class="btn-text">Open project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="2" class="maso-item col-md-4 cat1 cat3">
                        <div class="advs-box advs-box-side boxed-inverse" data-href="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="frontend/images/resized/gallery/image-12.jpg"
                                            alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>MASHROOM SIX</h3>
                                    <hr>
                                    <p>
                                        Interdum iusto pulvinar consequuntur augue Purus exp laboris nisi ut aliquip ex ea
                                        commodo consequat.
                                    </p>
                                    <a href="#" class="btn-text">Open project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-sort="2" class="maso-item col-md-4 cat1 cat2">
                        <div class="advs-box advs-box-side boxed-inverse" data-href="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="img-box"><img src="frontend/images/resized/gallery/image-16.jpg"
                                            alt=""></div>
                                </div>
                                <div class="col-md-8">
                                    <h3>THE GREEN CORNER</h3>
                                    <hr>
                                    <p>
                                        Interdum iusto pulvinar consequuntur augue Purus exp laboris nisi ut aliquip ex ea
                                        commodo consequat.
                                    </p>
                                    <a href="#" class="btn-text">Open project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty bg-white">
        <div class="container content">
            <div class="row">
                <div class="col-md-4">
                    <div class="advs-box advs-box-top-icon text-left">
                        <i class="im-information icon circle text-color"></i>
                        <h3>Have a question? call us now</h3>
                        <p>
                            Office 1: +(03) 0106 387 4456<br>
                            Office 2: +(03) 0106 387 4456
                        </p>
                        <a href="#" class="btn-text">Where we are</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="advs-box advs-box-top-icon text-left">
                        <i class="im-envelope icon circle text-color"></i>
                        <h3>Need support? Drop us an email</h3>
                        <p>
                            support@domainname.com<br>
                            hello@example.com
                        </p>
                        <a href="#" class="btn-text">Online form</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="advs-box advs-box-top-icon text-left">
                        <i class="im-calendar icon circle text-color"></i>
                        <h3>We are open all days all week</h3>
                        <p>
                            From Mon to Fri 07:00 – 21:00<br>
                            Sun – Sat 07:00 – 12:00
                        </p>
                        <a href="#" class="btn-text">View more</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="section-empty bg-white "
        style="background-image: url('frontend/images/gallery/allco-bg.png');scroll-margin-top: 50px;" id="allco">

        <div class="container content">

            <h2 class="text-center text-capitalize">Why Allco ?</h2>

            <div class="row proporzional-row proporzional-row-sm pt-10 d-block">

                <div class="col-xl-4 col-md-6 px-0">

                    {{--
                    <div class='newsCard news-Slide-up'>
                        <img src="frontend/images/gallery/image-7.jpg" />
                        <div class='newsCaption'>
                            <h2 class='newsCaption-title'>Experience</h2>

                            <p class='newsCaption-content'>With years of experience in the construction industry, we
                                possess the knowledge and expertise to handle projects of all sizes and complexities.</p>
                            <p><a class='newsCaption-link' href='#'>Read More</a> </p>
                        </div>
                    </div> --}}


                    <div class=' news-Slide-up w-320 '>
                        <img src="frontend/images/gallery/image-17.jpg" />
                        <div class='newsCaption '>
                            <div class="text-left">

                                <h2 class='newsCaption-title custom-pro-head text-capitalize'>Experience</h2>
                                <p class="custom-pro-text"> With Years Of Experience In The Construction Industry, We
                                    Possess The Knowledge And Expertise To Handle Projects Of All Sizes And Complexities.
                                </p>
                            </div>

                        </div>
                    </div>

                </div>

                <div class=" col-xl-4 col-md-6  mt-767 px-0">

                    <div class=' news-Slide-up w-320'>
                        <img src="frontend/images/gallery/image-9.jpg" />
                        <div class='newsCaption '>
                            <div class="text-left">

                                <h2 class='newsCaption-title custom-pro-head text-capitalize'>Quality Craftmanship</h2>
                                <p class="custom-pro-text"> We Take Immense Pride In Our Workmanship, Ensuring Attention To
                                    Detail, Superior Craftsmanship, And A Commitment To Using The Best Materials Available.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 d-xl-block d-none mt-767 px-0">

                    <div class=' news-Slide-up w-320'>
                        <img src="frontend/images/gallery/image-5.jpg" />
                        <div class='newsCaption '>
                            <div class="text-left">

                                <h2 class='newsCaption-title custom-pro-head text-capitalize'>Customer Focus</h2>
                                <p class="custom-pro-text">Our Clients Are At The Heart Of Everything We Do And Their
                                    Satisfaction Is Our Top Priority. We Listen Attentively To Their Needs, Provide Regular
                                    Project Updates, And Remain Responsive To Their Concerns Throughout The Construction
                                    Process. Striving To Exceed Expectations, We Value Long-Term Relationships And Are
                                    Dedicated To Delivering Projects That Bring Our Client’s Visions To Life.</p>
                            </div>

                        </div>
                    </div>
                </div>



            </div>
            {{-- <div class='newsCard news-Slide-up'>
                        <img class="max-height-405" src="frontend/images/gallery/twomen.jpg" />
                        <div class='newsCaption'>
                            <h2 class='newsCaption-title text-white'>Quality Craftsmanship</h2>

                            <p class='newsCaption-content'>We take immense pride in our workmanship, ensuring attention to
                                detail, superior craftsmanship, and a commitment to using the best materials available.</p>
                            <p><a class='newsCaption-link' href='#'>Read More</a> </p>
                        </div>
                    </div>
                </div> --}}

            <div class="row proporzional-row proporzional-row-sm  d-block px-0">

                <div class="col-xl-4 col-md-6 d-xl-none d-block-1115 px-0">

                    <div class=' news-Slide-up w-320  mt-767-1115'>
                        <img src="frontend/images/gallery/image-5.jpg" />
                        <div class='newsCaption '>
                            <div class="text-left">

                                <h2 class='newsCaption-title custom-pro-head text-capitalize'>Customer Focus</h2>
                                <p class="custom-pro-text">Our Clients Are At The Heart Of Everything We Do And Their
                                    Satisfaction Is Our Top Priority. We Listen Attentively To Their Needs, Provide Regular
                                    Project Updates, And Remain Responsive To Their Concerns Throughout The Construction
                                    Process. Striving To Exceed Expectations, We Value Long-Term Relationships And Are
                                    Dedicated To Delivering Projects That Bring Our Client’s Visions To Life.</p>
                            </div>

                        </div>
                    </div>



                </div>

                {{-- <div class="col-xl-4 col-md-6   d-767  px-0 ">

                        <div class=' news-Slide-up w-320'>
                            <img src="frontend/images/gallery/image-7.jpg" />
                            <div class='newsCaption '>
                                <div class="text-left">

                                    <h2 class='newsCaption-title custom-pro-head text-capitalize' >Customer Focus</h2>
                                    <p class="custom-pro-text">Our Clients Are At The Heart Of Everything We Do And Their Satisfaction Is Our Top Priority. We Listen Attentively To Their Needs, Provide Regular Project Updates, And Remain Responsive To Their Concerns Throughout The Construction Process. Striving To Exceed Expectations, We Value Long-Term Relationships And Are Dedicated To Delivering Projects That Bring Our Client’s Visions To Life.</p>
                                </div>

                                    </div>
                        </div></div> --}}


                {{-- <div class="col-xl-4 col-md-6   px-0"> --}}

                {{--
                                                <div class='newsCard news-Slide-up'>
                                                    <img src="frontend/images/gallery/image-7.jpg" />
                                                    <div class='newsCaption'>
                                                        <h2 class='newsCaption-title'>Experience</h2>

                                                        <p class='newsCaption-content'>With years of experience in the construction industry, we
                                                            possess the knowledge and expertise to handle projects of all sizes and complexities.</p>
                                                        <p><a class='newsCaption-link' href='#'>Read More</a> </p>
                                                    </div>
                                                </div> --}}


                {{-- <div class=' news-Slide-up w-320 '>
                                                    <img src="frontend/images/gallery/image-7.jpg" />
                                                    <div class='newsCaption '>
                                                <div class="text-left">

                                                    <h2 class='newsCaption-title custom-pro-head text-capitalize' >Integrity And Transparency</h2>
                                                    <p class="custom-pro-text">We Operate With The Utmost Integrity, Maintaining Transparency In Our Practices, Budgeting, And Scheduling, So You Can Trust Us To Deliver On Our Promises.</p>
                                                </div>

                                                    </div>
                                                </div>

                                            </div> --}}






                <div class="col-xl-4 col-md-6   px-0 mt-767">

                    {{--
                        <div class='newsCard news-Slide-up'>
                            <img src="frontend/images/gallery/image-7.jpg" />
                            <div class='newsCaption'>
                                <h2 class='newsCaption-title'>Experience</h2>

                                <p class='newsCaption-content'>With years of experience in the construction industry, we
                                    possess the knowledge and expertise to handle projects of all sizes and complexities.</p>
                                <p><a class='newsCaption-link' href='#'>Read More</a> </p>
                            </div>
                        </div> --}}


                    <div class=' news-Slide-up w-320 '>
                        <img src="frontend/images/gallery/image-19.jpg" />
                        <div class='newsCaption '>
                            <div class="text-left">

                                <h2 class='newsCaption-title custom-pro-head text-capitalize'>Integrity And Transparency
                                </h2>
                                <p class="custom-pro-text">We Operate With The Utmost Integrity, Maintaining Transparency
                                    In Our Practices, Budgeting, And Scheduling, So You Can Trust Us To Deliver On Our
                                    Promises.</p>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-xl-4 col-md-6   mt-767 px-0 ">

                    <div class=' news-Slide-up w-320 '>
                        <img src="frontend/images/gallery/image-12.jpg" />
                        <div class='newsCaption '>
                            <div class="text-left">

                                <h2 class='newsCaption-title custom-pro-head text-capitalize'>Innovation Is The Revolution
                                </h2>
                                <p class="custom-pro-text"> We Embrace Innovation And Continuously Seek New Solutions,
                                    Technologies, And Approaches To Construction. By Staying At The Forefront Of Industry
                                    Advancements, We Bring Fresh Ideas And Creative Thinking To Every Project, Ensuring
                                    Optimal Results And Client Satisfaction.</p>
                            </div>

                        </div>
                    </div>
                </div>





            </div>

        </div>
        <p class="paragraph text-center mt-20 pb-20">For us, every project is an opportunity to build something remarkable!
        </p>
    </div>
    </div>
    <div class="section-empty bg-white p-576"
        style="background-image: url('frontend/images/gallery/csr-img.png');object-fit:contain;">
        <div class="container content">

            <div class="row  csr-img" style="background-image: url('frontend/images/gallery/csr-allco.png');">
                <div class="pt-10  pb-576 inner-allco">
                    <h2 class="text-center my-5 text-white text-capitalize">CSR @Allco</h2>
                    <p class=" text-white lh-allco">At Allco, we understand that our success as a construction company goes
                        hand in hand with our responsibility towards society and the environment. We are committed to making
                        a positive impact on the communities we serve, promoting sustainable practices, and actively
                        contributing to the betterment of society.
                        By emphasizing the usage of green building solutions, we aim to contribute to a cleaner, greener
                        future.</p>
                    <div class="pt-8 mt-40 text-center">
                        <a href="{{ url('/about-us#csr') }}" class=" about-btn">
                            Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-empty  " id="projects" style="scroll-margin-top: 50px;">
        <h2 class="text-center text-blue our-project">Our Projects</h2>
        <div class="container content">
            <div class="bg-white p-50-60">
                <div class="row proporzional-row proporzional-row-sm ">
                    <div class="col-10">
                        <div class="col-md-6 mt-767 px-0 ">
                            <img class="w-100 h-auto img-h-320"
                                src="frontend/images/projects/project-3/IMG-20230621-WA0018.jpg" />
                        </div>
                        <div class="col-md-6  p-576-max">
                            <h3 class='text-blue font-weight-900 '>Malabar Gold and Diamonds</h3>

                            <p class=' custom-text-lh fs-15 mt-40'>"Sed ut perspiciatis unde omnis iste natus error sit
                                voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>

                            <div class="pt-8  btn-mt-40">
                                <a href="{{ url('/our-projects') }}" class="about-btn-sm about-btn custom-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white p-50-60 mt-40">
                <div class="row proporzional-row proporzional-row-sm">
                    <div class="col-10">
                        <div class="col-md-6 mt-767 px-0">
                            <img class="w-100 h-auto img-h-320"
                                src="frontend/images/projects/project-4/img-1.jpeg" />
                        </div>
                        <div class="col-md-6  p-576-max ">
                            <h3 class='text-blue font-weight-900 '>Luxury Out House</h3>

                            <p class=' custom-text-lh fs-15 mt-40'>"Sed ut perspiciatis unde omnis iste natus error sit
                                voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>

                            <div class="pt-8  btn-mt-40">
                                <a href="{{ url('/our-projects') }}" class=" about-btn about-btn-sm custom-btn">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="text-blue text-center"><a href="{{ url('our-projects') }}" class="text-blue text-center">View All</a>
        </h4>
    </div>
    </div>


    <div class="section-empty  p-576">
        <div class="container content px-576-sub">

            <div class="row justify-content-center px-0">
                <div class="col-md-0 col-lg-12  subscribe w-100">

                    <div class="row  justify-content-center px-0">
                        <div class="col-xl-7 col-lg-6 col-md-4  text-center text-uppercase">
                            <h2>SUBSCRIBE TO GET UPDATED</h2>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-8">
                            <div class="row">
                                <div class="col-md-6 text-md-left text-center mt-10">
                                    <input type="text" class="custom-input " placeholder="Enter Your Email">
                                </div>
                                <div class="col-md-6 text-md-left text-center mt-10">
                                    <button class="custom-button sub-btn">Subscribe Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
         .slide-1 {
            background-image: url({{ url('frontend/images/gallery/baground-1.png') }});
        }

        .fade-carousel .slides .slide-2 {
            background-image: url({{ url('frontend/images/gallery/bg-2.png') }});
        }

        .fade-carousel .slides .slide-3 {
            background-image: url({{ url('frontend/images/gallery/bg-3.png') }});
        }

        .fade-carousel .slides .slide-4 {
            background-image: url({{ url('frontend/images/gallery/bg-4.png') }});
        }

        .fade-carousel .slides .slide-5 {
            background-image: url({{ url('frontend/images/gallery/new-allco.png') }});
        }
    </style>
@endsection
@section('js')
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper('.swiper', {
  // Optional parameters
  loop: true,
  centeredSlides: true,
  // Navigation arrows
  autoplay: {
    delay: 5000,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    // when window width is >= 320px
    768: {
      slidesPerView: 1,
      spaceBetween: 30
    },
    // when window width is >= 480px
    1024: {
      slidesPerView: 1,
      spaceBetween: 40
    },
    // when window width is >= 640px
    1280: {
      slidesPerView: 1,
      spaceBetween: 50
    }
  }
});
</script>
@endsection
