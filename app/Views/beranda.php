<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
    <title>Beranda</title>
    <link rel="shortcut icon" href="<?= HOST_URL ?>/public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/css/custom.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>

<body style="background: rgb(0,69,142);background: linear-gradient(0deg, rgba(0,69,142,0.2024160005799195) 0%, rgba(255,255,255,0.3592787456779587) 100%);">
    <?= $this->include('layout_components/navbar'); ?>

    <div class="col-12 container">
        <div class="d-lg-flex d-block align-items-center justify-content-center" style="min-height: 75vh">
            <div class="col-lg-8 my-5">
                <div class="d-flex justify-content-center">
                    <img src="<?= IMAGES_URL ?>/kominfo-logo.png" style="width: 100px">
                </div>
                <div class=" mt-4">
                    <h1 class="h3 text-center fw-semibold" style="font-family: 'Nunito Sans'">Pusat Informasi Data Penyelenggara Pos Dan Informatika</h1>
                </div>
                <div class=" mt-4">
                    <h1 class="h4 text-center mb-0" style="font-family: 'Nunito Sans'">Direktorat Pengendalian Pos Dan Informatika </h1>
                </div>
                <div class="mb-5">
                    <h1 class="h4 text-center lh-none mb-0" style="font-family: 'Nunito Sans'">Kementerian Komunikasi Dan Informatika</h1>
                    <h1 class="h4 text-center lh-none mb-0" style="font-family: 'Nunito Sans'">Republik Indonesia</h1>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center my-5">
                <div class="">
                    <div class="card-body">
                        <div style="min-height: 300px; max-width: 100%;">
                            <canvas id="chartCount"></canvas>
                        </div>
                    </div>
                    <div class="card-footer text-center mt-2">
                        Data Jumlah Penyelenggara Terdaftar
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->include('layout_components/footer'); ?>

    <script src="<?= ASSETS_URL ?>/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script>
        const labels = [
            'Pos',
            'Telekomunikasi',
            'Penyiaran',
        ];

        const data = {
            labels: labels,
            datasets: [{
                label: 'Jumlah Penyelenggara',
                backgroundColor: ['#28166f', '#00458e', '#0093dd'],
                borderColor: ['#28166f', '#00458e', '#0093dd'],
                data: [<?= $chart[0]; ?>, <?= $chart[1]; ?>, <?= $chart[2]; ?>],
            }]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                }
            }
        };

        const chartCount = new Chart(
            document.getElementById('chartCount'),
            config
        );
    </script>

    </script>
</body>

</html>