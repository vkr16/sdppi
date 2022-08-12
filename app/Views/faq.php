<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
    <title>Pertanyaan Umum</title>
    <link rel="shortcut icon" href="<?= HOST_URL ?>/public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/fontawesome/css/all.min.css">

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
            <img src="<?= IMAGES_URL ?>/kominfo-logo.png" alt="" style="width: 25%;">
        </div>
        <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2 container">
            <h1 class="text-center mt-3 fw-bold h1" style="font-family: 'Nunito Sans' !important">FAQ</h1>
        </div>

        <div class="container mt-5 p-4 rounded row mx-auto " style="background-color: rgba(255,255,255,0.5); font-family: Nunito Sans;">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?= $this->include('layout_components/footer'); ?>


    <script src="<?= ASSETS_URL ?>/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>