<?= $this->extend("layouts/base"); ?>
<!-- NOTE This keeps this page in the "content" placeholder in the layouts/base.php file  -->
<?= $this->section("content"); ?>
<!DOCTYPE html>
<html lang="en">
<?= $this->include("widgets/head") ?>
<body>
<?= $this->include("widgets/topbar") ?>
<section class="hero-wrap"
         style="background-image:url('<?= base_url(); ?>/public/images/bg_0.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center text-center">
            <div class="col-lg-9">
                <div class="text" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <h1 class="mb-5">We are the <span>best</span> at what we do</h1>
                    <p><a href="tel:233203104031" class="btn btn-primary p-4 py-3">Contact us <span
                                    class="fa fa-phone"></span></a> <a
                                href="#request-quote"
                                class="btn btn-darken p-4 py-3">Request
                            A Quote <span class="fa fa-paper-plane"></span></a></p>
                </div>
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
                     style="background-image:url('<?= base_url(); ?>/public/images/staff/sn_staff-3.jpg')">
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
                    <span class="subheading">Let Alpha Grey Sort You Out</span>
                    <h2 class="mb-2">Quality and Affordable Services</h2>
                    <p class="mb-4">With our extensive list of international as well as domestic contacts, we provide
                        our
                        customers with the very best value available in the construction and civil engineering
                        industry today.
                        We seek to promote maximum profitability to our clients by supplying the best quarry
                        products for construction and haulage services.</p>
                    <h4>We Can Help You</h4>
                    <div class="row mt-1 g-lg-2">
                        <div class="col-lg-6 d-flex align-items-stretch services-wrap">
                            <div class="services d-flex">
                                <div class="icon"><span class="flaticon-accounting"></span></div>
                                <div class="text">
                                    <h2>Equipment Sale and Rental</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch services-wrap">
                            <div class="services d-flex">
                                <div class="icon"><span class="material-icons">front_loader</span></div>
                                <div class="text">
                                    <h2>Mineral Prospecting and Mining Support Services</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch services-wrap">
                            <div class="services d-flex">
                                <div class="icon"><span class="flaticon-consult"></span></div>
                                <div class="text">
                                    <h2>Consultancy Services</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch services-wrap">
                            <div class="services d-flex">
                                <div class="icon"><span class="flaticon-construction"></span></div>
                                <div class="text">
                                    <h2>Parts and Maintenance for heavy duty machinery</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch services-wrap">
                            <div class="services d-flex">
                                <div class="icon"><span class="fa fa-handshake-o"></span></div>
                                <div class="text">
                                    <h2>Partnerships</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-stretch services-wrap">
                            <div class="services d-flex">
                                <div class="icon"><span class="flaticon-project"></span></div>
                                <div class="text">
                                    <h2>Geological, Geochemical and Geophysical Survey</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-intro img"
         style="background-image:url('<?= base_url(); ?>/public/images/bg_2.jpg')">
    <div class="overlay"></div>
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-10 col-xl-10">
                <div class="row">
                    <div class="col-md-8 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100"
                         data-aos-duration="1000">
                        <div>
                            <span class="subheading">You May Contact Us For Construction &amp; Renovation Work</span>
                            <h1 class="mb-md-0 mb-4">We Are a Great Construction Company</h1>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center" data-aos="fade-up" data-aos-delay="100"
                         data-aos-duration="1000">
                        <p class="mb-0"><a href="#appointment"
                                           class="btn btn-primary py-md-4 py-3 px-md-5 px-4">Make An
                                Appointment</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-7 text-center heading-section" data-aos="fade-up">
                <span class="subheading">Team &amp; Staff</span>
                <h2 class="mb-5">Qualified Engineers</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <div class="staff">
                    <div class="img"
                         style="background-image:url('<?= base_url(); ?>/public/images/staff/sn_staff-3.jpg')">
                        <?php /*<ul class="ftco-social">
                            <li><a href="#"><span class="fa fa-twitter"></span></a>
                            </li>
                            <li><a href="#"><span class="fa fa-facebook"></span></a>
                            </li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a>
                            </li>
                            <li><a href="#"><span
                                            class="fa fa-google-plus"></span></a></li>
                        </ul>*/ ?>
                    </div>
                    <?php /*<div class="text">
                        <h3><a href="#">Lionel Wurtchbach</a></h3>
                        <span>Senior Engineer</span>
                    </div>*/ ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <div class="staff">
                    <div class="img"
                         style="background-image:url('<?= base_url(); ?>/public/images/staff/sn_staff-2.jpg')">
                        <?php /*<ul class="ftco-social">
                            <li><a href="#"><span class="fa fa-twitter"></span></a>
                            </li>
                            <li><a href="#"><span class="fa fa-facebook"></span></a>
                            </li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a>
                            </li>
                            <li><a href="#"><span
                                            class="fa fa-google-plus"></span></a></li>
                        </ul>*/ ?>
                    </div>
                    <?php /*<div class="text">
                        <h3><a href="#">Lionel Wurtchbach</a></h3>
                        <span>Senior Engineer</span>
                    </div>*/ ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <div class="staff">
                    <div class="img"
                         style="background-image:url('<?= base_url(); ?>/public/images/staff/sn_staff-1.jpg')">
                        <?php /*<ul class="ftco-social">
                            <li><a href="#"><span class="fa fa-twitter"></span></a>
                            </li>
                            <li><a href="#"><span class="fa fa-facebook"></span></a>
                            </li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a>
                            </li>
                            <li><a href="#"><span
                                            class="fa fa-google-plus"></span></a></li>
                        </ul>*/ ?>
                    </div>
                    <?php /*<div class="text">
                        <h3><a href="#">Lionel Wurtchbach</a></h3>
                        <span>Senior Engineer</span>
                    </div>*/ ?>
                </div>
            </div>
            <?php /*<div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="staff">
                    <div class="img"
                         style="background-image:url('<?= base_url(); ?>/public/images/xstaff-2.jpg.pagespeed.ic.YkGciHPkso.jpg')">
                        <ul class="ftco-social">
                            <li><a href="#"><span class="fa fa-twitter"></span></a>
                            </li>
                            <li><a href="#"><span class="fa fa-facebook"></span></a>
                            </li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a>
                            </li>
                            <li><a href="#"><span
                                            class="fa fa-google-plus"></span></a></li>
                        </ul>
                    </div>
                    <div class="text">
                        <h3><a href="#">Mike Nintido</a></h3>
                        <span>Senior Engineer</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <div class="staff">
                    <div class="img"
                         style="background-image:url('<?= base_url(); ?>/public/images/xstaff-3.jpg.pagespeed.ic.HfIwwpA189.jpg')">
                        <ul class="ftco-social">
                            <li><a href="#"><span class="fa fa-twitter"></span></a>
                            </li>
                            <li><a href="#"><span class="fa fa-facebook"></span></a>
                            </li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a>
                            </li>
                            <li><a href="#"><span
                                            class="fa fa-google-plus"></span></a></li>
                        </ul>
                    </div>
                    <div class="text">
                        <h3><a href="#">Bea Alam</a></h3>
                        <span>Senior Engineer</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                <div class="staff">
                    <div class="img"
                         style="background-image:url('<?= base_url(); ?>/public/images/xstaff-4.jpg.pagespeed.ic.5V7Rtt9rke.jpg')">
                        <ul class="ftco-social">
                            <li><a href="#"><span class="fa fa-twitter"></span></a>
                            </li>
                            <li><a href="#"><span class="fa fa-facebook"></span></a>
                            </li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a>
                            </li>
                            <li><a href="#"><span
                                            class="fa fa-google-plus"></span></a></li>
                        </ul>
                    </div>
                    <div class="text">
                        <h3><a href="#">John Buffer</a></h3>
                        <span>Senior Engineer</span>
                    </div>
                </div>
            </div> */?>
        </div>
    </div>
</section>
<?php
/*
<section class="ftco-gallery ftco-section">
    <div class="container-xl-fluid">
        <div class="row justify-content-center pb-4">
            <div class="col-md-7 text-center heading-section" data-aos="fade-up">
                <span class="subheading">Portfolio</span>
                <h2 class="mb-5">Projects</h2>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <div class="gallery-wrap img d-flex align-items-end justify-content-center"
                     style="background-image:url('<?=base_url();?>/public/images/xwork-1.jpg.pagespeed.ic.V1mj3Ww27y.jpg')">
                    <a href="<?=base_url();?>/public/images/work-1.jpg"
                       class="icon d-flex align-items-center justify-content-center glightbox"><span
                                class="fa fa-search"></span></a>
                    <div class="desc w-100 px-4">
                        <span>Building</span>
                        <h2><a href="#">High Tower Works</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="gallery-wrap img d-flex align-items-end justify-content-center"
                     style="background-image:url('<?=base_url();?>/public/images/xwork-2.jpg.pagespeed.ic.dr76cxYQC7.jpg')">
                    <a href="<?=base_url();?>/public/images/work-2.jpg"
                       class="icon d-flex align-items-center justify-content-center glightbox"><span
                                class="fa fa-search"></span></a>
                    <div class="desc w-100 px-4">
                        <span>Building</span>
                        <h2><a href="#">High Tower Works</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <div class="gallery-wrap img d-flex align-items-end justify-content-center"
                     style="background-image:url('<?=base_url();?>/public/images/xwork-3.jpg.pagespeed.ic.b19mKwqJwd.jpg')">
                    <a href="<?=base_url();?>/public/images/work-3.jpg"
                       class="icon d-flex align-items-center justify-content-center glightbox"><span
                                class="fa fa-search"></span></a>
                    <div class="desc w-100 px-4">
                        <span>Building</span>
                        <h2><a href="#">High Tower Works</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <div class="gallery-wrap img d-flex align-items-end justify-content-center"
                     style="background-image:url('<?=base_url();?>/public/images/xwork-4.jpg.pagespeed.ic.33T86iu_Ld.jpg')">
                    <a href="<?=base_url();?>/public/images/work-4.jpg"
                       class="icon d-flex align-items-center justify-content-center glightbox"><span
                                class="fa fa-search"></span></a>
                    <div class="desc w-100 px-4">
                        <span>Building</span>
                        <h2><a href="#">High Tower Works</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="gallery-wrap img d-flex align-items-end justify-content-center"
                     style="background-image:url('<?=base_url();?>/public/images/xwork-5.jpg.pagespeed.ic.KPmQn3G91i.jpg')">
                    <a href="<?=base_url();?>/public/images/work-5.jpg"
                       class="icon d-flex align-items-center justify-content-center glightbox"><span
                                class="fa fa-search"></span></a>
                    <div class="desc w-100 px-4">
                        <span>Building</span>
                        <h2><a href="#">High Tower Works</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <div class="gallery-wrap img d-flex align-items-end justify-content-center"
                     style="background-image:url('<?=base_url();?>/public/images/xwork-6.jpg.pagespeed.ic.LuZY1UWClv.jpg')">
                    <a href="<?=base_url();?>/public/images/work-6.jpg"
                       class="icon d-flex align-items-center justify-content-center glightbox"><span
                                class="fa fa-search"></span></a>
                    <div class="desc w-100 px-4">
                        <span>Building</span>
                        <h2><a href="#">High Tower Works</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 */ ?>

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
                                         style="background-image:url('<?= base_url(); ?>/public/images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg')">
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
                                         style="background-image:url('<?= base_url(); ?>/public/images/xperson_2.jpg.pagespeed.ic.yyrmjBH91b.jpg')">
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
                                         style="background-image:url('<?= base_url(); ?>/public/images/person_3.jpg')">
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
                                         style="background-image:url('<?= base_url(); ?>/public/images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg')">
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
                                         style="background-image:url('<?= base_url(); ?>/public/images/xperson_2.jpg.pagespeed.ic.yyrmjBH91b.jpg')">
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
 */?>

<?php
/*
<section class="ftco-section bg-light ftco-no-pt">
    <div class="container-xl">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center" data-aos="fade-up" data-aos-duration="1000">
                <span class="subheading">Our Blog</span>
                <h2>Recent Blog</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                     data-aos-delay="100">
                    <a href="<?= base_url() ?>/public/blog-single.html" class="block-20 img d-flex align-items-end"
                       style="background-image:url('<?=base_url();?>/public/images/ximage_1.jpg.pagespeed.ic.YtsUmYkaJM.jpg')">
                        <div class="meta-date mb-0 ms-4">
                            <span>16</span>
                            <small>Jan</small>
                        </div>
                    </a>
                    <div class="text">
                        <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><a
                                        href="#"><i
                                            class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                        <h3 class="heading mb-3"><a href="#">Biggest Construction in
                                New York, USA</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                     data-aos-delay="100">
                    <a href="<?= base_url() ?>/public/blog-single.html" class="block-20 img d-flex align-items-end"
                       style="background-image:url('<?=base_url();?>/public/images/ximage_2.jpg.pagespeed.ic.e3uHj3bivR.jpg')">
                        <div class="meta-date mb-0 ms-4">
                            <span>16</span>
                            <small>Jan</small>
                        </div>
                    </a>
                    <div class="text">
                        <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><a
                                        href="#"><i
                                            class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                        <h3 class="heading mb-3"><a href="#">Biggest Construction in
                                New York, USA</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex">
                <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000"
                     data-aos-delay="100">
                    <a href="<?= base_url() ?>/public/blog-single.html" class="block-20 img d-flex align-items-end"
                       style="background-image:url('<?=base_url();?>/public/images/ximage_3.jpg.pagespeed.ic.QuyaTgE2aC.jpg')">
                        <div class="meta-date mb-0 ms-4">
                            <span>16</span>
                            <small>Jan</small>
                        </div>
                    </a>
                    <div class="text">
                        <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><a
                                        href="#"><i
                                            class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                        <h3 class="heading mb-3"><a href="#">Biggest Construction in
                                New York, USA</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
*/ ?>
<section id="request-quote" class="ftco-appointment img" required
         style="background-image:url('<?= base_url(); ?>/public/images/xbg_2.jpg.pagespeed.ic.7sptddicsi.jpg')">
    <div class="overlay"></div>
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center order-lg-last ps-lg-5 py-5" data-aos="fade-up"
                 data-aos-delay="100">
                <div class="heading-section">
                    <span class="subheading">Frequently Ask Question</span>
                    <h2 class="mb-3">You Want To Ask Something From Us?</h2>
                    <p>
                        You can request for a quote or <a href="<?=base_url()?>/contact">contact us</a>
                    </p>
                    <?php
                    /*
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                            What are the problems in construction?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                         aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is hidden by
                                            default, until the collapse plugin adds the appropriate classes that we use
                                            to style each element. It's also worth noting that just about any HTML can
                                            go within the <code>.accordion-body</code>, though the transition does limit
                                            overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                            What is best practice in construction?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                         aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            It is hidden by default, until the collapse plugin adds the appropriate
                                            classes that we use to style each element. It's also worth noting that just
                                            about any HTML can go within the <code>.accordion-body</code>, though the
                                            transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                            What is best practice in construction?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                         aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            It is hidden by default, until the collapse plugin adds the appropriate
                                            classes that we use to style each element. It's also worth noting that just
                                            about any HTML can go within the <code>.accordion-body</code>, though the
                                            transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> */
                    ?>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <form id="quoteForm" action="#" class="appointment aside-stretch">
                    <span class="subheading">Drop A Message</span>
                    <h2 class="mb-4 appointment-head">Request A Quote</h2>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="form-group">
                                <label for="name">Your Full Name</label>
                                <input type="text" data-label="Full Name" name="fullname" required class="form-control" placeholder="Your Full Name">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="text" data-label="Email Address" name="email" required class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" data-label="Subject" name="subject" required class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea name="message" required id="" cols="30" rows="7" class="form-control"
                                          placeholder="Message"></textarea>
                            </div>
                        </div>

                        <div id="quoteSuccess" style="display: none" class="col-md-12">
                            <div class="form-group btn color-green">
                                Sent Successfully!
                            </div>
                        </div>

                        <div id="quoteError" style="display: none" class="col-md-12">
                            <div class="form-group btn color-red">
                                An error occurred! Try again or contact us here ->
                                <a style="text-decoration: none" href="mailto:info@alphagreyinvestments.com">
                                    <i class="fa fa-paper-plane"></i> email
                                </a> /
                                <a style="text-decoration: none" href="tel:233203104031">
                                    <i class="fa fa-phone"></i> phone
                                </a>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <input id="quoteSubmit" type="button" value="Send message" class="btn btn-primary py-3 px-4 rounded">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="appointment" class="ftco-appointment img"
         style="background-image:url('<?= base_url(); ?>/public/images/xbg_2.jpg.pagespeed.ic.7sptddicsi.jpg')">
    <div class="overlay"></div>
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <form id="appointmentForm" action="#" class="appointment aside-stretch">
                    <span class="subheading">Book An Appointment</span>
                    <h2 class="mb-4 appointment-head">Enter your details</h2>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="form-group">
                                <label for="name">Your Full Name</label>
                                <input type="text" data-label="Full Name" name="fullname" required class="form-control" placeholder="Your Full Name">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" data-label="Email Address" name="email" required class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="form-group">
                                <label for="subject">Phone Number</label>
                                <input type="text" required class="form-control"
                                       data-label="Phone Number" name="phone" placeholder="eg: +233596046334">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="form-group">
                                <label for="subject">Preferred Date</label>
                                <input type="date" required class="form-control"
                                     data-label="Preferred Date" name="date" placeholder="choose your preferred date">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input data-label="Subject" type="text" name="subject" required class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea name="message" required id="" cols="30" rows="7" class="form-control"
                                          placeholder="Message"></textarea>
                            </div>
                        </div>

                        <div id="appointmentSuccess" style="display: none" class="col-md-12">
                            <div class="form-group btn color-green">
                                Sent Successfully!
                            </div>
                        </div>

                        <div id="appointmentError" style="display: none" class="col-md-12">
                            <div class="form-group btn color-red">
                                An error occurred! Try again or contact us here ->
                                <a style="text-decoration: none" href="mailto:info@alphagreyinvestments.com">
                                    <i class="fa fa-paper-plane"></i> email
                                </a> /
                                <a style="text-decoration: none" href="tel:233203104031">
                                    <i class="fa fa-phone"></i> phone
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input id="appointmentSubmit" type="button" value="Send message" class="btn btn-primary py-3 px-4 rounded">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 d-flex align-items-center order-lg-last ps-lg-5 py-5" data-aos="fade-up"
                 data-aos-delay="100">
                <div class="heading-section">
                    <span class="subheading">Book An Appointment</span>
                    <h2 class="mb-3">Come Let's Have A Discussion</h2>
                    <p>
                        Our doors are open to you. Just Book an appointment, and we will
                        schedule a meeting with you.
                    </p>
                   <?php /* <!--                    <div class="row">-->
                    <!--                        <div class="col-md-12">-->
                    <!--                            <div class="accordion" id="accordionExample">-->
                    <!--                                <div class="accordion-item">-->
                    <!--                                    <h2 class="accordion-header" id="headingOne">-->
                    <!--                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"-->
                    <!--                                                data-bs-target="#collapseOne" aria-expanded="true"-->
                    <!--                                                aria-controls="collapseOne">-->
                    <!--                                            What are the problems in construction?-->
                    <!--                                        </button>-->
                    <!--                                    </h2>-->
                    <!--                                    <div id="collapseOne" class="accordion-collapse collapse show"-->
                    <!--                                         aria-labelledby="headingOne" data-bs-parent="#accordionExample">-->
                    <!--                                        <div class="accordion-body">-->
                    <!--                                            <strong>This is the first item's accordion body.</strong> It is hidden by-->
                    <!--                                            default, until the collapse plugin adds the appropriate classes that we use-->
                    <!--                                            to style each element. It's also worth noting that just about any HTML can-->
                    <!--                                            go within the <code>.accordion-body</code>, though the transition does limit-->
                    <!--                                            overflow.-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                                <div class="accordion-item">-->
                    <!--                                    <h2 class="accordion-header" id="headingTwo">-->
                    <!--                                        <button class="accordion-button collapsed" type="button"-->
                    <!--                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"-->
                    <!--                                                aria-expanded="false" aria-controls="collapseTwo">-->
                    <!--                                            What is best practice in construction?-->
                    <!--                                        </button>-->
                    <!--                                    </h2>-->
                    <!--                                    <div id="collapseTwo" class="accordion-collapse collapse"-->
                    <!--                                         aria-labelledby="headingTwo" data-bs-parent="#accordionExample">-->
                    <!--                                        <div class="accordion-body">-->
                    <!--                                            It is hidden by default, until the collapse plugin adds the appropriate-->
                    <!--                                            classes that we use to style each element. It's also worth noting that just-->
                    <!--                                            about any HTML can go within the <code>.accordion-body</code>, though the-->
                    <!--                                            transition does limit overflow.-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                                <div class="accordion-item">-->
                    <!--                                    <h2 class="accordion-header" id="headingThree">-->
                    <!--                                        <button class="accordion-button collapsed" type="button"-->
                    <!--                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"-->
                    <!--                                                aria-expanded="false" aria-controls="collapseThree">-->
                    <!--                                            What is best practice in construction?-->
                    <!--                                        </button>-->
                    <!--                                    </h2>-->
                    <!--                                    <div id="collapseThree" class="accordion-collapse collapse"-->
                    <!--                                         aria-labelledby="headingThree" data-bs-parent="#accordionExample">-->
                    <!--                                        <div class="accordion-body">-->
                    <!--                                            It is hidden by default, until the collapse plugin adds the appropriate-->
                    <!--                                            classes that we use to style each element. It's also worth noting that just-->
                    <!--                                            about any HTML can go within the <code>.accordion-body</code>, though the-->
                    <!--                                            transition does limit overflow.-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    */?>
                </div>
            </div>
        </div>
    </div>
</section>
<?=$this->include("widgets/footer")?>
</body>
</html>
<?= $this->endSection(); ?>
