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
                                        class="fa fa-chevron-right"></i></a></span> <span>Services<i
                                    class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Services</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-services-section">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-12">
                    <div class="services d-flex">
                        <div class="icon"><span class="flaticon-accounting"></span></div>
                        <div class="text">
                            <h2>Equipment Sale and Rental</h2>
                            <p class="mb-4">
                                We have partnered with JH Equipment, a global leader in
                                the sale of Heavy Duty Machinery on consignment basis. One of the major aims of our
                                mining service operations is to assist interested entities with the purchase of mining
                                equipment to run their operations. These usually include Excavators, Trommels (wash
                                plants), Dump trucks, Water pumps etc to mention a few.
                                Our huge fleet of CAT branded equipment ranging from Excavators, Dozers, Dump
                                trucks, Pay loaders, Graders etc. are available to the general public for lease and at
                                very
                                competitive rates. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="services d-flex">
                        <div class="icon"><span class="flaticon-construction"></span></div>
                        <div class="text">
                            <h2>Parts and Maintenance for heavy duty machinery</h2>
                            <p class="mb-4">
                                We offer support through
                                the provision of genuine parts for all equipment. We also have a strong team of
                                engineers who are readily available to service and maintain all your equipment; this
                                will
                                go a long way enable any investor to maximize profits.
                                We also supply durable safety gear (PPE) like Safety boots, Helmets, coveralls, hand
                                gloves etc. to mining and construction companies or whatever the need be.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="services d-flex">
                        <div class="icon"><span class="fa fa-handshake-o"></span></div>
                        <div class="text">
                            <h2>Partnerships</h2>
                            <p class="mb-4">
                                Individuals or cooperate organizations can enter into partnership
                                agreements with Alpha Grey Investments in the exploration, prospecting and mining
                                ventures. We are able to carry out these activities on partnership basis.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="services d-flex">
                        <div class="icon"><span class="material-icons">front_loader</span></div>
                        <div class="text">
                            <h2>Mineral Prospecting and Mining Support Services</h2>
                            <p class="mb-4">
                                Alpha Grey Investments Limited with our vast experience can assist
                                any interested parties in the acquisition of mining claims and any other relevant
                                documentation with regard to mining in Ghana.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="services d-flex">
                        <div class="icon"><span class="flaticon-consult"></span></div>
                        <div class="text">
                            <h2>Consultancy Services</h2>
                            <p class="mb-4">
                                Interested parties who wish to invest in mining in Ghana can
                                walk right into the offices of Alpha Grey Investments and have answers to all their
                                questions. The viability of any project, verification of mining permits and licenses,
                                due
                                diligence works for example, are some issues that can be addressed.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="services d-flex">
                        <div class="icon"><span class="flaticon-project"></span></div>
                        <div class="text">
                            <h2>Geological, Geochemical and Geophysical Survey</h2>
                            <p class="mb-4">
                                Our expert team of geologists is ready to provide the following
                                geological services
                            <ul>
                                <li> Mineral exploration services
                                <li> Groundwater exploration using a variety of geophysical techniques
                                <li> Borehole Drilling and Drilling Supervision
                                <li> Management of groundwater resources
                                <li> Remote Sensing and Geographical Information Systems
                                <li> Rural water supply and management
                                <li> Groundwater monitoring and contaminant studies
                                <li> Baseline study into water resources and environmental mitigating measures for
                                    water supply and sanitation programs.
                                <li> Collation of hydrogeological and geological data as well as construction of
                                    hydrogeological maps for effective management of groundwater and surface
                                    water resources.
                                <li> Management of Exploration programs
                                <li> Facilitation of Investment in the water and mining sector
                                <li> Environmental management services, etc
                            </ul>
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