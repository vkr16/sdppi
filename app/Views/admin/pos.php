<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penyelenggara Pos</title>

    <link rel="shortcut icon" href="<?= HOST_URL ?>/public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= ASSETS_URL ?>/datatables/datatables.min.css">
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
            <div class="w-100">
                <div class="container-fluid">
                    <div class="col-md-12 row ps-3 py-3 my-2">
                        <span class="col-md-7">
                            <p class="fs-3 fw-normal m-0">Manajemen Data Penyelenggara Pos</p>
                        </span>
                        <nav aria-label="breadcrumb" class="m-0 col-md-5 d-flex align-items-center justify-content-end">
                            <ol class="breadcrumb m-0 ">
                                <li class="breadcrumb-item">Admin</li>
                                <li class="breadcrumb-item">Manajemen Data</li>
                                <li class="breadcrumb-item active" aria-current="page">Pos</li>
                            </ol>
                        </nav>
                    </div>


                    <!-- Card Panels -->
                    <div class="container-fluid mt-3">
                        <div class="col-12 mb-4">
                            <div class="card">
                                <div class="card-header bg-light-kominfo">
                                    <i class="fa-solid fa-truck-fast fa-fw"></i> &nbsp; Data Penyelenggara Pos
                                </div>
                                <div class="card-body table-responsive" style="min-height: 30vh">
                                    <table id="pos-table" class="table table-hover">
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
                                            <tr>
                                                <td></td>
                                                <td>Agung Gemilang perkasa</td>
                                                <td>Jarberstrunk</td>
                                                <td>KOTA ADM. JAKARTA UTARA, DKI JAKARTA</td>
                                                <td>Aktif</td>
                                                <td>agpradio.com</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>AJN Solusindo</td>
                                                <td>Jartaptup, NAP</td>
                                                <td>KOTA ADM. JAKARTA SELATAN, DKI JAKARTA</td>
                                                <td>Rekomendasi Pencabutan Izin</td>
                                                <td>ajn.co.id</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Alita Prayamitra</td>
                                                <td>Jartaptup</td>
                                                <td>KOTA ADM. JAKARTA SELATAN, DKI JAKARTA</td>
                                                <td>Aktif</td>
                                                <td>alita.id</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Alssa Corporindo</td>
                                                <td>Jarberstrunk</td>
                                                <td>KOTA ADM. JAKARTA TIMUR, DKI JAKARTA</td>
                                                <td>Aktif</td>
                                                <td>alssacorp.co.id</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Amron Citinet</td>
                                                <td>Jartaplok PS</td>
                                                <td>KOTA ADM. JAKARTA SELATAN, DKI JAKARTA</td>
                                                <td>Aktif</td>
                                                <td>citinet.co.id</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Angkasa Komunikasi Global Utama</td>
                                                <td>ISP, Jartaptup</td>
                                                <td>KOTA ADM. JAKARTA PUSAT, DKI JAKARTA</td>
                                                <td>Aktif</td>
                                                <td>angkasa.net.id</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Agung Gemilang perkasa</td>
                                                <td>Jarberstrunk</td>
                                                <td>KOTA ADM. JAKARTA UTARA, DKI JAKARTA</td>
                                                <td>Aktif</td>
                                                <td>agpradio.com</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Alita Prayamitra</td>
                                                <td>Jartaptup</td>
                                                <td>KOTA ADM. JAKARTA SELATAN, DKI JAKARTA</td>
                                                <td>Aktif</td>
                                                <td>alita.id</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Amron Citinet</td>
                                                <td>Jartaplok PS</td>
                                                <td>KOTA ADM. JAKARTA SELATAN, DKI JAKARTA</td>
                                                <td>Aktif</td>
                                                <td>citinet.co.id</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Angkasa Komunikasi Global Utama</td>
                                                <td>ISP, Jartaptup</td>
                                                <td>KOTA ADM. JAKARTA PUSAT, DKI JAKARTA</td>
                                                <td>Aktif</td>
                                                <td>angkasa.net.id</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-header bg-light-kominfo">
                                        <i class="fa-solid fa-clipboard-list fa-fw"></i> &nbsp; Input Data Penyelenggara
                                    </div>
                                    <div class="card-body">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="nav-single-input-tab" data-bs-toggle="tab" data-bs-target="#nav-single" type="button" role="tab" aria-controls="nav-single" aria-selected="true"> <i class="fa-solid fa-file-lines"></i> &nbsp; Single Input</button>
                                                <button class="nav-link" id="nav-batch-input-tab" data-bs-toggle="tab" data-bs-target="#nav-batch" type="button" role="tab" aria-controls="nav-batch" aria-selected="false"><i class="fa-solid fa-file-csv"></i> &nbsp; Batch Input</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-single" role="tabpanel" aria-labelledby="nav-single-input-tab" tabindex="0">
                                                <form action="" class="mt-4">
                                                    <div class="mb-3">
                                                        <label for="inputnamapenyelenggara" class="form-label">Nama Penyelenggara</label>
                                                        <input required type="text" class="form-control" id="inputnamapenyelenggara" placeholder="Nama Penyelenggara">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="inputjenislayanan" class="form-label">Jenis Layanan</label>
                                                        <input required type="text" class="form-control" id="inputjenislayanan" placeholder="Jenis Layanan">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="inputlokasi" class="form-label">Domisili Penyelenggara</label>
                                                        <input required type="text" class="form-control" id="inputlokasi" placeholder="Domisili Penyelenggara">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="inputstatus" class="form-label">Status</label>
                                                        <input required type="text" class="form-control" id="inputstatus" placeholder="Status">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="inputwebsite" class="form-label">Website</label>
                                                        <input required type="text" class="form-control" id="inputwebsite" placeholder="Website">
                                                    </div>
                                                    <button class="btn btn-kominfo"><i class="fa-solid fa-floppy-disk"></i> &nbsp;Simpan</button>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="nav-batch" role="tabpanel" aria-labelledby="nav-batch-input-tab" tabindex="0">
                                                <form action="" class="mt-4">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">Upload CSV File</label>
                                                        <input class="form-control" type="file" id="formFile">
                                                    </div>
                                                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                                                        <button class="btn btn-kominfo"> <i class="fa-solid fa-upload"></i> &nbsp;Upload Data</button>
                                                        <a href="#GSheetDocumentTemplate" target="csvGenerator" class="btn btn-success"> <i class="fa-solid fa-file-csv"></i> &nbsp;Open CSV Generator</a>
                                                    </div>
                                                </form>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-light-kominfo">
                                    </div>
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-file-pen fa-fw"></i></i> &nbsp; Update Data Penyelenggara</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="mb-3">
                                    <label for="updatenamapenyelenggara" class="form-label">Nama Penyelenggara</label>
                                    <input required type="text" class="form-control" id="updatenamapenyelenggara" placeholder="Nama Penyelenggara">
                                </div>
                                <div class="mb-3">
                                    <label for="updatejenislayanan" class="form-label">Jenis Layanan</label>
                                    <input required type="text" class="form-control" id="updatejenislayanan" placeholder="Jenis Layanan">
                                </div>
                                <div class="mb-3">
                                    <label for="updatelokasi" class="form-label">Domisili Penyelenggara</label>
                                    <input required type="text" class="form-control" id="updatelokasi" placeholder="Domisili Penyelenggara">
                                </div>
                                <div class="mb-3">
                                    <label for="updatestatus" class="form-label">Status</label>
                                    <input required type="text" class="form-control" id="updatestatus" placeholder="Status">
                                </div>
                                <div class="mb-3">
                                    <label for="updatewebsite" class="form-label">Website</label>
                                    <input required type="text" class="form-control" id="updatewebsite" placeholder="Website">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer d-flex justify-content-between">
                            <button class="btn btn-danger"> <i class="fa-solid fa-trash-can fa-fw"></i>&nbsp; Delete</button>
                            <div>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button class="btn btn-kominfo"><i class="fa-solid fa-floppy-disk fa-fw"></i> &nbsp;Simpan Perubahan</button>
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
    <script src="<?= ASSETS_URL ?>/datatables/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script>
        // Activate the sidebar item
        $('#sidebar-item-pos').addClass('sidebar-active').removeClass('sidebar-item');
        $('#management-collapse').addClass('show');
        $('#management-collapse-toggle').attr('aria-expanded', 'true');

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
    <script src="<?= ASSETS_URL ?>/js/custom.js"></script>

</body>

</html>