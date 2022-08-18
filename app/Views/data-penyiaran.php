<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
    <title>Data Penyelenggara Penyiaran</title>
    <link rel="shortcut icon" href="<?= HOST_URL ?>/public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/css/custom.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>

<body style="background: rgb(0,69,142);background: linear-gradient(0deg, rgba(0,69,142,0.2024160005799195) 0%, rgba(255,255,255,0.3592787456779587) 100%);">
    <?= $this->include('layout_components/navbar'); ?>
    <div class="container">

        <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 container mt-5 text-center">
            <img src="<?= IMAGES_URL ?>/kominfo-logo.png" alt="" style="width: 25%;">
        </div>
        <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2 container mb-5">
            <h1 class="text-center mt-3 fw-bold h1" style="font-family: 'Nunito Sans'">Data Penyelenggara Penyiaran</h1>
            <p class="text-center mt-2 lh-sm"> Data berikut ini diambil dari database pada <?= date_format(date_create('now'), 'd-m-Y H:i A'); ?>
            </p>
        </div>
        <div class="py-5 container rounded border" style="background-color: rgba(255,255,255,0.5)">
            <div class="px-5 py-2 table-responsive">
                <table id="penyiaran-table" class="table table-hover">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Nama</th>
                            <th>Jenis Layanan</th>
                            <th>Domisili</th>
                            <th>Status</th>
                            <th>Website</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($penyiaranDataArray as $index => $penyiaran) { ?>
                            <tr>
                                <td></td>
                                <td><?= $penyiaran['nama']; ?></td>
                                <td><?= $penyiaran['jenis_layanan']; ?></td>
                                <td><?= $penyiaran['domisili']; ?></td>
                                <td><?= $penyiaran['status']; ?></td>
                                <td><a class="text-decoration-none" href="http://<?= $penyiaran['website']; ?>" target="_blank"><?= $penyiaran['website']; ?></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?= $this->include('layout_components/footer'); ?>


    <script src="<?= ASSETS_URL ?>/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= ASSETS_URL ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?= ASSETS_URL ?>/datatables/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            var t = $('#penyiaran-table').DataTable({
                "language": {
                    "search": "Cari : ",
                    "lengthMenu": "Tampilkan _MENU_ data per halaman",
                    "zeroRecords": "Tidak ada data yang cocok ditemukan.",
                    "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
                    "infoEmpty": "Data tidak tersedia",
                    "infoFiltered": "(Difilter dari _MAX_ total data)",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",
                        "next": '<i class="fa-solid fa-angle-right"></i>',
                        "previous": '<i class="fa-solid fa-angle-left"></i>'
                    },
                },
                "columnDefs": [{
                    "orderable": false,
                    "targets": 0,
                }, ],
                "order": [
                    [1, 'asc']
                ],
            });

            t.on('order.dt search.dt', function() {
                let i = 1;

                t.cells(null, 0, {
                    search: 'applied',
                    order: 'applied'
                }).every(function(cell) {
                    this.data(i++);
                });
            }).draw();
        });
    </script>
</body>

</html>