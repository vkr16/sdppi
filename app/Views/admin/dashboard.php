<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="shortcut icon" href="<?= HOST_URL ?>/public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/css/custom.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="d-flex">
        <?= $this->include('layout_components/sidebar'); ?>
        <section class="vh-100 w-100 scrollable-y">
            <?= $this->include('layout_components/topbar-admin'); ?>
            <div class="w-100 mb-5 pb-5">
                <div class="container-fluid">
                    <div class="col-md-12 d-flex justify-content-between align-items-center p-3 my-2">
                        <p class="fs-3 fw-normal m-0">Dashboard</p>
                        <nav aria-label="breadcrumb" class="m-0">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">Admin</li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>



                    <!-- Card Panels -->
                    <div class="container-fluid mt-3 ">
                        <div class="col-12 mb-4">
                            <div class="card bg-light">
                                <div class="card-body d-flex align-items-center">
                                    <span class="col-lg-8 col-12">
                                        <h1 class="fw-light" style="font-family: 'Nunito Sans'">Halo, <?= $userDataArray['name']; ?></h1>
                                        <h2 class="fw-light">Selamat Datang</h2>
                                    </span>
                                    <img src="<?= IMAGES_URL ?>/kominfo-logo-white.png" style=" height:250px" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <hr class="mt-5">

                    </div>
                    <div class="col-md-12 d-flex justify-content-between align-items-center p-3 mt-2">
                        <p class="fs-3 fw-normal m-0">Data Overview</p>
                        <!-- <nav aria-label="breadcrumb" class="m-0">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">Admin</li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav> -->
                    </div>

                    <!-- Widget -->
                    <div class="container-fluid row m-0 p-1">
                        <div class="col-12 col-md-6 p-0 p-2">
                            <div class=" p-2 rounded border d-flex flex-wrap gap-2 shadow bg-light">
                                <div class=" text-light rounded d-flex justify-content-center align-items-center" style="height: 60px; width:60px; background-color:#00458e">
                                    <i class="fa-solid fa-truck-fast fa-fw fa-2x"></i>
                                </div>
                                <span class="align-self-center d-grid gap-1">
                                    <p class="m-0">Pos</p>
                                    <p class="fw-bold m-0"><?= $dataCount[0]; ?> Data</p>
                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 p-0 p-2">
                            <div class="p-2 rounded border d-flex flex-wrap gap-2 shadow bg-light">
                                <div class=" text-light rounded d-flex justify-content-center align-items-center" style="height: 60px; width:60px; background-color:#00458e">
                                    <i class="fa-solid fa-tower-cell fa-fw fa-2x"></i>
                                </div>
                                <span class="align-self-center d-grid gap-1">
                                    <p class="m-0">Telekomunikasi</p>
                                    <p class="fw-bold m-0"><?= $dataCount[1]; ?> Data</p>
                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 p-0 p-2">
                            <div class=" p-2 rounded border d-flex flex-wrap gap-2 shadow bg-light">
                                <div class=" text-light rounded d-flex justify-content-center align-items-center" style="height: 60px; width:60px; background-color:#00458e">
                                    <i class="fa-solid fa-satellite-dish fa-fw fa-2x"></i>
                                </div>
                                <span class="align-self-center d-grid gap-1">
                                    <p class="m-0">Penyiaran</p>
                                    <p class="fw-bold m-0"><?= $dataCount[2]; ?> Data</p>
                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 p-0 p-2">
                            <div class=" p-2 rounded border d-flex flex-wrap gap-2 shadow bg-light">
                                <div class=" text-light rounded d-flex justify-content-center align-items-center" style="height: 60px; width:60px; background-color:#00458e">
                                    <i class="fa-solid fa-asterisk fa-fw fa-2x"></i>
                                </div>
                                <span class="align-self-center d-grid gap-1">
                                    <p class="m-0">Total</p>
                                    <p class="fw-bold m-0"><?= $dataCount[1] + $dataCount[0] + $dataCount[2]; ?> Data</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= $this->include('layout_components/footer-admin'); ?>

        </section>

    </div>


    <script src="<?= ASSETS_URL ?>/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= ASSETS_URL ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?= ASSETS_URL ?>/js/notiflix-aio-3.2.5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script>
        // Activate the sidebar item
        $('#sidebar-item-dashboard').addClass('sidebar-active').removeClass('sidebar-item')
    </script>
    <script src="<?= ASSETS_URL ?>/js/custom.js"></script>

</body>

</html>