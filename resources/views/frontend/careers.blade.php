@extends('frontend.layouts.app')
@section('title', 'Careers - ')
@section('content')
    <div class="header-title career ken-burn-out w-100" data-parallax="scroll" data-natural-height="800" data-natural-width="1920"
        data-image-src="frontend/images/hd-12.jpg">
        <div class="container">


            <div class="row mt-lg">
                <div class="col-md-9">
                    <div class="title-base text-left">
                        <h1 class="text-white text-shad">Careers</h1>
                        {{-- <p class="white fs-16">If you have a passion for construction, a commitment to excellence, and a
                            desire to be part of a dynamic team, we invite you to join Allco and build your future with us.
                            Together, we will create remarkable structures and leave a lasting impact in the construction
                            domain.</p> --}}
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b ">
                        <li><a href="{{ url('/') }}" class="white">Home</a></li>
                        <li class="active-breadcrumb ">Careers</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="section-empty bg-white">
        <div class="container content">
            <h2 class="text-center mt-767-15">Work With Us</h2>
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
            {{-- <hr class="space l" /> --}}
            <div class="row proporzional-row row-mt-35">
                <div class="col-md-7 boxed-inverse form-border ">
                    <h3 class="text-blue font-weight-900">Reach Us</h3>
                    {{-- <hr class="space m" /> --}}
                    <form action="{{ route('careers.submit') }}" class="form-box" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <p>Full Name</p>
                                <input id="name" name="name" placeholder="Enter Full Name" type="text"
                                    class="form-control form-value" minlength="3" maxlength="30"
                                    value="{{ old('name') }}" required>
                                @if ($errors->has('name'))
                                    <div class="text-danger" role="alert">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-6 ">
                                <p>Email</p>
                                <input id="email" name="email" placeholder="Enter Email" type="email"
                                    class="form-control form-value" minlength="5" maxlength="40"
                                    value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <div class="text-danger" role="alert">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>


                        </div>

                        <div class="row mt-10">

                            <div class="col-md-6 ">
                                <p>Phone Number</p>
                                <input id="phone" name="phone" placeholder="Enter Phone Number" type="text"
                                    class="form-control form-value" minlength="10" maxlength="10"
                                    value="{{ old('phone') }}" required>
                                @if ($errors->has('phone'))
                                    <div class="text-danger" role="alert">
                                        {{ $errors->first('phone') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-6 ">
                                <p>Upload Resume</p>
                                <input id="resume" name="resume" placeholder="Upload Resume" type="file"
                                    class="form-control form-value" value="{{ old('resume') }}" required>
                                @if ($errors->has('resume'))
                                    <div class="text-danger" role="alert">
                                        {{ $errors->first('resume') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mt-10">
                            <div class="col-md-12">
                                <p>Position Applying For*</p>
                                <input id="position" name="position" placeholder="Enter Position" type="text"
                                    class="form-control form-value" minlength="5" maxlength="40"
                                    value="{{ old('position') }}" required>
                                @if ($errors->has('position'))
                                    <div class="text-danger" role="alert">
                                        {{ $errors->first('position') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        {{-- <div class="row mt-10">
                            <div class="col-md-6">
                                <p>Experience</p>
                                <input id="experience" name="experience" placeholder="Enter Experience" type="text"
                                    class="form-control form-value" minlength="2" maxlength="120">
                            </div>
                        </div> --}}
                        <hr class="space xs" />
                        <p>Message</p>
                        <textarea id="messagge" name="message" rows="4" minlength="5" maxlength="250" placeholder="Enter Message"
                            class="form-control form-value" required>{{ old('message') }}</textarea>
                        <hr class="space s" />
                        @if ($errors->has('message'))
                            <div class="text-danger" role="alert">
                                {{ $errors->first('message') }}
                            </div>
                        @endif
                        <button class="btn-xs btn mt-5 submit-btn-x-padding" type="submit">Submit</button>

                    </form>
                </div>
                <div class="col-md-5 boxed-inverse no-paddings custom-card">
                    {{-- <div class="google-map x" data-marker-pos-top="25" data-zoom="12" data-coords="40.741895,-73.989308" data-skin="gray" data-marker="http://templates.framework-y.com/Lightwire/images/marker-map-4.png"></div> --}}
                    <p class="mt-40 px-10 fs-16">If You Have A Passion For Construction, A Commitment To Excellence, And A
                        Desire To Be Part Of A Dynamic Team, We Invite You To Join Allco And Build Your Future With Us. </p>
                    <p class="cust-p px-10 fs-16"> Together, We Will Create Remarkable Structures And Leave A Lasting Impact
                        In The Construction Domain.</p>
                    <div class="opacity-custom">
                        <img src="{{ url('frontend/images/gallery/dubai.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
