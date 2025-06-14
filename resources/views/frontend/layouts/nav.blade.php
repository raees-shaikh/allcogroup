<div id="preloader"></div>
<header class="fixed-top navbar navbar-default navbar-fixed-top h-66 border-0" id="mNavbar"
    data-menu-anima="fade-bottom">
    {{-- <div class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top" role="navigation">
       <div class="navbar-mini scroll-hide">
            <div class="container">
                <div class="nav navbar-nav navbar-left">
                    <span><i class="im-phone-2"></i>+01-23-4226789</span>
                    <hr>
                    <span><i class="im-envelope"></i>hello@example.com</span>
                    <hr>
                    <span><i class="im-calendar-4"></i> Mon - Sat: 9:00 - 18:00 </span>
                </div>
                <div class="nav navbar-nav navbar-right">
                    <ul class="nav navbar-nav lan-menu">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="frontend/images/en.png" alt="flag">EN <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><img src="frontend/images/it.png" alt="flag">IT</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">GO</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
    <div class="navbar navbar-main b-radius-0">
        <div class="container navbar-padding w-800">
            <div class="navbar-header ">
                <button type="button" class="navbar-toggle">
                    {{-- <i class="fa fa-bars"></i> --}}
                    <img src="{{ url('frontend/images/icons/menu.png') }}" alt="" class="w-50">

                </button>
                <a class="navbar-brand padding-0 " href="{{ url('/') }}">
                    <img class="logo-default logo-img logo-custom-size-120" src="frontend/images/allco-group.png"
                        alt="logo" style="height: 130px; max-height: 130px;">
                    <img class="logo-retina logo-img logo-custom-size-120" src="frontend/images/allco-group.png" alt="logo" style="height: 130px; max-height: 130px;">
                </a>
            </div>
            <div class="collapse navbar-collapse  mt-sm-10">
                <ul class="nav navbar-nav ">
                    <li class="dropdown {{ URL::current() == url('/') ? 'home' : '' }}">
                        <a href="{{ url('/') }}" class="{{ URL::current() == url('/') ? 'active b-b-4' : '' }}"
                            data-toggle="" role="button">Home <span class="caret"></span></a>
                        {{-- <ul class="dropdown-menu multi-level">
                                <li><a href="index-worker.html">Worker</a></li>
                                <li><a href="index-industry.html">Industry</a></li>
                                <li><a href="index-factory.html">Factory</a></li>
                                <li><a href="index-construction.html">Construction</a></li>
                                <li><a href="index-tech.html">Tech</a></li>
                                <li><a href="index.html">Intro</a></li>
                            </ul> --}}
                    </li>
                    <li class="dropdown">
                        <a href="{{ url('/about-us') }}"
                            class="{{ URL::current() == url('/about-us') ? 'active' : '' }}" data-toggle=""
                            role="button">About Us <span class="caret"></span></a>
                        {{-- <ul class="dropdown-menu multi-level">
                                <li class="dropdown dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Company</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="history.html">History</a></li>
                                        <li><a href="partners.html">Partners</a></li>
                                        <li><a href="careers.html">Careers</a></li>
                                    </ul> --}}
                    </li>
                    <li class="dropdown">
                        <a href="{{ url('/our-projects') }}"
                            class="{{ URL::current() == url('/our-projects') ? 'active' : '' }}  data-toggle=""
                            role="button">Our Projects<span class="caret"></span></a>
                        {{-- <ul class="dropdown-menu multi-level">
                                        <li class="dropdown dropdown-submenu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Company</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="about.html">About us</a></li>
                                                <li><a href="history.html">History</a></li>
                                                <li><a href="partners.html">Partners</a></li>
                                                <li><a href="careers.html">Careers</a></li>
                                            </ul> --}}
                    </li>
                    <li class="dropdown ">
                        <a href="{{ url('/careers') }}"
                            class="{{ URL::current() == url('/careers') ? 'active' : '' }} data-toggle="dropdown">Careers</a>
                        {{-- <ul class="dropdown-menu">
                                        <li><a href="services-1.html">Services one</a></li>
                                        <li><a href="services-2.html">Services two</a></li>
                                        <li><a href="services-3.html">Services three</a></li>
                                    </ul> --}}
                    </li>
                    {{-- <li class="dropdown ">
                                    <a href="{{url('/contact-us')}}" class="{{URL::current()==url('/contact-us')?'active':''}} data-toggle="dropdown">Contact Us</a>
                                    {{-- <ul class="dropdown-menu">
                                        <li><a href="services-1.html">Services one</a></li>
                                        <li><a href="services-2.html">Services two</a></li>
                                        <li><a href="services-3.html">Services three</a></li>
                                    </ul>
                                </li> --}}


                    </li>
                    {{-- <li class="dropdown mega-dropdown mega-tabs">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Elements <span class="caret"></span></a>
                            <div class="mega-menu dropdown-menu multi-level row bg-menu">
                                <div class="tab-box" data-tab-anima="fade-in">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#">Components</a></li>
                                        <li><a href="#">Headers</a></li>
                                        <li><a href="#">Titles</a></li>
                                    </ul>
                                    <div class="panel active">
                                        <div class="col">
                                            <ul class="fa-ul no-icons text-s">
                                                <li><a href="features/components/icons.html">Icons</a></li>
                                                <li><a href="features/components/counters-countdown.html">Counters</a></li>
                                                <li><a href="features/components/counters-countdown.html">Countdowns</a></li>
                                                <li><a href="features/components/progress-bars.html">Progress bars</a></li>
                                                <li><a href="features/components/progress-bars.html">Circle progress bars</a></li>
                                                <li><a href="features/components/timeline.html">Timeline</a></li>
                                                <li><a href="features/containers/section-slider.html">Section slider</a></li>
                                                <li><a href="features/components/php-contact-form.html">Contact form</a></li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <ul class="fa-ul no-icons text-s">
                                                <li><a href="features/components/buttons.html">Buttons</a></li>
                                                <li><a href="features/components/image-boxes.html">Image boxes</a></li>
                                                <li><a href="features/components/image-boxes-advanced.html">Advanced image boxes</a></li>
                                                <li><a href="features/components/content-box.html">Content boxes</a></li>
                                                <li><a href="features/components/social-media.html">Social media</a></li>
                                                <li><a href="features/components/lists.html">Lists</a></li>
                                                <li><a href="features/components/maps.html">Google maps</a></li>
                                                <li><a href="features/components/typography.html">Typography</a></li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <ul class="fa-ul no-icons text-s">
                                                <li><a href="features/components/tables.html">Advanced table</a></li>
                                                <li><a href="features/containers/lightbox.html">Lightbox and popups</a></li>
                                                <li><a href="features/containers/sliders.html">Sliders and carousels</a></li>
                                                <li><a href="features/containers/scroll-box-collapse.html">Scroll box</a></li>
                                                <li><a href="features/containers/scroll-box-collapse.html">Collapse box</a></li>
                                                <li><a href="features/containers/tabs.html">Tabs</a></li>
                                                <li><a href="features/containers/accordions.html">Accordions</a></li>
                                                <li><a href="features/containers/list-grid.html">Grid</a></li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <ul class="fa-ul no-icons text-s">
                                                <li><a href="features/containers/list-masonry.html">Masonry</a></li>
                                                <li><a href="features/containers/section-background-image.html">Section image</a></li>
                                                <li><a href="features/containers/section-background-image-parallax.html">Section parallax</a></li>
                                                <li><a href="features/containers/section-background-video.html">Section video</a></li>
                                                <li><a href="features/containers/section-animations.html">Section animation</a></li>
                                                <li><a href="features/footers/parallax.html">Footer parallax</a></li>
                                                <li><a href="features/footers/minimal.html">Footer minimal</a></li>
                                                <li><a href="features/footers/base.html">Footer base</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="col">
                                            <ul class="fa-ul no-icons text-s">
                                                <li><a href="features/menus/classic.html">Menu classic</a></li>
                                                <li><a href="features/menus/classic-transparent.html">Menu classic transparent</a></li>
                                                <li><a href="features/menus/big-logo.html">Menu big logo</a></li>
                                                <li><a href="features/menus/subline.html">Menu subline</a></li>
                                                <li><a href="features/menus/subtitle.html">Menu subtitle</a></li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <ul class="fa-ul no-icons text-s">
                                                <li><a href="features/menus/middle-logo.html">Menu middle logo</a></li>
                                                <li><a href="features/menus/middle-logo-top.html">Menu middle logo top</a></li>
                                                <li><a href="features/menus/middle-box.html">Menu middle box</a></li>
                                                <li><a href="features/menus/icons.html">Menu icons</a></li>
                                                <li><a href="features/menus/icons-top.html">Menu icons top</a></li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <ul class="fa-ul no-icons text-s">
                                                <li><a href="features/menus/side.html">Side classic</a></li>
                                                <li><a href="features/menus/side-lateral.html">Side lateral</a></li>
                                                <li><a href="features/menus/side-simple.html">Side simple</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="col">
                                            <ul class="fa-ul no-icons text-s">
                                                <li><a href="features/titles/image.html">Image background</a></li>
                                                <li><a href="features/titles/image-fullscreen.html">Image full-screen</a></li>
                                                <li><a href="features/titles/image-fullscreen-parallax.html">Image full-screen parallax</a></li>
                                                <li><a href="features/titles/image-parallax.html">Image parallax</a></li>
                                                <li><a href="features/titles/image-parallax-ken-burn.html">Image parallax ken-burn</a></li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <ul class="fa-ul no-icons text-s">
                                                <li><a href="features/titles/video-mp4.html">Video background MP4</a></li>
                                                <li><a href="features/titles/video-youtube.html">Video background Youtube</a></li>
                                                <li><a href="features/titles/video-fullscreen.html">Video full-screen</a></li>
                                                <li><a href="features/titles/video-fullscreen-parallax.html">Video full-screen parallax</a></li>
                                                <li><a href="features/titles/video-parallax.html">Video parallax</a></li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <ul class="fa-ul no-icons text-s">
                                                <li><a href="features/titles/base-1.html">Title base 1</a></li>
                                                <li><a href="features/titles/base-2.html">Title base 2</a></li>
                                                <li><a href="features/titles/animation.html">Animation background</a></li>
                                                <li><a href="features/titles/animation-parallax.html">Animation parallax</a></li>
                                            </ul>
                                        </div>
                                        <div class="col">
                                            <ul class="fa-ul no-icons text-s">
                                                <li><a href="features/titles/slider.html">Slider background</a></li>
                                                <li><a href="features/titles/slider-fullscreen.html">Slider full-screen</a></li>
                                                <li><a href="features/titles/slider-fullscreen-parallax.html">Slider full-screen parallax</a></li>
                                                <li><a href="features/titles/slider-parallax.html">Slider parallax</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> --}}
                </ul>

                <div class="nav navbar-nav navbar-right px-0">
                    <div class="custom-area px-0">

                        <a href="{{ url('/contact-us') }}" class="btn btn-sm   get-touch">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</header>
