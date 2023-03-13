<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
    <title>Informasi Penyelenggaraan</title>
    <link rel="shortcut icon" href="<?= base_url() ?>/public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('public/assets') ?>/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('public/assets') ?>/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('public/assets') ?>/css/custom.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body style="background: rgb(0,69,142);background: linear-gradient(0deg, rgba(0,69,142,0.2024160005799195) 0%, rgba(255,255,255,0.3592787456779587) 100%);">

    <style>
        .nav-link {
            color: #212529;
        }

        .nav-link:hover {
            color: #00458e;
        }

        .nav-tabs .nav-link.active {
            background-color: transparent;
            color: #0093dd;
        }
    </style>
    <?= $this->include('layout_components/navbar'); ?>
    <div class="container my-5" style="min-height: 70vh">

        <div class=" col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 container text-center">
            <img src="<?= base_url('public/assets/img') ?>/kominfo-logo.png" alt="" style="width: 25%;">
        </div>
        <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2 container">
            <h1 class="text-center mt-3 fw-bold h1" style="font-family: 'Nunito Sans'">Regulasi Penyelenggaraan</h1>
            <p class="text-center mt-2 lh-sm">

            </p>
        </div>

        <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2 container mt-5 p-4 rounded" style="background-color: rgba(255,255,255,0.5)">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Pos</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Telekomunikasi</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Penyiaran</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                    <p class="my-3"><?= $dataRegulasi[0]['content']; ?></p>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                    <p class="my-3"><?= $dataRegulasi[1]['content']; ?></p>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                    <p class="my-3"><?= $dataRegulasi[2]['content']; ?></p>
                </div>
            </div>
        </div>

    </div>

    <?= $this->include('layout_components/footer'); ?>


    <script src="<?= base_url('public/assets') ?>/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>