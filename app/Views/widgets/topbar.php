<nav class="navbar navbar-expand-lg  ftco-navbar-light">
    <div class="container-xl">
        <a class="navbar-brand aside-stretch align-items-center" href="<?= base_url() ?>">
            Alpha Grey
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link <?= session()->getTempdata("home")?>" href="<?= base_url() ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link <?= session()->getTempdata("about")?>" href="<?= base_url() ?>/about">About</a></li>
                <li class="nav-item"><a class="nav-link <?= session()->getTempdata("services")?>" href="<?= base_url() ?>/services">Services</a></li>
                <li class="nav-item"><a class="nav-link <?= session()->getTempdata("project")?>" href="<?= base_url() ?>/projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link <?= session()->getTempdata("contact")?>" href="<?= base_url() ?>/contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>