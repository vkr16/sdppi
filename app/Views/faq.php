<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
    <title>Pertanyaan Umum</title>
    <link rel="shortcut icon" href="<?= base_url() ?>/public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('public/assets') ?>/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('public/assets') ?>/fontawesome/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body style="background: rgb(0,69,142);background: linear-gradient(0deg, rgba(0,69,142,0.2024160005799195) 0%, rgba(255,255,255,0.3592787456779587) 100%);">
    <style>
        .accordion-button:focus {
            box-shadow: none;
        }
    </style>
    <?= $this->include('layout_components/navbar'); ?>
    <div class="container my-5" style="min-height: 70vh">

        <div class=" col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 container text-center">
            <img src="<?= base_url('public/assets/img') ?>/kominfo-logo.png" alt="" style="width: 25%;">
        </div>
        <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2 container">
            <h1 class="text-center mt-3 fw-bold h1" style="font-family: 'Nunito Sans' !important">FAQ</h1>
        </div>

        <div class="container mt-5 p-4 rounded row mx-auto " style="background-color: rgba(255,255,255,0.5); font-family: Nunito Sans;">
            <div class="accordion" id="accordionExample">
                <?php foreach ($faqDataArray as $index => $faq) { ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $faq['id']; ?>" aria-controls="collapse<?= $faq['id']; ?>">
                                <?= $faq['question']; ?>
                            </button>
                        </h2>
                        <div id="collapse<?= $faq['id']; ?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?= $faq['answer']; ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>

    <?= $this->include('layout_components/footer'); ?>


    <script src="<?= base_url('public/assets') ?>/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>