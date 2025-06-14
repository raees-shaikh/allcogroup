@extends('frontend.layouts.app')
@section('title','Our Projects - ')

@section('content')
<div class="header-title project ken-burn-out w-100" data-parallax="scroll" data-natural-height="800" data-natural-width="1920" data-image-src="frontend/images/hd-4.jpg">
{{-- <div class="header-base"> --}}
    <div class="container">
        <div class="row mt-lg">
            <div class="col-md-9">
                <div class="title-base text-left white">
                    <h1 class="text-white text-shad">Our Projects</h1>
                    <p class="paragraph fs-16 text-white text-shad" >When a construction company invests in a variety of projects, the combination can be viewed as a portfolio of projects. Such a great portfolio.</p>
                </div>
            </div>
            <div class="col-md-3">
                <ol class="breadcrumb b ">
                    <li><a href="{{url('/')}}" class="tex-white">Home</a></li>
                    <li class="active-breadcrumb">Our Projects</li>

                </ol>
            </div>
        </div>
    </div>
</div>
{{-- <div class="section-empty bg-white">
    <div class="container content">
        <div class="collapse-box" data-height="730">
            <div class="panel">
                <div class="list-items">
                    <div class="list-item list-item-img">
                        <div class="row">
                            <div class="col-md-9">
                                <i class="onlycover circle icon" style="background-image:url(../images/gallery/image-17.jpg)"></i>
                                <h3>Hydrogen powered turbine engine installation</h3>
                                <p>
                                    Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse cillume.
                                </p>
                            </div>
                            <div class="col-md-3">
                                <span>Construction</span>
                            </div>
                        </div>
                    </div>
                    <div class="list-item list-item-img">
                        <div class="row">
                            <div class="col-md-9">
                                <i class="onlycover circle icon" style="background-image:url(../images/gallery/image-18.jpg)"></i>
                                <h3>London Google Technology and innovation hub</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                    Utenim ad minim veniam quis nostrud exercitation ullamco laboris                                </p>
                            </div>
                            <div class="col-md-3">
                                <span>Renovation</span>
                            </div>
                        </div>
                    </div>
                    <div class="list-item list-item-img">
                        <div class="row">
                            <div class="col-md-9">
                                <i class="onlycover circle icon" style="background-image:url(../images/gallery/image-19.jpg)"></i>
                                <h3>The Lightwire offices in New mexico</h3>
                                <p>
                                    Anisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur.    Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse cillume.
                                </p>
                            </div>
                            <div class="col-md-3">
                                <span>Construction</span>
                            </div>
                        </div>
                    </div>
                    <div class="list-item list-item-img">
                        <div class="row">
                            <div class="col-md-9">
                                <i class="onlycover circle icon" style="background-image:url(../images/gallery/image-20.jpg)"></i>
                                <h3>San Francisco Sport and fitness studio</h3>
                                <p>
                                    Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse cillume.
                                </p>
                            </div>
                            <div class="col-md-3">
                                <span>Interiors</span>
                            </div>
                        </div>
                    </div>
                    <div class="list-item list-item-img">
                        <div class="row">
                            <div class="col-md-9">
                                <i class="onlycover circle icon" style="background-image:url(../images/gallery/image-22.jpg)"></i>
                                <h3>Renovating the construction industry from the ground</h3>
                                <p>
                                    Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. Lorem ipsum dolor sit amet.  sed diam voluptua.
                                </p>
                            </div>
                            <div class="col-md-3">
                                <span>Renovation</span>
                            </div>
                        </div>
                    </div>
                    <div class="list-item list-item-img">
                        <div class="row">
                            <div class="col-md-9">
                                <i class="onlycover circle icon" style="background-image:url(../images/gallery/image-27.jpg)"></i>
                                <h3>The red bridge construction on Tamigi River</h3>
                                <p>
                                    Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse cillume.
                                </p>
                            </div>
                            <div class="col-md-3">
                                <span>Construction</span>
                            </div>
                        </div>
                    </div>
                    <div class="list-item list-item-img">
                        <div class="row">
                            <div class="col-md-9">
                                <i class="onlycover circle icon" style="background-image:url(../images/gallery/image-29.jpg)"></i>
                                <h3>Microsoft Office and Saloon interiors</h3>
                                <p>
                                    Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse cillume.
                                </p>
                            </div>
                            <div class="col-md-3">
                                <span>Interiors</span>
                            </div>
                        </div>
                    </div>
                    <div class="list-item list-item-img">
                        <div class="row">
                            <div class="col-md-9">
                                <i class="onlycover circle icon" style="background-image:url(../images/gallery/image-14.jpg)"></i>
                                <h3>Underground of London - New Piccadilly branch</h3>
                                <p>
                                    Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse cillume.
                                </p>
                            </div>
                            <div class="col-md-3">
                                <span>Construction</span>
                            </div>
                        </div>
                    </div>
                    <div class="list-item list-item-img">
                        <div class="row">
                            <div class="col-md-9">
                                <i class="onlycover circle icon" style="background-image:url(../images/gallery/image-14.jpg)"></i>
                                <h3>The Freedom bridge of Shangai</h3>
                                <p>
                                    Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse cillume.
                                </p>
                            </div>
                            <div class="col-md-3">
                                <span>Construction</span>
                            </div>
                        </div>
                    </div></div></div>

                <a class="collapse-button btn btn-sm" data-button-open-text="Close" data-button-close-text="Show all projects">
                    <b>Show all projects</b> <span class="caret"></span>
                </a>
            </div>
        </div>
    </div>
</div>
<i class="scroll-top scroll-top-mobile show fa fa-sort-asc"></i> --}}

@php
    $imagesproject1= [
        'path' =>'frontend/images/projects/project-1/IMG-20230621-WA0000.jpg',
        'path-1' =>'frontend/images/projects/project-1/IMG-20230621-WA0001.jpg',
        'path-2' =>'frontend/images/projects/project-1/IMG-20230621-WA0002.jpg',
        'path-3' =>'frontend/images/projects/project-1/IMG-20230621-WA0003.jpg',
        'path-4' =>'frontend/images/projects/project-1/IMG-20230621-WA0004.jpg',
        'path-5' =>'frontend/images/projects/project-1/IMG-20230621-WA0005.jpg'

];


    $imagesproject2= [
        'path-6' =>'frontend/images/projects/project-2/IMG-20230621-WA0006.jpg',
        'path-7' =>'frontend/images/projects/project-2/IMG-20230621-WA0007.jpg',
        'path-8' =>'frontend/images/projects/project-2/IMG-20230621-WA0008.jpg',
        'path-9' =>'frontend/images/projects/project-2/IMG-20230621-WA0009.jpg',
        'path-10' =>'frontend/images/projects/project-2/IMG-20230621-WA0010.jpg',
        'path-11' =>'frontend/images/projects/project-2/IMG-20230621-WA0011.jpg',
        'path-12' =>'frontend/images/projects/project-2/IMG-20230621-WA0012.jpg',
        'path-13' =>'frontend/images/projects/project-2/IMG-20230621-WA0013.jpg',
        'path-14' =>'frontend/images/projects/project-2/IMG-20230621-WA0014.jpg',
        'path-15' =>'frontend/images/projects/project-2/IMG-20230621-WA0015.jpg',
        'path-16' =>'frontend/images/projects/project-2/IMG-20230621-WA0016.jpg'

];

$imagesproject3= [
        'path' =>'frontend/images/projects/project-3/IMG-20230621-WA0017.jpg',
        'path-1' =>'frontend/images/projects/project-3/IMG-20230621-WA0018.jpg',
        'path-2' =>'frontend/images/projects/project-3/IMG-20230621-WA0019.jpg',
        'path-3' =>'frontend/images/projects/project-3/IMG-20230621-WA0020.jpg',
        'path-4' =>'frontend/images/projects/project-3/IMG-20230621-WA0021.jpg',
        'path-5' =>'frontend/images/projects/project-3/IMG-20230621-WA0022.jpg',
        'path-6' =>'frontend/images/projects/project-3/IMG-20230621-WA0023.jpg',
        'path-7' =>'frontend/images/projects/project-3/IMG-20230621-WA0024.jpg',
        'path-8' =>'frontend/images/projects/project-3/IMG-20230621-WA0025.jpg',
        'path-9' =>'frontend/images/projects/project-3/IMG-20230621-WA0026.jpg',
        'path-10' =>'frontend/images/projects/project-3/IMG-20230621-WA0027.jpg',
        'path-11' =>'frontend/images/projects/project-3/IMG-20230621-WA0028.jpg',
        'path-12' =>'frontend/images/projects/project-3/IMG-20230621-WA0029.jpg',
        'path-13' =>'frontend/images/projects/project-3/IMG-20230621-WA0030.jpg'

];

$imagesproject4= [

        'path-1' =>'frontend/images/projects/project-4/img-1.jpeg',
        'path-2' =>'frontend/images/projects/project-4/img-2.jpeg',
        'path-3' =>'frontend/images/projects/project-4/img-3.jpeg',
        'path-4' =>'frontend/images/projects/project-4/img-4.jpeg',

];




@endphp
<div class="section-empty ">
    <h2 class="about text-center pt-30"><b>Our Projects</b></h2>
    <div class="container content custom-x-axis p-md-0-x">

<div class="mr-xl">
    <div id="tabbed-nav nav-item-center ">
        <div class="tab active " data-target="tab-1">Crown Estates</div>
        <div class="tab" data-target="tab-2">Claimguard Insurance</div>
        <div class="tab " data-target="tab-3">Malabar Gold And Diamonds</div>
                <div class="tab " data-target="tab-4">Luxury Out House</div>
        {{-- <div class="tab" data-target="tab-3">Tab 3</div> --}}
     </div>
</div>
 <div id="tabbed-content ">
    <div id="tab-2" class="images justify-content-md-center px-xl-0">
@foreach ($imagesproject2 as $image )
<div class=' news-Slide-up w-320'>
    <img src="{{$image}}" />
    <div class='newsCaption opacity-0'>
<div class="pt-50">
    <h2 class='newsCaption-title text-center fs-16 text-capitalize custom-style' >Place :&nbsp; Northolt, London</h2>
    <h2 class='newsCaption-title text-center fs-16 pt-10 text-capitalize custom-style' > Client : &nbsp;Claimguard Insurance</h2>
</div>

    </div>
</div>
@endforeach

       {{-- <img src="{{url('frontend/images/projects/project-2/IMG-20230621-WA0000.jpg')}}" alt="image 1">
       <img src="{{url('frontend/images/projects/project-2/IMG-20230621-WA0001.jpg')}}" alt="image 1">
       <img src="{{url('frontend/images/projects/project-2/IMG-20230621-WA0002.jpg')}}" alt="image 1">
       <img src="{{url('frontend/images/projects/project-2/IMG-20230621-WA0003.jpg')}}" alt="image 1">
       <img src="{{url('frontend/images/projects/project-2/IMG-20230621-WA0004.jpg')}}" alt="image 1">
       <img src="{{url('frontend/images/projects/project-2/IMG-20230621-WA0005.jpg')}}" alt="image 1">
       <img src="{{url('frontend/images/projects/project-2/IMG-20230621-WA0006.jpg')}}" alt="image 1">
       <img src="{{url('frontend/images/projects/project-2/IMG-20230621-WA0007.jpg')}}" alt="image 1">
       <img src="{{url('frontend/images/projects/project-2/IMG-20230621-WA0008.jpg')}}" alt="image 1">
       <img src="{{url('frontend/images/projects/project-2/IMG-20230621-WA0009.jpg')}}" alt="image 1">
       <img src="{{url('frontend/images/projects/project-2/IMG-20230621-WA0010.jpg')}}" alt="image 1">
       <img src="{{url('frontend/images/projects/project-2/IMG-20230621-WA0011.jpg')}}" alt="image 1">
       <img src="{{url('frontend/images/projects/project-2/IMG-20230621-WA0012.jpg')}}" alt="image 1">
       <img src="{{url('frontend/images/projects/project-2/IMG-20230621-WA0013.jpg')}}" alt="image 1">
       <img src="{{url('frontend/images/projects/project-2/IMG-20230621-WA0014.jpg')}}" alt="image 1">
       <img src="{{url('frontend/images/projects/project-2/IMG-20230621-WA0015.jpg')}}" alt="image 1">
       <img src="{{url('frontend/images/projects/project-2/IMG-20230621-WA0016.jpg')}}" alt="image 1"> --}}


    </div>
    <div id="tab-3" class="images justify-content-md-center px-xl-0">
        @foreach ($imagesproject3 as $images )
<div class=' news-Slide-up w-320'>
    <img src="{{$images}}" />
    <div class='newsCaption opacity-0'>
<div class="pt-50">

    <h2 class='newsCaption-title text-center fs-16 pt-10 custom-style text-capitalize' >Malabar Gold and Diamonds</h2>
</div>

    </div>
</div>
@endforeach
        {{-- <img src="{{url('frontend/images/projects/project-3/IMG-20230621-WA0017.jpg')}}" alt="image 1">
        <img src="{{url('frontend/images/projects/project-3/IMG-20230621-WA0018.jpg')}}" alt="image 1">
        <img src="{{url('frontend/images/projects/project-3/IMG-20230621-WA0019.jpg')}}" alt="image 1">
        <img src="{{url('frontend/images/projects/project-3/IMG-20230621-WA0020.jpg')}}" alt="image 1">
        <img src="{{url('frontend/images/projects/project-3/IMG-20230621-WA0021.jpg')}}" alt="image 1">
        <img src="{{url('frontend/images/projects/project-3/IMG-20230621-WA0022.jpg')}}" alt="image 1">
        <img src="{{url('frontend/images/projects/project-3/IMG-20230621-WA0023.jpg')}}" alt="image 1">
        <img src="{{url('frontend/images/projects/project-3/IMG-20230621-WA0024.jpg')}}" alt="image 1">
        <img src="{{url('frontend/images/projects/project-3/IMG-20230621-WA0025.jpg')}}" alt="image 1">
        <img src="{{url('frontend/images/projects/project-3/IMG-20230621-WA0026.jpg')}}" alt="image 1">
        <img src="{{url('frontend/images/projects/project-3/IMG-20230621-WA0027.jpg')}}" alt="image 1">
        <img src="{{url('frontend/images/projects/project-3/IMG-20230621-WA0028.jpg')}}" alt="image 1">
        <img src="{{url('frontend/images/projects/project-3/IMG-20230621-WA0029.jpg')}}" alt="image 1">
        <img src="{{url('frontend/images/projects/project-3/IMG-20230621-WA0030.jpg')}}" alt="image 1"> --}}
    </div>
    <div id="tab-1" class="images active px-xl-0 justify-content-md-center">
        @foreach ($imagesproject1 as $images1 )
        <div class=' news-Slide-up w-320'>
            <img src="{{$images1}}" />
            <div class='newsCaption opacity-0'>
        <div class="pt-50">
            <h2 class='newsCaption-title text-center fs-16 text-capitalize custom-style' >Place : &nbsp; Flat Refurbishment. Edgware , London</h2>
            <h2 class='newsCaption-title text-center fs-16 pt-10 text-capitalize custom-style' >Client :&nbsp; Crown Estates</h2>
        </div>

            </div>
        </div>
        @endforeach
    </div>

    <div id="tab-4" class="images justify-content-md-center px-xl-0">
        @foreach ($imagesproject4 as $images )
<div class=' news-Slide-up w-320'>
    <img src="{{$images}}" />
    <div class='newsCaption opacity-0'>
<div class="pt-50">

    <h2 class='newsCaption-title text-center fs-16 text-capitalize custom-style' >Place : &nbsp; Northolt </h2>
    <h2 class='newsCaption-title text-center fs-16 pt-10 text-capitalize custom-style' >Client :&nbsp; Luxury Out House</h2>
</div>

    </div>
</div>
@endforeach
 </div>

    </div></div>
    @endsection
@section('js')
<script>
    // JavaScript to handle tabbed navigation
    const tabs = document.querySelectorAll('.tab');
    const images = document.querySelectorAll('.images');
    tabs.forEach(tab => {
       tab.addEventListener('click', () => {

          // Remove active class from all tabs
          tabs.forEach(tab => tab.classList.remove('active'));

          // Add active class to clicked tab
          tab.classList.add('active');

          // Hide all image galleries
          images.forEach(image => image.classList.remove('active'));

          // Show image gallery associated with clicked tab
          const target = tab.getAttribute('data-target');
          document.getElementById(target).classList.add('active');
       });
    });
 </script>
@endsection
