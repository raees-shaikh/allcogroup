<i class="scroll-top scroll-top-mobile show fa fa-sort-asc"></i>
<footer class="footer-base" style="background-image: url('frontend/images/gallery/footer-bg.png')">
    <div class="container content footer-btm">
        <div class="row">
            <div class="col-md-4 mt---0">
                <a href="{{ url('/') }}" class=""> <img class="logo p-0 m-0 custom-footer-img "
                        src="frontend/images/gallery/allco-logo-footer.png" alt="logo"></a>
                {{-- <hr class="space s"> --}}
                <p class="text-s text-s-f footer-text mt--40 text-white">
                    Allco offers a comprehensive range of construction services to cater to diverse project
                    requirements.
                </p>
                <hr class="space s">

                <div class="btn-group social-group btn-group-icons footer-icons mt-5 ">
                    <a target="_blank" href="#" data-social="share-linkedin" data-placement="top" title="LinkedIn"
                        class="hover-link ">
                        {{-- <i class="fa fa-linkedin text-s circle"></i> --}}
                        <i class="bx bxl-linkedin text-s circle bg-white"></i>
                        <a target="_blank" href="#" data-social="share-facebook" data-placement="top"
                            title="Facebook" class="hover-link ">
                            <i class="bx bxl-facebook text-s circle bg-white"></i>
                        </a>
                        <a target="_blank" href="#" data-social="share-twitter" data-placement="top"
                            title="Twitter" class="hover-link ">
                            {{-- <i class="fa fa-twitter text-s circle"></i> --}}
                            <i class="bx bxl-twitter text-s circle bg-white"></i>
                        </a>
                        {{-- <a target="_blank" href="#" data-social="share-google" data-toggle="tooltip"
                        data-placement="top" title="Google+"> --}}
                        {{-- <i class="fa fa-google-plus text-s circle"></i> --}}
                        {{-- <i class="bx bxl-google-plus text-s circle bg-white"></i> --}}
                    </a>

                    </a>
                </div>
            </div>
            {{-- <div class="col-md-4">
                <h3 class="text-black text-uppercase">Contact Info</h3>

                <h4 class="pt-10">Address</h4>
                <ul class="fa-ul text-s ul-squares ">
                    <li>201 Liverpool Street, Suite 721, London</li>
                    <li>London, United Kingdom</li>

                </ul>
                <h4 class="mt-5">Email</h4>
                <ul class="fa-ul text-s ul-squares">
                    <li>youremail@yourdomain.com</li>

                </ul>

                <h4 class="mt-5">Mobile No</h4>
                <ul class="fa-ul text-s ul-squares">
                    <li>+88 (0) 101 0000 000</li>
                </ul>
            </div> --}}
            <div class="col-md-4">
                <h3 class="text-blue font-weight-900  text-white">Quick Links</h3>
                <hr class="space space-30">
                <div class="footer-menu text-s ">
                    <a class="footer-link text-white opacity-07" href="{{ url('/') }}">Home</a>
                    <a class="footer-link text-white opacity-07" href="{{ url('/about-us') }}">About Us</a>
                    <a class="footer-link text-white opacity-07" href="{{ url('/our-projects') }}">Our Projects</a>
                    <a class="footer-link text-white opacity-07" href="{{ url('/careers') }}">Careers</a>
                    <a class="footer-link text-white opacity-07" href="{{ url('/contact-us') }}">Contact US</a>
                </div>
            </div>
            <div class="col-md-4">
                <h3 class="text-blue font-weight-900  text-white">Contact Info</h3>

                <h4 class="pt-10 text-white">Address</h4>
                <ul class="fa-ul text-s ul-squares ">
                    <li class="text-white opacity-07">9 Garthway, London N12 0QY,
                        United Kingdom.</li>


                </ul>
                <h4 class="mt-5 text-white">Email Address</h4>
                <ul class="fa-ul text-s ul-squares">
                    <li class="footer-link text-white"><a href="mailto:info@allcogroup.co.uk"
                            class="text-white opacity-07">info@allcogroup.co.uk</a></li>

                </ul>

                <h4 class="mt-5 text-white">Contact Number</h4>
                <ul class="fa-ul text-s ul-squares">
                    <li class="footer-link text-white">

                        <a href="tel:+447912029275" class="text-white opacity-07">+447912029275</a>
                    </li>
                </ul>
            </div>
        </div>

        <hr class="space hidden-sm">
        <div class="row copy-row">
            <div class="col-md-12 copy-text text-white">
                &copy {{ date('Y') }} The Allco Group. All Rights Reserved. Designed & Developed by <a
                    href="http://acetrot.com" class="text-sky-blue" target="_blank"><b>Acetrot</b></a>

                {{-- © 2018 Lightwire - Multipurpose & Modern Html Template Handmade by <a
                    href="http://schiocco.com/">schiocco.com</a> --}}
            </div>
        </div>
    </div>
    <script  src="{{ url('frontend/minified/script.min.js') }}"></script>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('plugins/notification/snackbar/snackbar.min.js') }}"></script>
    {{-- <script src="/js/jquery.min.js"></script> --}}
    <script>
        @if (Session::get('alert-type') == 'success')
            @if (Session::has('message'))
                Snackbar.show({
                    text: "{{ Session::get('message') }}",
                    pos: 'top-right',
                    actionTextColor: '#fff',
                    backgroundColor: '#1abc9c',
                });
            @endif
        @elseif (Session::get('alert-type') == 'info')
            @if (Session::has('message'))
                Snackbar.show({
                    text: "{{ Session::get('message') }}",
                    pos: 'top-right',
                    actionTextColor: '#fff',
                    backgroundColor: '#2196f3'
                });
            @endif
        @elseif (Session::get('alert-type') == 'error')
            @if (Session::has('message'))
                Snackbar.show({
                    text: "{{ Session::get('message') }}",
                    pos: 'top-right',
                    actionTextColor: '#fff',
                    backgroundColor: '#e7515a',
                });
            @endif
        @else
            @if (Session::has('message'))
                Snackbar.show({
                    text: "{{ Session::get('message') }}",
                    pos: 'top-right',
                    actionTextColor: '#fff',
                    backgroundColor: '#3b3f5c'
                });
            @endif
        @endif
    </script>

    <script>
        $(document).ready(function() {
            var $navbar = $("#mNavbar");

            AdjustHeader(); // Incase the user loads the page from halfway down (or something);
            $(window).scroll(function() {
                AdjustHeader();
            });

            function AdjustHeader() {
                if ($(window).scrollTop() > 500) {
                    if (!$navbar.hasClass("navbar-fixed-top")) {
                        $navbar.addClass("navbar-fixed-top");
                    }
                } else {
                    $navbar.removeClass("navbar-fixed-top");
                }
            }
        });
    </script>
</footer>
