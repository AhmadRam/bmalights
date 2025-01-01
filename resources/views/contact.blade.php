@extends('layout')

@section('page_title')
    Contact
@endsection

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background">
            <div class="container position-relative">
                <h1>Contact</h1>
                {{-- <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam
                    molestias.</p> --}}
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li class="current">Contact</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-lg-6 ">
                        <div class="row gy-4">

                            <div class="col-lg-12">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                    data-aos="fade-up" data-aos-delay="200">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>UAE, Dubai</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <a href="whatsapp://send?phone=+971504088220">
                                    <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                        data-aos="fade-up" data-aos-delay="300">
                                        <i class="bi bi-telephone"></i>
                                        <h3>Call Us</h3>
                                        <p style="color: #1e4356"> +971 50 40 88 22 0</p>
                                    </div>
                                </a>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <a href="mailto:mhmd@ips-me.ae">
                                    <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                        data-aos="fade-up" data-aos-delay="400">
                                        <i class="bi bi-envelope"></i>
                                        <h3>Email Us</h3>
                                        <p style="color: #1e4356">mhmd@ips-me.ae</p>
                                    </div>
                                </a>
                            </div><!-- End Info Item -->

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <form action="/send_email" method="post" class="php-email-form" data-aos="fade-up"
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

                                <div class="col-md-12 text-center mb-3">
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

            <div class="mt-5" data-aos="fade-up" data-aos-delay="200">
                <iframe style="border:0; width: 100%; height: 370px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462563.0328120352!2d55.557158607003934!3d25.075658370297962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2z2K_YqNmKIC0g2KfZhNil2YXYp9ix2KfYqiDYp9mE2LnYsdio2YrYqSDYp9mE2YXYqtit2K_YqQ!5e0!3m2!1sar!2str!4v1724077487994!5m2!1sar!2str"
                    frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

        </section><!-- /Contact Section -->

    </main>
@endsection
