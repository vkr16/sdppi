<nav class="navbar navbar-expand-lg navbar-light" aria-label="Navigation Bar">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?= IMAGES_URL ?>/logo-banner.png" alt="" width="250">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-menu" style="font-family: 'Open Sans'">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item mx-2">
                    <a class="nav-link" href="<?= HOST_URL ?>/">Beranda</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="informasi">Informasi Penyelenggaraan</a>
                </li>
                <!-- <li class="nav-item mx-2 dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Informasi</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="regulasi">Regulasi</a></li>
                        <li><a class="dropdown-item" href="#">Prosedur Pengajuan Izin</a></li>
                    </ul>
                </li> -->
                <li class="nav-item mx-2 dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Data Penyelenggara</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="data-pos">Pos</a></li>
                        <li><a class="dropdown-item" href="data-telekomunikasi">Telekomunikasi</a></li>
                        <li><a class="dropdown-item" href="data-penyiaran">Penyiaran</a></li>
                    </ul>
                </li>
                <li class="nav-item ms-2">
                    <a class="nav-link " href="faq">FAQ</a>
                </li>
                <li class="nav-item ms-2">
                    <a class="nav-link " href="kontak">Hubungi Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>