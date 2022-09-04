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
                                        class="fa fa-chevron-right"></i></a></span> <span>Contact<i
                                    class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Contact</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section contact-section bg-light">
        <div class="container-xl">
            <div class="row d-flex mb-5 contact-info justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h2 class="h3">Contact Information</h2>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <p><span>Address:</span> Unnamed Plot Adjacent Oak Plaza Hotel<br>
                                        East Airport - Accra</p>
                                </div>
                                <div class="col-md-12">
                                    <p><span>Phone:</span> <a href="tel:233203104031">+(233) 20 31 040 31</a></p>
                                </div>
                                <div class="col-md-12">
                                    <p><span>Email:</span>
                                        <a href="mailto:info@alphagreyinvestments.com">
                                            info@alphagreyinvestments.com
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-md-0 block-9">
                <div class="col-md-12 order-md-last d-flex">
                    <form action="#" class="bg-white p-5 contact-form">
                        <div class="form-group">
                            <input type="text" required class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                        <textarea required name="" id="" cols="30" rows="7" class="form-control"
                                  placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?= $this->include("widgets/footer") ?>
    </body>
    </html>
<?= $this->endSection(); ?>