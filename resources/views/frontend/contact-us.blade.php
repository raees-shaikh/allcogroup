@extends('frontend.layouts.app')
@section('title', 'Contact Us - ')
@section('content')
    <div class="header-title contact ken-burn-out w-100" data-parallax="scroll" data-natural-height="800" data-natural-width="1920"
        data-image-src="frontend/images/hd-3.jpg">
        {{-- <div class="header-base"> --}}
        <div class="container">
            <div class="row mt-lg">
                <div class="col-md-9">
                    <div class="title-base text-left">
                        <h1 class="text-white text-shad">Contact Us</h1>
                        <p class="text-white fs-16 text-shad">Contact us today, and let's embark on a journey to transform your vision
                            into a reality that exceeds your expectations.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="active-breadcrumb">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty bg-white">
        <div class="container content">
            <h2 class="text-center mt-767-15">Contact Us</h2>
            {{-- <div class="row">
            <div class="col-md-4">
                <div class="advs-box advs-box-top-icon boxed-inverse text-left">
                    <i class="im-money-bag icon circle"></i>
                    <h3>Sales Inquiry</h3>
                    <p>
                        Preliminary response from prospective customers, generally following a sales promotion campaign.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="advs-box advs-box-top-icon boxed-inverse text-left">
                    <i class="im-support icon circle"></i>
                    <h3>Customer Support</h3>
                    <p>
                        If you've got questions about constrcting with us, you can contact our support team from this page or call us at (02) 111 111 000.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="advs-box advs-box-top-icon boxed-inverse text-left">
                    <i class="im-monitor-analytics icon circle"></i>
                    <h3>Request a quote</h3>
                    <p>
                        In our continued effort to make it easier for customers to do business with us, we will provide the lower prices.
                    </p>
                </div>
            </div>
        </div> --}}

            <div class="row proporzional-row row-mt-35">
                <div class="col-lg-6 col-md-7 form-border boxed-inverse p-0-767">
                    <h2 class="text-capitalize">Contact us here</h2>
                    <hr class="space m" />
                    <form action="{{route('contact.submit')}}" class="form-box"
                        method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <p class="l-h">Full Name</p>
                                <input id="name" name="name" minlength="3" maxlength="30"
                                    type="text" class="form-control form-value" value="{{ old('name') }}" placeholder="Enter Full Name" required>
                                @if ($errors->has('name'))
                                    <div class="text-danger" role="alert">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>

                        </div>

                        <div class="row mt-10 ">
                            <div class="col-md-6 ">
                                <p class="l-h">Email</p>
                                <input id="email" name="email" minlength="5" maxlength="40"
                                    type="email" class="form-control form-value" value="{{ old('email') }}"  placeholder="Enter Email">
                                @if ($errors->has('email'))
                                    <div class="text-danger" role="alert">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <p class="l-h">Phone Number</p>
                                <input id="phone" name="phone" type="text"
                                    value="{{ old('phone') }}" minlength="10" maxlength="10"
                                    class="form-control form-value" placeholder="Enter Phone Number" required>
                                @if ($errors->has('phone'))
                                    <div class="text-danger" role="alert">
                                        {{ $errors->first('phone') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <hr class="space xs" />
                        <p class="l-h">Message</p>
                        <textarea id="messagge" name="message" rows="5" class="l-h form-control form-value"
                            minlength="5" maxlength="250" placeholder="Enter Message" required>{{ old('message') }}</textarea>
                        @if ($errors->has('message'))
                            <div class="text-danger" role="alert">
                                {{ $errors->first('message') }}
                            </div>
                        @endif
                        <hr class="space s" />
                        <button class="btn-xs btn mt-contact-30">Send message</button>

                    </form>
                </div>
                <div class="col-lg-6 col-lg-5 boxed-inverse no-paddings mb-20 g-map-sec">
                    <div class="google-map x" data-marker-pos-top="25" data-zoom="12" data-coords="40.741895,-73.989308"
                        data-skin="gray" data-marker="">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.7581577576716!2d-0.16916742405218216!3d51.60931970325341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487619f29f682ccd%3A0x647e728cae98ea80!2s9%20Garthway%2C%20London%20N12%200QY%2C%20UK!5e0!3m2!1sen!2sin!4v1687162104930!5m2!1sen!2sin"
                            width="100%" class="h-600" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
