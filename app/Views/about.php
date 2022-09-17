<?= $this->extend("layouts/base"); ?>
    <!-- NOTE This keeps this page in the "content" placeholder in the layouts/base.php file  -->
<?= $this->section("content"); ?>
    <!DOCTYPE html>
    <html lang="en">
    <?= $this->include("widgets/head") ?>
    <body>
    <?= $this->include("widgets/topbar") ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url() ?>/public/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 pt-5 text-center">
                    <p class="breadcrumbs"><span class="me-2"><a href="<?= base_url() ?>">Home <i
                                        class="fa fa-chevron-right"></i></a></span> <span>About us <i
                                    class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">About Us</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-about-section">
        <div class="container-xl">
            <div class="row g-xl-5">
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                     data-aos-duration="1000">
                    <div class="img w-100"
                         style="background-image:url('<?= base_url() ?>/public/images/staff/sn_staff-3.jpg')">
                        <div class="counter-wrap d-flex">
                            <div class="icon"><span class="flaticon-engineer"></span></div>
                            <div class="text ps-3">
                                <span class="number"><span class="countup">10</span></span>
                                <span class="caption">Years of experience</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 heading-section d-flex align-items-center" data-aos="fade-up" data-aos-delay="200"
                     data-aos-duration="1000">
                    <div class="mt-5 mt-md-0">
                        <span class="subheading">Welcome to Alpha Grey</span>
                        <h2 class="mb-2">About Us</h2>
                        <p class="mb-4">
                            Alpha Grey Investments Ltd. is a company duly registered with the Registrar-General’s
                            Department under the companies Act, 1963 (Act 179) in Ghana permitted to engage in
                            Building and Construction, Real Estate Development, Civil Engineering works, sale of
                            heavy earth-moving machinery and parts for mining and construction.
                        </p>
                        <h4>We are committed to delivering the best services</h4>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-intro img" style="background-image:url('<?= base_url() ?>/public/images/bg_2.jpg')">
        <div class="overlay"></div>
        <div class="container-xl">
            <div class="row">
                <div class="col-lg-10 col-xl-10">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100"
                             data-aos-duration="1000">
                            <div>
                                <span class="subheading">You May Contact Us For Construction, Mining &amp; Renovation Work</span>
                                <h1 class="mb-md-0 mb-4">We Are a Great Engineering Company</h1>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100"
                             data-aos-duration="1000">
                            <p class="mb-0"><a href="<?= base_url() ?>/#appointment"
                                               class="btn btn-primary py-md-4 py-3 px-md-5 px-4">Make
                                    An Appointment</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-services-section">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-12">
                    <div class="services d-flex">
                        <div class="text">
                            <h2>Vision</h2>
                            <p class="mb-4">
                                To be the leading building and construction firm in Sub-Saharan Africa.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="services d-flex">
                        <div class="text">
                            <h2>Mission</h2>
                            <p class="mb-4">
                                To be able to meet all our customers’ mining and construction needs.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="d-flex">
                        <div class="text">
                            <h2>Values and Promises</h2>
                            <p class="mb-4">
                                We continually build an organisational culture that respects and values the strengths,
                                weaknesses, diversity and cultural differences of the communities and entities we deal
                                with.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="services d-flex">
                        <div class="text">
                            <h2>Core Values</h2>
                            <p class="mb-4">
                                <ul>
                                    <li><strong>Client Oriented</strong> – we align our goals with the goals of our
                                        clients</li>
                                    <li><strong>Quality</strong> – Exceed client expectation whilst delivering as
                                        promised</li>
                                    <li><strong>Safety & Environmentally Friendly</strong> – to conduct projects
                                        prioritizing safety</li>
                                    <li><strong>Reliability</strong> – we consistently perform well and are trustworthy</li>
                                    <li><strong>Integrity</strong> – this is our hallmark, we demonstrate truth,
                                        fairness and honesty in all that we do. Confidentiality is observed at all times.</li>
                                    <li><strong>Social Responsibility</strong> – we invest in our communities and also
                                        build lasting relationships</li>
                                    <li><strong>Sustainability</strong> – All works are conducted without depletion of
                                        Natural resources</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="services d-flex">
                        <div class="text">
                            <h2>Promise</h2>
                            <p class="mb-4">
                                Full client satisfaction
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    /*
    <section class="ftco-section testimony-section bg-light">
        <div class="container-xl">
            <div class="row justify-content-center pb-4">
                <div class="col-md-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-5">Happy Clients</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="carousel-testimony">
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img"
                                             style="background-image:url('<?= base_url() ?>/public/images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg')">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                        class="fa fa-quote-left"></div>
                                        </div>
                                        <div class="ps-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img"
                                             style="background-image:url('<?= base_url() ?>/public/images/xperson_2.jpg.pagespeed.ic.yyrmjBH91b.jpg')">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                        class="fa fa-quote-left"></div>
                                        </div>
                                        <div class="ps-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img"
                                             style="background-image:url('<?= base_url() ?>/public/images/person_3.jpg')">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                        class="fa fa-quote-left"></div>
                                        </div>
                                        <div class="ps-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img"
                                             style="background-image:url('<?= base_url() ?>/public/images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg')">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                        class="fa fa-quote-left"></div>
                                        </div>
                                        <div class="ps-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="text">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="user-img"
                                             style="background-image:url('<?= base_url() ?>/public/images/xperson_2.jpg.pagespeed.ic.yyrmjBH91b.jpg')">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                        class="fa fa-quote-left"></div>
                                        </div>
                                        <div class="ps-3 tx">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                    <p class="mb-4 msg">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 */
    ?>
    <?= $this->include("widgets/footer") ?>
    </body>
    </html>
<?= $this->endSection(); ?>