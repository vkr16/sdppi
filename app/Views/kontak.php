<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
    <title>Hubungi Kami</title>
    <link rel="shortcut icon" href="<?= base_url() ?>/public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('public/assets') ?>/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('public/assets') ?>/fontawesome/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body style="background: rgb(0,69,142);background: linear-gradient(0deg, rgba(0,69,142,0.2024160005799195) 0%, rgba(255,255,255,0.3592787456779587) 100%);">
    </style>
    <?= $this->include('layout_components/navbar'); ?>
    <div class="container my-5" style="min-height: 70vh">

        <div class=" col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 container text-center">
            <img src="<?= base_url('public/assets/img') ?>/kominfo-logo.png" alt="" style="width: 25%;">
        </div>
        <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2 container">
            <h1 class="text-center mt-3 fw-bold h1" style="font-family: 'Nunito Sans' !important">KONTAK KAMI</h1>
        </div>

        <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 container mt-5 p-4 rounded row mx-auto " style="background-color: rgba(255,255,255,0.5); font-family: Nunito Sans;">
            <div class="col-lg-6 mb-4">
                <strong><i class="fa-solid fa-location-dot fa-fw"></i> Gedung Utama Kementerian KOMINFO</strong> <br>
                Jl. Medan Merdeka Barat No.9 <br>
                RT.2/RW.3, Gambir, Kecamatan Gambir, <br>
                Jakarta Pusat, DKI Jakarta 10110 <br><br>
                &#8226; TU Dirjen PPI <br>
                &#8226; Sekretariat Ditjen PPI <br>
                &#8226; Direktorat Pengembangan Pita Lebar <br>
                &#8226; Direktorat Penyiaran <br><br>
                <strong><i class="fa-solid fa-location-dot fa-fw"></i> Gedung Sapta Pesona</strong> <br>
                Jalan Medan Merdeka Barat No.17 <br>
                Gambir, Jakarta Pusat<br>
                DKI Jakarta 10110, Indonesia <br><br>
                &#8226; Direktorat Pos PPI <br>
                &#8226; Direktorat Telekomunikasi <br><br>
                <strong><i class="fa-solid fa-location-dot fa-fw"></i> Wisma Antara Lt.9</strong><br>
                Jl. Medan Merdeka Sel. No.17 <br>
                Gambir, Kec. Gambir, Jakarta Pusat <br>
                DKI Jakarta 10110 <br><br>
                &#8226; Direktorat Pengendalian Pos & Informatika <br>

            </div>
            <div class="col-lg-6">
                <dl class="row">
                    <dt class="col-md-4"> <i class="fa-brands fa-twitter"></i> &nbsp; Twitter</dt>
                    <dd class="col-md-8"><a href="https://twitter.com/DJPPIKominfo" class="text-decoration-none">@DJPPIKominfo
                        </a></dd>
                    <dt class="col-md-4"> <i class="fa-brands fa-instagram"></i> &nbsp; Instagram</dt>
                    <dd class="col-md-8"><a href="https://www.instagram.com/ditjenppi.kominfo/" class="text-decoration-none">@ditjenppi.kominfo
                        </a></dd>
                </dl>
            </div>
        </div>

    </div>

    <?= $this->include('layout_components/footer'); ?>


    <script src="<?= base_url('public/assets') ?>/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>