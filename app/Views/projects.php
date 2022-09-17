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
                                        class="fa fa-chevron-right"></i></a></span> <span>Projects<i
                                    class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Projects</h1>
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
                            <h2>LANDFILL TECHNOLOGIES</h2>
                            <p class="mb-4">
                                Kpone Landfill, off Tema – Aflao Highway
                                Greater Accra Region – Ghana
                                - Landfill Decommissioning & Re-engineering. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="services d-flex">
                        <div class="text">
                            <h2>MODERN INTERNATIONAL DEVELOPERS/CONST. AMBASSADORS</h2>
                            <p class="mb-4">
                                Behind Mallam Market, Accra
                                - Landfill Decommissioning, Waste Transfer Plant
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="services d-flex">
                        <div class="text">
                            <h2>SUNDA GH. LTD</h2>
                            <p class="mb-4">
                                Jamestown Fishing Harbor Project
                                - Sea Defense and Port Expansion
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="services d-flex">
                        <div class="text">
                            <h2>AYENSU STARCH FACTORY</h2>
                            <p class="mb-4">
                                Bawjuase, Central Region
                                - Rental of Heavy Duty Machinery for over 1 year
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="services d-flex">
                        <div class="text">
                            <h2>JOALKU (JELCEM) CONCRETE PRODUCTS </h2>
                            <p class="mb-4">
                                Batching Plant
                                Rasta Road, Teshie – Accra
                                - Supply of quarry material for concrete works
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="services d-flex">
                        <div class="text">
                            <h2>SONITRA LTD</h2>
                            <p class="mb-4">
                                East Legon – Spintex Road Under bridge Project
                                Accra
                                - Supply of quarry materials (granite) for road Project
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?= $this->include("widgets/footer") ?>
    </body>
    </html>
<?= $this->endSection(); ?>