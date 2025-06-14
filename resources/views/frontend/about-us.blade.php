@extends('frontend.layouts.app')
@section('title', 'About Us - ')

@section('content')
    <div class="header-title ken-burn-out w-100" data-parallax="scroll" data-natural-height="800" data-natural-width="1920"
        data-image-src="{{url('frontend/images/breadcrumbs/about.jpg')}}">
        <div class="container">


            <div class="row mt-lg">
                <div class="col-md-9">
                    <div class="title-base text-left white">
                        <h1 class="text-white text-shad">About Us</h1>
                        <h3 class="text-white text-shad">The Allco Group </h3>
                        <p class="fs-16 text-white text-shad">Building Dreams, One Project at a Time.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ol class="breadcrumb b white">
                        <li><a href="{{ url('/') }}" class="white">Home</a></li>
                        <li class="active-breadcrumb">About Us</li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty no-padding-bottom bg-white">
        <div class="container content ">
            <div class="row">
                <h2 class="px-5">About Us</h2>
                <div class="col-lg-4  ">


                    <p class="pt-10 fs-16 paragraph lh-custom">
                        Welcome to Allco, a premier construction company committed to delivering exceptional building
                        solutions tailored to meet your unique needs. With a solid foundation of expertise and a relentless
                        pursuit of excellence, we are dedicated to turning your vision into reality.
                        Founded in 2003 by astute entrepreneurs, Vaghji Patel, Viren Nakrani and Nimish Patel, We at Allco
                        understand that construction projects
                    </p>

                </div>
                <div class="col-lg-4 col-md-6 ">

                    <p class="paragraph lh-custom pt-10 fs-16">
                        are more than just building structures; they are the embodiment of dreams, aspirations, and the
                        result of careful planning. That's why we bring together a team of skilled professionals,
                        experienced architects, engineers, and project managers, who are passionate about their craft and
                        are committed to delivering projects of exceptional quality.
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 mt-1115 ">
                    <img src="frontend/images/gallery/bg.jpg" alt="Alternate Text" / style="width: 400px;height:270px">
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="section-empty bg-white">
    <div class="container content">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h4>Team members</h4>
                <div class="counter-box-simple text-color "><span class="counter text-xl" data-to="3000" data-separator="">3000</span><span class="text-s"> %</span></div>
                <hr class="space xs" />
                <p class="text-xs text-uppercase">Increase from middle 2010.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h4>Growing scale</h4>
                <div class="counter-box-simple text-color  "><span class="counter text-xl" data-to="300">120</span><span class="text-s"> %</span></div>
                <hr class="space xs" />
                <p class="text-xs text-uppercase">Business daily growth</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h4>Clients</h4>
                <div class="counter-box-simple text-color "><span class="counter text-xl" data-to="950">950</span><span class="text-s"></span></div>
                <hr class="space xs" />
                <p class="text-xs text-uppercase">N° of clients we helped.</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <h4>Projects</h4>
                <div class="counter-box-simple text-color"><span class="counter text-xl" data-to="2500" data-separator="">2500</span><span class="text-s"></span></div>
                <hr class="space xs" />
                <p class="text-xs text-uppercase">Number of projects.</p>
            </div>
        </div>
    </div>
</div> --}}
    <div class="section-empty ">
        <div class="container content pt-0">
            <div class="row">
                <div class="col-lg-4  card">
                    <hr class="space m" />
                    <h2> <img src="{{ url('frontend/images/icons/approach.png') }}" alt="" class="img-size"> Our
                        Approach</h2>
                    <p class="mt-5 paragraph lh-custom fs-16">
                        We pride ourselves on our client-centric approach, ensuring that your satisfaction remains at the
                        core of everything we do. From the initial consultation to project completion, we strive to build
                        lasting relationships based on trust, transparency, and open communication. We are confident that
                        collaboration with our clients, architects, and subcontractors is vital to achieving outstanding
                        results.
                    </p>

                </div>
                <div class="col-lg-4 col-md-6 card">
                    <hr class="space m" />
                    <h2><img src="{{ url('frontend/images/icons/bulb-new.png') }}" alt="" class="img-size">Vision
                    </h2>
                    <p class="mt-5 paragraph lh-custom fs-16">
                        Our vision is to become the leading construction company known for our unwavering commitment to
                        excellence, innovation, and sustainable building practices. We aspire to shape the skylines,
                        transform communities, and create spaces that inspire and endure.
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 card">
                    <hr class="space m" />
                    <h2><img src="{{ url('frontend/images/icons/target-new.png') }}" alt="" class="img-size">Mission
                    </h2>
                    <p class="mt-5 paragraph lh-custom fs-16">
                        Our mission is to deliver exceptional construction solutions that exceed our client's expectations.
                        We strive to provide outstanding craftsmanship, innovative designs, and unparalleled customer
                        service. Through collaboration, integrity, and a relentless pursuit of quality, we aim to build a
                        legacy of successful projects and satisfied clients.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="section-empty  bg-white" id="values">
        <div class="container content pt-0">
            <div class="row">
                <div class="col-lg-4 col-md-5  text-right md-scr-block md-scr-hide mt-50 ">
                    <img class="mx-auto" src="frontend/images/gallery/group.jpg" alt="Alternate Text" />
                </div>
                <div class="col-lg-8 col-md-7  ">
                    <hr class="space m" />
                    <h2>Values</h2>
                    <p class=" paragraph lh-custom fs-16">Dedicated to delivering excellence in every aspect of our work,
                        from the initial concept to the final construction, we set high standards, pay meticulous attention
                        to detail, and continuously strive for perfection. As we uphold the highest levels of integrity,
                        honesty, and ethical conduct in all our interactions, we value transparency, fairness, and trust,
                        believing that conducting business with integrity is fundamental to our success.</p>
                    <p class=" paragraph lh-custom fs-16">We are also devoted to sustainable construction practices that
                        minimize our environmental impact. We incorporate eco-friendly materials, energy-efficient designs,
                        and responsible waste management techniques to create buildings that promote environmental
                        stewardship and long-term sustainability. Along with this, prioritization of the safety and
                        well-being of our employees, subcontractors, and all stakeholders is a must for us. We maintain a
                        safe work environment, adhere to rigorous safety protocols, and invest in comprehensive training to
                        prevent accidents and promote a culture of safety. </p>
                    <p class=" paragraph lh-custom fs-16">We believe in the power of collaboration. By fostering strong
                        partnerships with our clients, architects, subcontractors, and suppliers, we create synergistic
                        relationships that result in exceptional outcomes. We value open communication, active listening,
                        and a teamwork-oriented approach.</p>
                    <p class=" paragraph lh-custom fs-16">By embracing these values, we aim to create a positive impact on
                        the construction industry, inspire our employees, delight our clients, and contribute to the
                        betterment of society and the environment.</p>
                </div>
                <div class="col-lg-4 col-md-5  text-right hidden-sm mt-50 mt-40-1115">
                    <img class="mx-auto" src="frontend/images/gallery/group.jpg" alt="Alternate Text" />
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty" id="services">

        <div class=" content pt-0">
            <h2 class="text-center pt-10">Services We Offer</h2>
            <p class=" px-20 paragraph lh-custom fs-16">Allco offers a comprehensive range of construction services to cater
                to diverse project requirements. Whether you need residential, commercial, or industrial construction,
                restoration, and/or a complete overhaul, we have the expertise to handle projects of any scale or
                complexity. Our services include:</p>


            <div class="container-new">
                <div class="block">
                    <div class="overlay"></div>
                    <div class="block--text">
                        <div class="text--head">General Contracting</div>
                        <div class="text--quote">We oversee the entire construction process, from site preparation to the
                            final touches, ensuring seamless coordination and timely project completion.</div>
                        <div class="text--person">
                            {{-- <a href="#" class="text--person">Read more</a> --}}
                        </div>
                    </div>
                </div>

                <div class="block">
                    <div class="overlay"></div>
                    <div class="block--text">
                        <div class="text--head">Design-Build</div>
                        <div class="text--quote">By combining the design and construction phases, we streamline the process,
                            minimize risks, and optimize efficiency, delivering projects that exceed expectations.</div>
                        <div class="text--person">
                            {{-- <a href="#" class="text--person">Read more</a> --}}
                        </div>
                    </div>
                </div>

                <div class="block">
                    <div class="overlay"></div>
                    <div class="block--text">
                        <div class="text--head">Construction Management</div>
                        <div class="text--quote">Our dedicated project managers work closely with you to oversee every
                            aspect of your project, from budgeting and scheduling to quality control and subcontractor
                            coordination.</div>
                        <div class="text--person">
                            {{-- <a href="#" class="text--person">Read more</a> --}}
                        </div>
                    </div>
                </div>

                <div class="block">
                    <div class="overlay"></div>
                    <div class="block--text">
                        <div class="text--head">Renovations and Remodeling</div>
                        <div class="text--quote">Whether you're looking to revitalize an existing space or transform it
                            completely, our team brings innovation, creativity, and attention to detail to every renovation
                            or remodeling project.</div>
                        <div class="text--person">
                            {{-- <a href="#" class="text--person">Read more</a> --}}
                        </div>
                    </div>
                </div>

                <div class="block">
                    <div class="overlay"></div>
                    <div class="block--text">
                        <div class="text--head">Green Building Solutions</div>
                        <div class="text--quote">As advocates for sustainable construction practices, we offer eco-friendly
                            options, incorporating energy-efficient materials and technologies into our projects to minimize
                            environmental impact.</div>
                        <div class="text--person">
                            {{-- <a href="#" class="text--person">Read more</a> --}}
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="row proporzional-row proporzional-row-sm pt-10">

            <div class="col-md-4 boxed white card-cust ">
                <h2 class="text-color">General Contracting</h2>
                <p class="mt-5">We oversee the entire construction process, from site preparation to the final touches, ensuring seamless coordination and timely project completion.</p>
                <a href="#" class="btn-text text-color">Read more</a>
            </div>
            <div class="col-md-4 mt-767">
                <a class="img-box lightbox" data-lightbox-anima="fade-top" href="../images/gallery/image-8.jpg">
                    <img src="frontend/images/gallery/image-8.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 boxed white card-cust mt-767">
                <h2 class="text-color">Design-Build</h2>
              <p class="mt-5">By combining the design and construction phases, we streamline the process, minimize risks, and optimize efficiency, delivering projects that exceed expectations.</p>
                <a href="#" class="btn-text text-color">Read more</a>
            </div>
        </div>
        <hr class="space l" />
        <div class="row proporzional-row proporzional-row-sm">

            <div class="col-md-4 boxed white card-cust mt-767">
                <h2 class="text-color">Construction Management</h2>
                <p class="mt-5">Our dedicated project managers work closely with you to oversee every aspect of your project, from budgeting and scheduling to quality control and subcontractor coordination.</p>
                <a href="#" class="btn-text text-color">Read more</a>
            </div>
            <div class="col-md-4 boxed white card-cust mt-767">
                <h2 class="text-color">Renovations and Remodeling</h2>
                <p class="mt-5">Whether you're looking to revitalize an existing space or transform it completely, our team brings innovation, creativity, and attention to detail to every renovation or remodeling project.</p>
                <a href="#" class="btn-text text-color">Read more</a>
            </div>
            <div class="col-md-4 boxed white card-cust mt-767">
                <h2 class="text-color">Green Building Solutions</h2>
               <p class="mt-5">As advocates for sustainable construction practices, we offer eco-friendly options, incorporating energy-efficient materials and technologies into our projects to minimize environmental impact.</p>
                <a href="#" class="btn-text text-color">Read more</a>
            </div>
        </div> --}}
        </div>
    </div>


    <div class="section-empty bg-white">

        <div class="container content">
            <h2 class="text-center">Quality Assurance </h2>
            <p class="paragraph lh-custom fs-16">Quality, safety, and client satisfaction are the cornerstones of our
                business. We are committed to delivering projects of the highest standards, employing the industry’s best
                practices, and adhering to strict safety regulations. Our commitment extends beyond project completion, as
                we offer comprehensive post-construction services and ongoing maintenance to ensure the longevity and
                functionality of your investment.</p>

        </div>
    </div>
    {{-- <div class="section-empty ">

    <div class="container content">

       <h2 class="text-center ">WHY ALLCO?</h2>
        <div class="row proporzional-row proporzional-row-sm pt-10">

            <div class="col-md-4 px-0" >


                <div class='newsCard news-Slide-up'>
                    <img src="frontend/images/gallery/image-7.jpg" / class="custom-image">
                    <div class='newsCaption'>
                      <h2 class='newsCaption-title text-capitalize'>Experience</h2>

                      <p class='newsCaption-content fs-16 lh-custom font-sm'>With years of experience in the construction industry, we possess the knowledge and expertise to handle projects of all sizes and complexities.</p>
                      <p><a class='newsCaption-link fs-14' href='#'>Read More</a>  </p>
                    </div>
                  </div>
            </div>

            <div class="col-md-4  mt-767 px-0">


                <div class='newsCard news-Slide-up'>
                    <img class="max-height-405" src="frontend/images/gallery/twomen.jpg" / >
                    <div class='newsCaption'>
                      <h2 class='newsCaption-title text-white text-capitalize'>Quality Craftsmanship</h2>

                      <p class='newsCaption-content  lh-custom fs-16 font-sm'>We take immense pride in our workmanship, ensuring attention to detail, superior craftsmanship, and a commitment to using the best materials available.</p>
                      <p><a class='newsCaption-link fs-14' href='#'>Read More</a>  </p>
                    </div>
                  </div>
            </div>

        </div>

        <div class="row proporzional-row proporzional-row-sm">

            <div class="col-md-4 mt-767 px-0">





            <div class='newsCard news-Slide-up'>
                <img src="frontend/images/gallery/image-22.jpg" />
                <div class='newsCaption'>
                  <h2 class='newsCaption-title text-capitalize'>Customer Focus</h2>

                  <p class='newsCaption-content lh-custom fs-16 font-sm'>Our clients are at the heart of everything we do and their satisfaction is our top priority. We listen attentively to their needs, provide regular project updates, and remain responsive to their concerns throughout the construction process. Striving to exceed expectations, we value long-term relationships and are dedicated to delivering projects that bring our client’s visions to life.</p>
                  <p><a class='newsCaption-link fs-14' href='#'>Read More</a>  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4  mt-767 px-0">
                {{-- <h2 class="text-color">Innovation is the revolution</h2>
               <p class="mt-5">We embrace innovation and continuously seek new solutions, technologies, and approaches to construction. By staying at the forefront of industry advancements, we bring fresh ideas and creative thinking to every project, ensuring optimal results and client satisfaction.</p>
               <p class="mt-5">For us, every project is an opportunity to build something remarkable!</p>
                <a href="#" class="btn-text text-color">Read more</a> --}}
    {{-- <div class='newsCard news-Slide-up'>
                    <img src="frontend/images/gallery/image-10.jpg" />
                    <div class='newsCaption'>
                      <h2 class='newsCaption-title text-capitalize' >Innovation is the revolution</h2>
                      <p class='newsCaption-content  lh-custom fs-16 font-sm'>
                        We embrace innovation and continuously seek new solutions, technologies, and approaches to construction. By staying at the forefront of industry advancements, we bring fresh ideas and creative thinking to every project, ensuring optimal results and client satisfaction.
                      </p>
                      <p class='newsCaption-content  lh-custom fs-16 font-sm'>For us, every project is an opportunity to build something remarkable!</p>
                      <p><a class='newsCaption-link fs-14' href='#'>Read More</a>  </p>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row proporzional-row proporzional-row-sm">
            <div class="col-md-4 mt-767 px-0" >
                <div class='newsCard news-Slide-up'>
                    <img class="max-height-405" src="frontend/images/gallery/image-30.jpg" />
                    <div class='newsCaption'>
                      <h2 class='newsCaption-title text-capitalize'>Integrity and Transparency</h2>

                      <p class='newsCaption-content  lh-custom fs-16 font-sm'>We operate with the utmost integrity, maintaining transparency in our practices, budgeting, and scheduling, so you can trust us to deliver on our promises.</p>
                      <p><a class='newsCaption-link fs-14' href='#'>Read More</a>  </p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
 --}}
    {{-- <div class="section-empty  " style="background-image: url('frontend/images/gallery/allco-bg.png')"> --}}
    <div class="section-empty" id="allco">
        <div class="container content">

            <h2 class="text-center ">Why Allco ?</h2>

            <div class="row proporzional-row proporzional-row-sm pt-10 d-block">

                <div class="col-lg-4 col-md-6 px-0">

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
                <div class="col-lg-4 col-md-6  mt-767 px-0">
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
                <div class="col-lg-4 col-md-6  mt-767 px-0 d-xl-block d-none">
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
            <div class="row proporzional-row proporzional-row-sm  d-block ">
                <div class="col-lg-4 col-md-6 px-0">
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


                    <div class=' news-Slide-up w-320 mt-767-0'>
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
                <div class="col-lg-4 col-md-6  mt-767 px-0 d-xl-none ">
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
                <div class="col-lg-4 col-md-6  mt-767 px-0 mt-innovation" id="csr">

                    <div class=' news-Slide-up w-320'>
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
    <div class="section-empty bg-white">
        <div class="container content">
            <h2 class="text-center my-5">CSR @Allco</h2>
            <div class="row  t">
                <div class="pt-10 px-10">
                    <p class=" paragraph lh-custom fs-16">At Allco, we understand that our success as a construction
                        company goes hand in hand with our responsibility towards society and the environment. We are
                        committed to making a positive impact on the communities we serve, promoting sustainable practices,
                        and actively contributing to the betterment of society. By emphasizing the usage of green building
                        solutions, we aim to contribute to a cleaner, greener future.</p>
                    <p class="paragraph lh-custom fs-16">We embrace the joy of giving back to society and making a
                        meaningful difference. Through our philanthropic endeavors, we support charitable organizations and
                        initiatives that align with our values. We encourage our employees to actively participate in
                        volunteer activities, enabling them to contribute their time, skills, and resources toward
                        addressing social challenges and creating positive change.</p>
                    <p class="paragraph lh-custom fs-16">Our Corporate Social Responsibility (CSR) initiatives are rooted
                        in our core values, and we believe that we won’t just build structures together. But a better world!
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
