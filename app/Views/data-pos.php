<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
    <title>Data Penyelenggara Pos</title>
    <link rel="shortcut icon" href="<?= base_url() ?>/public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('public/assets') ?>/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('public/assets') ?>/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?= base_url('public/assets') ?>/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('public/assets') ?>/css/custom.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>

<body style="background: rgb(0,69,142);background: linear-gradient(0deg, rgba(0,69,142,0.2024160005799195) 0%, rgba(255,255,255,0.3592787456779587) 100%);">
    <?= $this->include('layout_components/navbar'); ?>
    <div class="container">

        <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 container mt-5 text-center">
            <img src="<?= base_url('public/assets/img') ?>/kominfo-logo.png" alt="" style="width: 25%;">
        </div>
        <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2 container  mb-5">
            <h1 class="text-center mt-3 fw-bold h1" style="font-family: 'Nunito Sans'">Data Penyelenggara Pos</h1>
            <p class="text-center mt-2 lh-sm">
                Data berikut ini terakhir diperbarui pada <?= $lastUpdate[0]['content'] ?>
            </p>
        </div>
        <div class="py-5 container rounded border" style="background-color: rgba(255,255,255,0.5)">
            <div class="px-5 py-2 table-responsive">
                <table id="pos-table" class="table  table-hover">
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
                        <?php foreach ($posDataArray as $index => $pos) { ?>
                            <tr>
                                <td></td>
                                <td><?= $pos['nama']; ?></td>
                                <td><?= $pos['jenis_layanan']; ?></td>
                                <td><?= $pos['domisili']; ?></td>
                                <td><?= $pos['status']; ?></td>
                                <td><a class="text-decoration-none" href="http://<?= $pos['website']; ?>" target="_blank"><?= $pos['website']; ?></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <?= $this->include('layout_components/footer'); ?>


    <script src="<?= base_url('public/assets') ?>/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('public/assets') ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url('public/assets') ?>/datatables/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            var t = $('#pos-table').DataTable({
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