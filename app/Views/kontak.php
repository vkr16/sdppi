<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
    <title>Hubungi Kami</title>
    <link rel="shortcut icon" href="<?= HOST_URL ?>/public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/fontawesome/css/all.min.css">

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
            <img src="<?= IMAGES_URL ?>/kominfo-logo.png" alt="" style="width: 25%;">
        </div>
        <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2 container">
            <h1 class="text-center mt-3 fw-bold h1" style="font-family: 'Nunito Sans' !important">KONTAK KAMI</h1>
        </div>

        <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 container mt-5 p-4 rounded row mx-auto " style="background-color: rgba(255,255,255,0.5); font-family: Nunito Sans;">
            <div class="col-lg-5 mb-4">
                <strong><i class="fa-solid fa-location-dot fa-fw"></i> Gedung Sapta Pesona</strong> <br>
                Jalan Medan Merdeka Barat No.17 <br>
                Jakarta 10110, Indonesia <br><br>
                <strong><i class="fa-solid fa-location-dot fa-fw"></i> Wisma Antara Lt.1</strong><br>
                Jl. Medan Merdeka Sel. No.17, <br>
                RT.11/RW.2, Gambir, <br>
                Kecamatan Gambir, Kota Jakarta Pusat, <br>
                Daerah Khusus Ibukota Jakarta 10110
            </div>
            <div class="col-lg-7">
                <dl class="row">
                    <dt class="col-md-4"> <i class="fa-solid fa-phone"></i> &nbsp; Telepon</dt>
                    <dd class="col-md-8">159</dd>
                    <dt class="col-md-4"> <i class="fa-solid fa-envelope"></i> &nbsp; Email</dt>
                    <dd class="col-md-8"><a href="mailto:callcenter_sdppi@kominfo.go.id" class="text-decoration-none">callcenter_sdppi@kominfo.go.id</a></dd>
                    <dt class="col-md-4"> <i class="fa-solid fa-fax"></i> &nbsp; Faksimile</dt>
                    <dd class="col-md-8">021 3000 3111</dd>
                </dl>
            </div>
        </div>

    </div>

    <?= $this->include('layout_components/footer'); ?>


    <script src="<?= ASSETS_URL ?>/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>