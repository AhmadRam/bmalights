@extends('layout')

@section('page_title')
    BMA Lights
@endsection

@section('content')
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-in">
                        <h1>Illuminating Your World with Innovation</h1>
                        <p>Discover cutting-edge, sustainable lighting solutions designed for beauty, functionality, and
                            efficiency.
                        </p>
                        <div class="d-flex">
                            <a href="#about" class="btn-get-started">Explore More</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
                        <img src="assets/img/light1.jpg" class="img-fluid animated" alt="Lighting Solutions">
                    </div>
                </div>
            </div>

        </section>
        <!-- /Hero Section -->


        <!-- Clients Section -->
        <section id="clients" class="clients section light-background">

            <div class="container">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client-1.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-2.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.jpg" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.jpg" class="img-fluid"
                                alt=""></div>
                    </div>
                </div>

            </div>

        </section><!-- /Clients Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 position-relative order-lg-last" data-aos="fade-up" data-aos-delay="200">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="About BMA Lighting">
                    </div>

                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <h3>About Us</h3>
                        <p>
                            With over a decade of expertise in lighting design and technology, we specialize in creating
                            innovative,
                            energy-efficient, and sustainable lighting solutions. Our commitment to excellence ensures each
                            product
                            meets the highest standards of quality and durability.
                        </p>
                        <ul>
                            <li>
                                <i class="bi bi-diagram-3"></i>
                                <div>
                                    <h5>Innovative Designs</h5>
                                    <p>Combining functionality with minimalist and modern aesthetics, our products elevate
                                        both
                                        residential and commercial spaces.</p>
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-fullscreen-exit"></i>
                                <div>
                                    <h5>Sustainable Solutions</h5>
                                    <p>We focus on environmentally friendly practices, utilizing advanced LED technologies
                                        and recyclable
                                        materials to reduce impact.</p>
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-broadcast"></i>
                                <div>
                                    <h5>Customized Experiences</h5>
                                    <p>Our smart lighting systems allow for personalized adjustments, offering optimal
                                        lighting
                                        experiences tailored to your needs.</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

        </section>
        <!-- /About Section -->


        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Featured Services</h2>
                <p>Providing innovative and sustainable lighting solutions tailored to meet your needs.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-1.jpg" class="img-fluid" alt="Custom Lighting Solutions">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-lightbulb"></i>
                                </div>
                                <a class="stretched-link">
                                    <h3>Custom Lighting Solutions</h3>
                                </a>
                                <p>Tailored designs that seamlessly blend innovation and aesthetics for any space.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-2.jpg" class="img-fluid" alt="Smart Lighting Systems">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-sliders"></i>
                                </div>
                                <a class="stretched-link">
                                    <h3>Smart Lighting Systems</h3>
                                </a>
                                <p>Intelligent solutions with adjustable brightness and color for personalized experiences.
                                </p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-3.jpg" class="img-fluid" alt="Sustainable Lighting Design">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-tree"></i>
                                </div>
                                <a class="stretched-link">
                                    <h3>Sustainable Lighting Design</h3>
                                </a>
                                <p>Environmentally friendly products using energy-efficient LEDs and recyclable materials.
                                </p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-4.jpg" class="img-fluid" alt="Grow Light Solutions">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-leaf"></i>
                                </div>
                                <a class="stretched-link">
                                    <h3>Grow Light Solutions</h3>
                                </a>
                                <p>Customizable lighting systems to support plant growth in greenhouses and indoor farming.
                                </p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-5.jpg" class="img-fluid" alt="Indoor and Outdoor Lighting">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-building"></i>
                                </div>
                                <a class="stretched-link">
                                    <h3>Indoor and Outdoor Lighting</h3>
                                </a>
                                <p>Comprehensive lighting solutions for homes, offices, and outdoor spaces.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
                        <div class="service-item">
                            <div class="img">
                                <img src="assets/img/services-6.jpg" class="img-fluid" alt="Lighting Consultancy">
                            </div>
                            <div class="details position-relative">
                                <div class="icon">
                                    <i class="bi bi-chat-dots"></i>
                                </div>
                                <a class="stretched-link">
                                    <h3>Lighting Consultancy</h3>
                                </a>
                                <p>Expert guidance to optimize lighting layouts and enhance energy efficiency.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section>
        <!-- /Featured Services Section -->


        <!-- Features Section -->
        <section id="features" class="features section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Lighting Solutions</h2>
                <p>Innovative, sustainable, and cutting-edge lighting technologies for diverse applications</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                        <img src="assets/img/features-1.svg" class="img-fluid" alt="Indoor Lighting Solutions">
                    </div>
                    <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                        <h3>Indoor Lighting Expertise</h3>
                        <p class="fst-italic">
                            Comprehensive indoor lighting solutions designed for modern spaces and diverse environments.
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i><span>Downlights, COB lights, and LED panels</span></li>
                            <li><i class="bi bi-check"></i> <span>Adjustable round and square fixtures</span></li>
                            <li><i class="bi bi-check"></i> <span>Minimalist and modern design philosophy</span></li>
                        </ul>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out"
                        data-aos-delay="200">
                        <img src="assets/img/features-2.svg" class="img-fluid" alt="Sustainable Lighting Design">
                    </div>
                    <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                        <h3>Sustainable Lighting Technologies</h3>
                        <p class="fst-italic">
                            Environmentally conscious lighting solutions that blend advanced technology with energy
                            efficiency.
                        </p>
                        <p>
                            Our commitment to sustainability drives us to develop lighting products with recyclable
                            materials,
                            energy-efficient designs, and intelligent systems that minimize environmental impact while
                            maximizing
                            performance.
                        </p>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                        <img src="assets/img/features-1.svg" class="img-fluid" alt="Smart Lighting Solutions">
                    </div>
                    <div class="col-md-7" data-aos="fade-up">
                        <h3>Smart Lighting Systems</h3>
                        <p>Advanced lighting solutions that provide unparalleled customization and control for modern living
                            and
                            working spaces.</p>
                        <ul>
                            <li><i class="bi bi-check"></i> <span>Intelligent dimming capabilities</span></li>
                            <li><i class="bi bi-check"></i><span>Tunable white options for personalized experiences</span>
                            </li>
                            <li><i class="bi bi-check"></i> <span>Cutting-edge LED and SMD technologies</span></li>
                        </ul>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                        <img src="assets/img/features-4.svg" class="img-fluid" alt="Specialized Lighting Applications">
                    </div>
                    <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                        <h3>Specialized Lighting Solutions</h3>
                        <p class="fst-italic">
                            Tailored lighting systems for diverse and unique applications across multiple industries.
                        </p>
                        <p>
                            From outdoor lighting solutions like floodlights and high bay lights to specialized grow lights
                            for
                            agriculture, our team combines over a decade of expertise to deliver innovative,
                            high-performance lighting
                            systems that meet the most demanding requirements.
                        </p>
                    </div>
                </div><!-- Features Item -->

            </div>

        </section><!-- /Features Section -->

        <!-- Services Section -->
        <section id="services" class="services section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Services</h2>
                <p>Comprehensive lighting solutions tailored to meet diverse technological and design needs</p>
            </div>

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item">
                            <div class="icon"><i class="bi bi-building"></i></div>
                            <h3>Custom Lighting Solutions</h3>
                            <p>Tailored lighting systems for indoor, outdoor, and industrial applications. We design precise
                                solutions
                                that address unique environmental and functional requirements across multiple sectors.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item">
                            <div class="icon"><i class="bi bi-tree"></i></div>
                            <h3>Sustainable Design</h3>
                            <p>Environmentally friendly lighting options featuring energy-efficient technologies, recyclable
                                materials, and advanced cooling systems. Our products minimize environmental impact while
                                maximizing
                                performance.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item">
                            <div class="icon"><i class="bi bi-lightbulb"></i></div>
                            <h3>Smart Lighting Systems</h3>
                            <p>Advanced intelligent lighting with programmable dimming, tunable white options, and
                                personalized
                                control. Leveraging LED and SMD technologies to create adaptive, responsive lighting
                                experiences.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item">
                            <div class="icon"><i class="bi bi-globe"></i></div>
                            <h3>Specialized Applications</h3>
                            <p>Innovative solutions for unique environments, including customizable grow lights for
                                agriculture,
                                specialized industrial lighting, and precision-engineered fixtures for greenhouse and
                                commercial
                                settings.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item">
                            <div class="icon"><i class="bi bi-patch-check"></i></div>
                            <h3>Compliance & Certification</h3>
                            <p>Rigorous adherence to IEC international standards and environmental certifications. Our
                                products
                                undergo extensive testing to ensure highest quality, safety, and performance benchmarks.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item">
                            <div class="icon"><i class="bi bi-headset"></i></div>
                            <h3>Technical Support</h3>
                            <p>Comprehensive customer assistance including product selection guidance, technical
                                consultations,
                                after-sales support, and expert advice for custom lighting design and implementation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Services Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Portfolio</h2>
                <p>We connect people and spaces with innovative lighting solutions.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Indoor Lighting</li>
                        <li data-filter=".filter-product">Outdoor Lighting</li>
                        <li data-filter=".filter-branding">Under Cabinet Lighting</li>
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="{{ route('portfolio') }}" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Product 1</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1"
                                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="{{ route('portfolio') }}" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Branding 1</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1"
                                    data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="{{ route('portfolio') }}" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="{{ route('portfolio') }}" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Product 2</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2"
                                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="{{ route('portfolio') }}" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <img src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Branding 2</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2"
                                    data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="{{ route('portfolio') }}" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="{{ route('portfolio') }}" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Product 3</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3"
                                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="{{ route('portfolio') }}" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">
                                <h4>Branding 3</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2"
                                    data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="{{ route('portfolio') }}" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Team Section
                <section id="team" class="team section">


                  <div class="container section-title" data-aos="fade-up">
                    <h2>Team</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                  </div>

                  <div class="container">

                    <div class="row gy-4">

                      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member">
                          <div class="member-img">
                            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                            <div class="social">
                              <a href=""><i class="bi bi-twitter-x"></i></a>
                              <a href=""><i class="bi bi-facebook"></i></a>
                              <a href=""><i class="bi bi-instagram"></i></a>
                              <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                          </div>
                          <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member">
                          <div class="member-img">
                            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                            <div class="social">
                              <a href=""><i class="bi bi-twitter-x"></i></a>
                              <a href=""><i class="bi bi-facebook"></i></a>
                              <a href=""><i class="bi bi-instagram"></i></a>
                              <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                          </div>
                          <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member">
                          <div class="member-img">
                            <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                            <div class="social">
                              <a href=""><i class="bi bi-twitter-x"></i></a>
                              <a href=""><i class="bi bi-facebook"></i></a>
                              <a href=""><i class="bi bi-instagram"></i></a>
                              <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                          </div>
                          <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-member">
                          <div class="member-img">
                            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                            <div class="social">
                              <a href=""><i class="bi bi-twitter-x"></i></a>
                              <a href=""><i class="bi bi-facebook"></i></a>
                              <a href=""><i class="bi bi-instagram"></i></a>
                              <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                          </div>
                          <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                          </div>
                        </div>
                      </div> End Team Member -->

        </div>

        </div>

        </section><!-- /Team Section -->

        <!-- Pricing Section
               <section id="pricing" class="pricing section light-background">


                <div class="container section-title" data-aos="fade-up">
                  <h2>Pricing</h2>
                  <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                </div>

                <div class="container">

                  <div class="row gy-4">

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                      <div class="pricing-item">
                        <h3>Free Plan</h3>
                        <h4><sup>$</sup>0<span> / month</span></h4>
                        <ul>
                          <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                          <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                          <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                          <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                          <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                        </ul>
                        <a href="#" class="buy-btn">Buy Now</a>
                      </div>
                    </div>

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                      <div class="pricing-item featured">
                        <h3>Business Plan</h3>
                        <h4><sup>$</sup>29<span> / month</span></h4>
                        <ul>
                          <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                          <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                          <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                          <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                          <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                        </ul>
                        <a href="#" class="buy-btn">Buy Now</a>
                      </div>
                    </div>

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                      <div class="pricing-item">
                        <h3>Developer Plan</h3>
                        <h4><sup>$</sup>49<span> / month</span></h4>
                        <ul>
                          <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                          <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                          <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                          <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                          <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                        </ul>
                        <a href="#" class="buy-btn">Buy Now</a>
                      </div>
                    </div>

                  </div>

                </div>

              </section> /Pricing Section -->
        <!-- Faq Section -->
        <section id="faq" class="faq section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to common questions about our innovative lighting solutions and technologies</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row faq-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-5 d-flex">
                        <i class="bi bi-question-circle"></i>
                        <h4>What types of lighting solutions do you offer?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            We provide comprehensive lighting solutions including indoor lighting (downlights, COB lights,
                            LED
                            panels), outdoor lighting (floodlights, high bay lights), specialized grow lights for
                            agriculture, and
                            custom solutions for diverse industrial and commercial applications.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-5 d-flex">
                        <i class="bi bi-question-circle"></i>
                        <h4>How long has your company been in the lighting industry?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            We have over a decade of experience in the lighting industry, focusing on innovative and
                            sustainable
                            lighting solutions. Our team combines extensive expertise with cutting-edge technologies to
                            deliver
                            high-performance lighting systems.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-5 d-flex">
                        <i class="bi bi-question-circle"></i>
                        <h4>What makes your lighting solutions sustainable?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            We prioritize sustainability through energy-efficient designs, recyclable materials, advanced
                            cooling
                            systems, and intelligent lighting technologies. Our products are engineered to minimize
                            environmental
                            impact while maximizing performance and longevity.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="col-lg-5 d-flex">
                        <i class="bi bi-question-circle"></i>
                        <h4>Do you offer custom lighting design services?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Yes, we specialize in custom lighting solutions tailored to specific requirements. Our team of
                            innovative
                            designers and technical experts can create personalized lighting systems for indoor, outdoor,
                            and
                            specialized applications like agriculture and industrial settings.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-lg-5 d-flex">
                        <i class="bi bi-question-circle"></i>
                        <h4>What certifications do your products have?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Our products comply with IEC international standards and hold various environmental
                            certifications. We
                            ensure rigorous quality assurance through extensive testing, advanced LED and SMD technologies,
                            and a
                            commitment to product excellence and reliability.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

            </div>

        </section><!-- /Faq Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Get in touch, we're always happy to help</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-lg-6 ">
                        <div class="row gy-4">

                            <div class="col-lg-12">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                    data-aos="fade-up" data-aos-delay="200">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>Defterdar Mah. Otakçılar Cad. Has-On Ticaret Merkezi No:70/A
                                        Eyüp İstanbul / TURKEY</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                    data-aos="fade-up" data-aos-delay="300">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>+90 (212) 613 36 86</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                    data-aos="fade-up" data-aos-delay="400">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>
                                        info@novalux.com.tr</p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="500">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>
@endsection