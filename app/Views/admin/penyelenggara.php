<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghapusan Data <?= $_GET['x']; ?></title>

    <link rel="shortcut icon" href="<?= base_url() ?>/public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('public/assets') ?>/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('public/assets') ?>/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('public/assets') ?>/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?= base_url('public/assets') ?>/css/custom.css">

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
            <div class="w-100">
                <div class="container-fluid">
                    <div class="col-md-12 row ps-3 py-3 my-2">
                        <span class="col-md-7">
                            <p class="fs-3 fw-normal m-0">Penghapusan Data <?= $_GET['x']; ?></p>
                        </span>
                        <nav aria-label="breadcrumb" class="m-0 col-md-5 d-flex align-items-center justify-content-end">
                            <ol class="breadcrumb m-0 ">
                                <li class="breadcrumb-item">Admin</li>
                                <li class="breadcrumb-item">Manajemen Data</li>
                                <li class="breadcrumb-item"><?= $_GET['x']; ?></li>
                                <li class="breadcrumb-item active" aria-current="page">Hapus Data</li>
                            </ol>
                        </nav>
                    </div>

                    <!-- Card Panels -->
                    <div class="container-fluid mt-3">
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-header bg-light-kominfo d-flex justify-content-between align-items-center">
                                    <span><i class="fa-solid fa-database fa-fw"></i> &nbsp; Data Penyelenggara <?= $_GET['x']; ?></span>
                                    <span>
                                        <button class="btn btn-danger btn-sm" onclick="confirmDeletion()"><i class="fa-solid fa-trash-alt fa-fw"></i> Hapus data terpilih</button>
                                    </span>
                                </div>
                                <div class="card-body table-responsive" style="min-height: 30vh">
                                    <table id="penyelenggara-table" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">No</th>
                                                <th>Hapus</th>
                                                <th>Nama</th>
                                                <th>Jenis Layanan</th>
                                                <th>Domisili</th>
                                                <th>Status</th>
                                                <th>Website</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($penyelenggaraDataArray as $index => $penyelenggara) { ?>
                                                <tr>

                                                    <td role="button"></td>
                                                    <td role="button"><label class="btn btn-primary" for="cb<?= $penyelenggara['id']; ?>"><input id="cb<?= $penyelenggara['id']; ?>" type="checkbox" class="form-check-input delete-candidate" onchange="triggerSelect(<?= $penyelenggara['id']; ?>)"></label></td>
                                                    <td role="button"><?= $penyelenggara['nama']; ?></td>
                                                    <td role="button"><?= $penyelenggara['jenis_layanan']; ?></td>
                                                    <td role="button"><?= $penyelenggara['domisili']; ?></td>
                                                    <td role="button"><?= $penyelenggara['status']; ?></td>
                                                    <td><a class="text-decoration-none" href="http://<?= $penyelenggara['website']; ?>" target="_blank"><?= $penyelenggara['website']; ?></a></td>

                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <?= $this->include('layout_components/footer-admin'); ?>
        </section>

    </div>


    <script src="<?= base_url('public/assets') ?>/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('public/assets') ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url('public/assets') ?>/js/notiflix-aio-3.2.5.min.js"></script>
    <script src="<?= base_url('public/assets') ?>/datatables/datatables.min.js"></script>
    <script src="<?= base_url('public/assets') ?>/js/custom.js"></script>

    <script>
        // Activate the sidebar item
        $('#management-collapse-toggle').addClass('sidebar-active').removeClass('sidebar-item');

        $(document).ready(function() {
            var t = $('#penyelenggara-table').DataTable({
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

        var arrSelected = []

        function triggerSelect(id) {
            if ($('#cb' + id).is(":checked") == true) {
                arrSelected.push(id)
            } else if ($('#cb' + id).is(":checked") == false) {
                arrSelected = arrSelected.filter(function(item) {
                    return item !== id
                })
            }
            console.log(arrSelected)
        }

        function confirmDeletion() {
            Notiflix.Confirm.show(
                'Konfirmasi Penghapusan Sekaligus',
                'Anda yakin ingin menghapus ' + arrSelected.length + ' data?',
                'Ya, Hapus',
                'Batalkan',
                () => {
                    $.post("penyelenggara/bulkDelete", {
                            ids: arrSelected,
                            x: '<?= $_GET['x']; ?>'
                        })
                        .done(function(data) {
                            if (data == 'failed') {
                                Notiflix.Notify.failure("Penghapusan Gagal");
                            } else {
                                Notiflix.Notify.success(data);
                                setTimeout(() => {
                                    location.reload();
                                }, "1000")
                            }
                        });
                },
                () => {}, {},
            );
        }
    </script>
</body>

</html>